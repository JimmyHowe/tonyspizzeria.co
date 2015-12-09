<?php

namespace App;

use App\Traits\SluggableTitle;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use SluggableTitle;

    protected $fillable = [ 'title', 'key' ];
}
