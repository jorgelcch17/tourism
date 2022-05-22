<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['body'];
    
    //relacion polimorfica con image uno a uno
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
