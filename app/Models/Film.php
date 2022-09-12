<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genres_films', 'film_id', 'genre_id');
    }
}
