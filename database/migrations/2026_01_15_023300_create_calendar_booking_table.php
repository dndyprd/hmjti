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
        Schema::create('calendar_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('title');  
            $table->text('description')->nullable();  
            $table->date('event_date')->unique();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('location')->nullable();
            
            // Contact Person
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();  
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar_bookings'); 
    }
};
