<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentPage extends Model
{
    protected $fillable = [
        'page_type',
        'content',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'status' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer',
    ];
}

