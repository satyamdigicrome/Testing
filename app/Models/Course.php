<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'image',
        'start_date',
        'duration',
        'lectures',
        'fees',
        'short_description',
        'long_description',
        'instructor_name',
        'instructor_position',
        'instructor_image',
        'rating',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'start_date' => 'date',
        'lectures' => 'integer',
        'fees' => 'integer',
        'rating' => 'integer',
        'status' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer',
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(CourseReview::class);
    }
}

