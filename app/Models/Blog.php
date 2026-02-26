<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'image',
        'status',
        'short_description',
        'long_description',
        'author_name',
        'author_image',
        'author_description',
        'tags',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'status' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer',
    ];
}

