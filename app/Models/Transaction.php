<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'invoice',
        'total',
        'paid',
        'change',
        'user_id',
    ];
}
