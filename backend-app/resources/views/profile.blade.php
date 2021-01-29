@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        Имя профиля: <b>{{Auth::user()->name}}</b>
                        <br>
                        Email: <b>{{Auth::user()->email}}</b>
                        <br><br>
                        Полное имя: 
                        <div class="input-group my-3">
                            <input placeholder="ФИО" type="text" name="user_fullname" id="user_fullname" value="{{Auth::user()->fname}}">
                        </div>
                        День рождения: 
                        <div class="input-group my-3">
                            <input type="date" name="user_birthday" id="user_birthday" value="{{Auth::user()->birthday}}">
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="m-3">
                            @if (Storage::disk('public')->exists('avatars/'.Auth::user()->id.'_avatar.jpg')))
                                <img src="{{Storage::url('avatars/'.Auth::user()->id.'_avatar.jpg')}}"
                                class="img-fluid rounded"
                                style="max-width:300px; max-heigth:300px">                            
                            @else                                
                                <img src="{{Storage::url('avatars/d_avatar.jpg')}}"
                                class="img-fluid rounded"
                                style="max-width:300px; max-heigth:300px">
                            @endif                                
                        </div>
                        <form method="post" action="{{ url('/user/import') }}" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input class="form-control" type="file" name="avatar" accept="image/*,image/jpg">
                            <button type="submit" class="btn btn-outline-primary btn-block m-3">Загрузить аватар</button>
                        </form>                                                
                    </div>
                </div>
                <div style="text-align: center">
                    <button id="save_user" class="btn btn-outline-primary btn-block m-3">Сохранить профиль</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection