<?php namespace App\Traits;

use Illuminate\Support\Str;

trait SluggableTitle
{
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}