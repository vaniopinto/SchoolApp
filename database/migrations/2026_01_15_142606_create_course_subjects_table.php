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
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->foreignUuid('course_id')->constrained();
            $table->foreignUuid('subject_id')->constrained();
            $table->foreignUuid('level_id')->constrained();
            $table->unique(['course_id', 'subject_id', 'level_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_subjects');
    }
};
