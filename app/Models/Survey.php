<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $casts = [
        'published' => 'boolean'
    ];

    protected $fillable = [
        'title', 'published', 'user_id'
    ];
}
