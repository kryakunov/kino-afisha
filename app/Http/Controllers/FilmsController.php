<?php

namespace App\Http\Controllers;

use App\Film;
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
        return view('films.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'poster' => 'nullable|image',
        ]);

        $poster = $request->file('poster');

        if ($poster !== null) {
            $poster = $poster->store('uploads');
        }

        Film::create([
            'title' => $request->input('title'),
            'status' => Film::IS_DRAFT,
            'poster' => $poster,
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

        return redirect()->route('films.index');
    }
}
