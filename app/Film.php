<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;
    
    protected $fillable = ['title', 'poster', 'status'];

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function setPublic($id)
    {
        $film = Film::find($id);
        $film->status = Film::IS_PUBLIC;
        $film->update();
    }

    public function setDraft($id)
    {
        $film = Film::find($id);
        $film->status = Film::IS_DRAFT;
        $film->update();
    }
}
