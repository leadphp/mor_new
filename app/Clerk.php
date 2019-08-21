<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clerk extends Model
{
    //
    protected $fillable = [
        'bank_type', 'bank', 'branch', 'city', 'address', 'clerk_name', 'main_phone', 'fax', 'mail'
    ];
}
