<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use App\Traits\HandlesFilamentErrors;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBlog extends CreateRecord
{
    use HandlesFilamentErrors;

    protected static string $resource = BlogResource::class;

    /**
     * Override create method to handle errors gracefully
     */
    protected function handleRecordCreation(array $data): Model
    {
        try {
            return parent::handleRecordCreation($data);
        } catch (\Throwable $exception) {
            $this->handleRecordCreationError($exception);
            
            // Stop the creation process
            $this->halt();
        }
    }
}
