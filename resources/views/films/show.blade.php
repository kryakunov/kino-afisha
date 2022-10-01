@extends('films.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h3>{{ $film->title }}</h3>
        <div>
            <img src="/{{($film->poster !== null) ? $film->poster : 'image.jpeg' }}" alt="" width="200" class="img-thumbnail">
        </div>

        Жанр: 
            @foreach($film->genres as $genre)
                {{ $genre->title }}
            @endforeach

        </div>
    </div>
</div>
@endsection
