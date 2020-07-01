<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'content', 'question_id', 'answer_sheet_id', 'survey_id', 'question_type'
    ];
}
