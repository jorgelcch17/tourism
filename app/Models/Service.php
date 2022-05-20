<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    //uno a muchos inversa con users
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function service_categories()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
    //relacion polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
