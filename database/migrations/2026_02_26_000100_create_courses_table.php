<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();

            $table->date('start_date')->nullable();
            $table->string('duration')->nullable();
            $table->unsignedInteger('lectures')->nullable();
            $table->unsignedInteger('fees')->nullable(); // in Rs

            $table->string('short_description', 500)->nullable();
            $table->longText('long_description')->nullable();

            // Instructor section
            $table->string('instructor_name')->nullable();
            $table->string('instructor_position')->nullable();
            $table->string('instructor_image')->nullable();

            $table->unsignedTinyInteger('rating')->nullable(); // 1-5

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->boolean('status')->default(true);

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

