<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'Car';
    protected $fillable = [
        'carperson', 'data', 'status', 'reason',
    ];
}
