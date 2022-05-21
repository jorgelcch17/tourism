<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment'];

    //uno a muchos inversa con comments
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //relacion polimorfica commentable
    public function commentable()
    {
        return $this->morphTo();
    }
}
