<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name', 'position', 'image',
        'facebook_url', 'linkedin_url', 'twitter_url',
        'order', 'status', 'created_by',
    ];

    protected $casts = [
        'order'      => 'integer',
        'status'     => 'boolean',
        'created_by' => 'integer',
    ];
}
