<?php

namespace App\Http\Controllers;

use App\Film;
use App\Genre;
use App\FilmGenre;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index()
    {
        $films = Film::all();

        return view('films.index', compact('films'));
    }


    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'poster' => 'nullable|image',
            'genre' => 'required',
        ]);


        $poster = $request->file('poster');

        if ($poster !== null) {
            $poster = $poster->store('uploads');
        }

        $film = Film::create([
            'title' => $request->input('title'),
            'status' => Film::IS_DRAFT,
            'poster' => $poster,
        ]);

        FilmGenre::create([
            'film_id' => $film->id,
            'genre_id' => $request->input('genre'),
        ]);

        return redirect()->route('films.index');
    }


    public function show($id)
    {
        $film = Film::find($id);
        
        return view('films.show', ['film' => $film]);
    }


    public function edit($id)
    {
        $film = Film::find($id);

        return view('films.edit', [
            'id' => $id, 
            'film' => $film
        ]);

    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'poster' => 'nullable|image'
        ]);
        
        $film = Film::find($id);

        Storage::delete($film->poster);

        $poster = $film->poster;

        if ($request->file('poster') !== null) {
            $poster = $request->file('poster')->store('uploads');
        }

        $film->title = $request->input('title');
        $film->poster = $poster;

        $film->save();

        return redirect()->route('films.index');
    }


    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();

        $filmGenre = FilmGenre::where('film_id', '=', $id);
        $filmGenre->delete();
        
        return redirect()->route('films.index');
    }
}
