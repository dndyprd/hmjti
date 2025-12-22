<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Models\Proker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput; 
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile; 

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([  
                // TITLE & PROKER
                TextInput::make('title')
                    ->label('Judul Kegiatan')
                    ->placeholder('Judul Kegiatan Terlaksana')
                    ->required(), 
                Select::make('proker_id')
                    ->label('Program Kerja')
                    ->options(function () {
                        return Proker::query()
                            ->orderBy('slug')
                            ->pluck('slug', 'id')
                            ->toArray();
                    })
                    ->searchable()
                    ->preload()
                    ->native(false),
                // TANGGAL KEGIATAN & STATUS 
                Grid::make(2) 
                    ->schema([ 
                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai Kegiatan')
                            ->required(),
                        DatePicker::make('end_date')
                            ->label('Tanggal Akhir Kegiatan')
                            ->required(),
                    ]),
                Radio::make('status')
                    ->label('Status Blog')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])->inline(), 
                    
                // THUMBNAIL KEGIATAN
                FileUpload::make('thumbnail')
                    ->label('Foto Thumbnail')
                    ->disk('public')
                    ->directory('img/blogs')
                    ->visibility('public') 
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->imageEditorMode(2)
                    ->panelAspectRatio('16:7')
                    ->acceptedFileTypes([
                        'image/png',
                        'image/jpeg',
                        'image/jpg',
                        'image/webp',
                        'image/gif',
                    ])
                    ->getUploadedFileNameForStorageUsing(
                        // CUSTOM FILENAME
                        function (TemporaryUploadedFile $file, $get, $set): string { 
                            $title = $get('title');
                             
                            $slug = Str::slug($title);
                             
                            if (empty($slug)) {
                                $slug = 'thumbnail';
                            }
                             
                            $timestamp = now()->format('Ymd_His'); 
                            $extension = $file->getClientOriginalExtension(); 

                            return "{$slug}_{$timestamp}.{$extension}";
                        }
                    )
                    ->maxSize(5120)
                    ->image()
                    ->required()
                    ->columnSpanFull(),
                
                // CONTENT KEGIATAN
                RichEditor::make('content')
                    ->label('Deskripsi Kegiatan')
                    ->placeholder('Informasi kegiatan seperti tema, tujuan atau pemegang program kerja. Gunakan "Ctrl + Enter" untuk spasi dengan gap kecil.')
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'], 
                        ['undo', 'redo'],
                    ])
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('blogs/attachments') 
                    ->fileAttachmentsMaxSize(1500) 
                    ->columnSpanFull(),
                
                // GALLERY IMAGE
                Repeater::make('blog_gallery')
                    ->label('Galeri Kegiatan')
                    ->relationship('blog_gallery')
                    ->schema([    
                        FileUpload::make('photo')
                            ->label('Foto Dokumentasi')
                            ->disk('public')
                            ->directory('img/blogs/gallery')
                            ->visibility('public') 
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorMode(2)
                            ->panelAspectRatio('16:7')
                            ->acceptedFileTypes([
                                'image/png',
                                'image/jpeg',
                                'image/jpg',
                                'image/webp',
                                'image/gif',
                            ])
                            ->getUploadedFileNameForStorageUsing(
                                // CUSTOM FILENAME
                                function (TemporaryUploadedFile $file, $get, $set): string { 
                                    $title = $get('../../title'); 
                                    $slug = Str::slug($title);
                                    
                                    if (empty($slug)) {
                                        $slug = 'gallery';
                                    }
                                    
                                    // Format Name
                                    $uniqueId = uniqid();
                                    $timestamp = now()->format('Ymd_His'); 
                                    $extension = $file->getClientOriginalExtension(); 

                                    return "{$slug}_{$timestamp}_{$uniqueId}.{$extension}";
                                }
                            )
                    ])   
                    ->required()
                    ->grid(2)
                    ->defaultItems(4) 
                    ->addActionLabel('Tambah Foto')
                    ->columnSpanFull(),
            ]);
    }
}
