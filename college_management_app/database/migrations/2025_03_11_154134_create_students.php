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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // This makes the email unique, removing duplicate emails from different students
            $table->string('phone', 8); // The phone will be a maximum of 8 characters long
            $table->date('dob');
            $table->foreignId('college_id')->constrained()->onDelete('cascade'); // This is done in case a college is deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
