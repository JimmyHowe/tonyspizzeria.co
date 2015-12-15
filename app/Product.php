<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'group_id', 'prices', 'options'];

    protected $casts = [
        'prices' => 'object',
        'options' => 'object'
    ];
}
