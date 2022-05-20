<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;


    // relacion polimorfica uno a uno
    public function imageable()
    {
        return $this->morphTo();
    }
}
