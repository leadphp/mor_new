<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'coupon_code', 'type', 'description', 'amount'
    ];
}
