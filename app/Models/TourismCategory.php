<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    //relacion de uno a muchos con tourism places
    public function tourism_places()
    {
        return $this->hasMany(TourismPlace::class);
    }
}
