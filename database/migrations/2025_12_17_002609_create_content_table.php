<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // TABLE BIDANG 
        Schema::create('bidang', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
        });

        // TABLE PROKER (MASTER DATA)
        Schema::create('prokers', function (Blueprint $table) {
            $table->id();
            $table->string('name');   
            $table->string('abbreviation');
            $table->string('thumbnail');
            $table->string('slug')->unique();   
            $table->text('description')->nullable();    
            $table->text('bidang_id')->constrainted('bidang')->onDelete('cascade'); 
            $table->timestamps();
            $table->softDeletes();
        });

        // BLOG KEGIATAN HMJ
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();  
            $table->longText('content');  
            $table->date('date'); 
            $table->string('location')->nullable(); 
            $table->string('thumbnail');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->integer('view_count')->default(0);   
            $table->timestamps();
            $table->softDeletes();
        });

        // TABLE RELASI BLOG - PROKER  
        Schema::create('blog_proker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->foreignId('proker_id')->constrained('prokers')->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['blog_id', 'proker_id']);  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_proker');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('prokers');
        Schema::dropIfExists('proker');
    }
};