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
        Schema::create('class_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('course_id')->constrained();
            $table->foreignUuid('level_id')->constrained();
            $table->foreignUuid('academic_year_id')->constrained();
            $table->foreignUuid('shift_id')->constrained();
            $table->string('code'); // A, B, C
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_groups');
    }
};
