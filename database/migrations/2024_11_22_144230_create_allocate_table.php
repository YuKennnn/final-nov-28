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
        Schema::create('allocate', function (Blueprint $table) {
            $table->id();
            $table->string('locker_number')->unique();   // Locker Number, unique
            $table->string('student_id');  // Student ID (Required)
            $table->string('last_name');   // Last Name (Required)
            $table->string('first_name');  // First Name (Required)
            $table->string('program');     // Program (Required)
            $table->string('year_set');    // Year and Set (Required)
            $table->date('date_rented');   // Date Rented (Required)
            $table->date('date_ended');    // Date Ended (Required)
            $table->string('email', 30);   // Email (Required, Max 30 characters)
            $table->decimal('payment', 8, 2);  // Payment amount (Required)
            $table->timestamps();
            $table->softDeletes();  // Add the deleted_at column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocate');
    }
};
