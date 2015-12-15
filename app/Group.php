<?php

namespace App;

use App\Traits\SluggableTitle;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use SluggableTitle;

    protected $fillable = [ 'title', 'description', 'headers' ];

    protected $casts = [
        'headers' => 'object'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
