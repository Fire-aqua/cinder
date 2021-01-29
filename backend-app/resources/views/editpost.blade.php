@extends('layouts.home_nav')
@section('content')
<input type="hidden" id="post_id" value="{{$post->id}}">
<div class="form-check-inline d-flex">
    <input placeholder="Заголовок" type="text" class="form-control my-3" name="title" id="post_title" value="{{$post->title}}">
</div>
<div class="form-check-inline d-flex">
    <textarea placeholder="Текст" class="form-control" type="text" name="body" id="post_body">{{$post->body}}
    </textarea>
</div>
<div class="d-flex my-3">
    <select name="select_tag" id="select_tag">
        <option selected></option>
        @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    <button id="select_tag_btn" class="btn btn-outline-secondary mx-3">Добавить тег</button>
</div>
<div class="my-3" id="selected_tag">
    @foreach ($post->tags as $tag)
        <span data-id="{{$tag->id}}" class="badge bg-info seltag ">{{$tag->name}}</span>
    @endforeach
</div>
<div>
    <i>Чтобы удалить тег, кликните по нему</i>
</div>
<div class="row my-3">
    <div class="col">
        <button id="save_post" class="btn btn-outline-primary btn-block">Сохранить</button>
    </div>
</div>
@endsection