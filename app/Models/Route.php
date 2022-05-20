<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    //uno a muchos inversa con tourism places
    public function tourism_places()
    {
        return $this->belongsTo(TourismPlace::class);
    }
}
