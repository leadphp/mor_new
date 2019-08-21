<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaTags extends Model
{
    protected $fillable = [
        'slug','meta_title','meta_keywords','meta_descriptions'
    ];
}
