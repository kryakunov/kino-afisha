@extends('films.layout')

@section('content')
<div class="container">
    <h1 align="center">Афиша</h1><br>
    <div class="row">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @forelse($films as $film)
        <div class="col-md-3">
            <h5>{{ $film->title }}</h5>

            <small>
                Жанр: 
                @foreach($film->genres as $genre)
                    {{ $genre->title }} 
                @endforeach
            </small>
            <div>
                <img src="{{($film->poster !== null) ? $film->poster : 'image.jpeg' }}" alt="" width="160" class="img-thumbnail">
            </div>
            <a href="{{route('films.show', $film->id)}}" class='btn btn-info btn-sm mybutton'>Подробнее</a> 
            <a href="{{route('films.edit', $film->id)}}" class='btn btn-warning btn-sm mybutton'>Редактировать</a> 
            <a href="{{route('setpublic', $film->id)}}" class='btn btn-success btn-sm mybutton'>Опубликовать</a> 
            <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Вы уверены?')" class='btn btn-danger btn-sm mybutton'>Удалить</button>
            </form>
        </div>
    @empty
        No Data.
    @endforelse


</div>
</div>
@endsection