<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerManual extends Model
{
    protected $fillable = [
        'customer_id', 'manual_id'
    ];
}
