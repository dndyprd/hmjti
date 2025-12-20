<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Hi, Dandy disini. Tinggal jejak sebagai Back-end
     */
    public function up(): void
    {
        // TABLE BIDANG 
        Schema::create('bidangs', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description'); 
            $table->integer('number')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        // TABLE PROKER
        Schema::create('prokers', function (Blueprint $table) {
            $table->id();
            $table->string('name');   
            $table->string('slug');   
            $table->text('description')->nullable();    
            $table->integer('bidang_id')->constrainted('bidangs')->onDelete('cascade')->nullable(); 
            $table->timestamps();
            $table->softDeletes();
        });

        // BLOG KEGIATAN HMJ
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->string('slug')->unique();  
            $table->longText('content');  
            $table->date('start_date')->nullable();   
            $table->date('end_date')->nullable();   
            $table->integer('proker_id')->constrainted('prokers')->onDelete('cascade');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('blog_gallery', function(Blueprint $table){
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade'); 
            $table->string('photo');  
            $table->timestamps();
        });
    }

    public function down(): void
    { 
        Schema::dropIfExists('blog_gallery');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('prokers');
        Schema::dropIfExists('bidangs');
    }
};