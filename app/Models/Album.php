<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // relacion de uno a muchos inversa
    public function tourism_places()
    {
        return $this->belongsTo(TourismPlace::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
//relacion polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
