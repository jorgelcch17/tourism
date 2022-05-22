<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    //relacion de uno a muchos inversa con tourism places
    public function tourism_places()
    {
        return $this->belongsTo(TourismPlace::class);
    }

    // relacion polimorfica una a una con Image
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
