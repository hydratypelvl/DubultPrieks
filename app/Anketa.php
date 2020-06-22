<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anketa extends Model
{
    protected $casts = [
        'date' => 'array'
    ];
}
