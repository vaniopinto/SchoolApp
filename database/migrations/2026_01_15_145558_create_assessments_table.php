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
        Schema::create('assessments', function (Blueprint $table) {
             $table->uuid('id')->unique()->primary();
             $table->foreignId('subject_id')->constrained();
             $table->foreignId('class_id')->constrained();
             $table->foreignId('semester_id')->constrained();
             $table->enum('type', ['test', 'exam', 'project']);
             $table->decimal('weight', 5, 2);
             $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
