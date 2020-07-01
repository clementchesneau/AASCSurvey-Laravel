<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionElement extends Model
{
    protected $fillable = [
        'content', 'survey_id', 'question_id'
    ];
}
