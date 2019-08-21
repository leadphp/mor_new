<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    protected $fillable = [
        'key', 'value', 'type', 'parent'
    ];
}
