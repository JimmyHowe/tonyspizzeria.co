<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'prices' => 'object',
        'options' => 'object'
    ];
}
