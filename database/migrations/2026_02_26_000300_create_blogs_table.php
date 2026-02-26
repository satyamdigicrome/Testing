<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('thumbnail')->nullable();
            $table->string('image')->nullable();

            $table->boolean('status')->default(true);

            $table->string('short_description', 500)->nullable();
            $table->longText('long_description')->nullable();

            $table->string('author_name')->nullable();
            $table->string('author_image')->nullable();
            $table->text('author_description')->nullable();

            $table->string('tags')->nullable(); // comma-separated string

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

