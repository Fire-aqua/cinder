@extends('layouts.app')
@section('content')

@auth
    <div class="text-right my-3">    
        <a class="btn btn-outline-primary" href="/posts/create" role="button">Добавить новость</a>
    </div>
@endauth

@foreach ($posts as $post)
    <div class="card my-2">
        <div class="card-body">
            <div class="card-title"><h3>{{$post->title}}</h3></div>
            <div class="card-text">{{$post->body}}</div>
            <div>
                @foreach ($post->tags as $tag)
                    <span class="badge bg-info">{{$tag->name}}</span>
                @endforeach
            </div>
        </div>
        @auth
            @if ($post->user_id==Auth::user()->id)
                <div class="text-right mx-3">
                    <a class="btn btn-secondary" href="/posts/{{$post->id}}/edit" role="button">Редактировать</a>
                </div>
                <div class="text-right m-3">
                    <form action="{{ url('posts/'.$post->id) }}" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <button type="submit" class="btn btn-secondary">Удалить</button>
                    </form>
                </div>
            @endif
        @endauth
    </div>
@endforeach

@endsection