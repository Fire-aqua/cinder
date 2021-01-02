@extends('layouts.app')
@section('content')

<form action="{{url('posts')}}" method="POST" class="form">
    {!! csrf_field()!!}
    <input type="hidden" name="id" value="{{$post->id}}">
    <div class="form-check-inline d-flex">
        <input placeholder="Заголовок" type="text" class="form-control my-3" name="title" value="{{$post->title}}">
    </div>
    <div class="form-check-inline d-flex">
        <textarea placeholder="Текст" class="form-control" type="text" name="body">{{$post->body}}
        </textarea>
    </div>
    <div class="row my-3">
        <div class="col">
            <button type="submit" class="btn btn-outline-primary btn-block">Сохранить</button>
        </div>
    </div>
</form>

@endsection