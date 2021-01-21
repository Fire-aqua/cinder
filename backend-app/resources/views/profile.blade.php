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
                        <img src="storage/app/public/img/{{Auth::user()->img}}" class="img-fluid rounded" style="max-width:300px;max-heigth:300px" alt="изображение не загружено"><br>
                        <button id="download_user_avatar_opener" class="btn btn-outline-primary btn-block m-3">Загрузить аватар</button>
                        
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