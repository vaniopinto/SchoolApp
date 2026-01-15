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
        Schema::create('enrollements', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
             $table->foreignId('student_id')->constrained();
             $table->foreignId('class_id')->constrained();
             $table->foreignId('academic_year_id')->constrained();
             $table->enum('status', ['active', 'transferred', 'dropped']);
             $table->unique(['student_id', 'academic_year_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollements');
    }
};
