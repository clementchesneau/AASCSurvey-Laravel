<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer_sheet extends Model
{
    protected $fillable = [
        'ip', 'survey_id'
    ];
}
