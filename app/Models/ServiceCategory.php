<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;


    //uno a muchos con service
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
