<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'text',
        'image',
        'rating',
        'status',
        'created_by',
    ];

    protected $casts = [
        'rating'     => 'integer',
        'status'     => 'boolean',
        'created_by' => 'integer',
    ];
}
