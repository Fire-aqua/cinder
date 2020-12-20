@extends('layouts.app')

@section('content')
@foreach ($posts as $post)
    <div class="card">
        <div class="card-body">
            <div class="card-title"><h3>{{$post->title}}</h3></div>
            <div class="card-text">{{$post->body}}</div>
            <div>@foreach ($post->tags as $tag)
                <span class="badge badge-secondary">{{$tag->name}}</span>
            @endforeach</div>
        </div>
    </div>
@endforeach

@endsection