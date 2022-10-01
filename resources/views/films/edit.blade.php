@extends('films.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        @include('films.errors')
        <br>
        <form action="{{ route('films.update', $film->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Название: <input type="text" name="title" value="{{$film->title}}" class="form-control"><br>

                Постер: <input type="file" name="poster" value="{{$film->poster}}">
            <br><br>
            <button type="submit" class='btn btn-warning'>Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection