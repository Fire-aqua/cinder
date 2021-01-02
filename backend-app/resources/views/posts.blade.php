@extends('layouts.app')
@section('content')

@auth
    <div class="text-right my-3">    
        <a class="btn btn-primary" href="/posts/new" role="button">Добавить новость</a>
    </div>
        @endauth

@foreach ($posts as $post)
    <div class="card my-2">
        <div class="card-body">
            <div class="card-title"><h3>{{$post->title}}</h3></div>
            <div class="card-text">{{$post->body}}</div>
            <div>
                @foreach ($post->tags as $tag)
                    <span class="badge badge-secondary">{{$tag->name}}</span>
                @endforeach
            </div>
        </div>
        @auth
            <div class="text-right m-3">
                <a class="btn btn-secondary" href="/posts/{{$post->id}}" role="button">Редактировать</a>
            </div>
        @endauth
    </div>
@endforeach

@endsection