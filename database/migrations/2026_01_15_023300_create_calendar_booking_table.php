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
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location')->nullable();
            
            // Contact Person
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            
            // Additional Info
            $table->enum('status', ['pending', 'approved', 'rejected', 'cancelled'])->default('pending');
            $table->string('color')->default('#3b82f6');
            $table->text('notes')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar_bookings'); 
    }
};
