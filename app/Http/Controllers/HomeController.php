<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use App\FilmGenre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function setPublic($id)
    {
        $film = new Film();
        $film->setPublic($id);

        return redirect()->route('films.index')->with('success', 'Успешно опубликовано');
    }

    public function genres()
    {
        $genres = Genre::all();
        echo $genres->toJson();
    }

    public function films()
    {
        $films = Film::all();
        echo $films->toJson();
    }

    public function genre($id)
    {
        $genres = Genre::find($id);
        echo $genres->films->toJson();
    }

    public function film($id)
    {
        $film = Film::find($id);
        echo $film->toJson();
    }
}
