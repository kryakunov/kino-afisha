<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    protected $table = 'film_genre';
    protected $fillable = ['film_id', 'genre_id'];

    public $timestamps = false;
}
