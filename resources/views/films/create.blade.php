@extends('films.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
        <h3>Добавить фильм</h3>

        @include('films.errors')
        <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            Название: <input type="text" name="title"><br>
            <div class="form-control">
                Постер: <input type="file" name="poster">
            </div><br>
            <button type="submit" class='btn btn-success'>Отправить</button>
        </form>

        </div>
    </div>
</div>
@endsection