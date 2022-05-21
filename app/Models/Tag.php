<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    //relacion de muchos a muchos con TourismPlace
    public function tourism_places()
    {
        return $this->belongsToMany(TourismPlace::class);
    }
}
