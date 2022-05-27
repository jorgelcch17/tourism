<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismPlace extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image360', 'description', 'location', 'is_active', 'date','time','weater','price', 'altitude', 'essential'];

    //uno a mucho con albums
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    //relacion de uno a muchos inversa tourism_categories
    public function tourism_category()
    {
        return $this->belongsTo(TourismCategory::class);
    }

    //uno a muchos con routes
    public function routes()
    {
        return $this->hasMany(Route::class);
    }
    //uno a muchos con tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //relacion de muchos a muchos con tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    //relacion de uno a muchos inversa con users

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //relacion polimorfica de uno a uno con image
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //relacion polimorfica de uno a muchos con comments
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    

}
