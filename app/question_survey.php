<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_survey extends Model
{
    //
    protected $fillable = [
        'user_id', 'meta_key','meta_value','question_id','parent_id'
    ];
}
