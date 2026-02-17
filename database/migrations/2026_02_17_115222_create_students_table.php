<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();                         // Auto-incrementing ID
        $table->string('name');                 // Student's full name
        $table->string('email')->unique();      // Email (must be unique)
        $table->string('course');                // Their course/program
        $table->string('year_level');            // 1st Year, 2nd Year, etc.
        $table->timestamps();                    // Created_at and updated_at
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
