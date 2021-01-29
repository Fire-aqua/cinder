@extends('layouts.home_nav')
@section('content')
@auth
    <div>
        <form action="{{url('mountains')}}" method="POST" class="form">
            {!! csrf_field() !!}
            <div class="d-flex form-check-inline">
                <input placeholder="Название" class="form-control m-2" type="string" name="name">
                <input placeholder="Высота" class="form-control m-2" type="number" name="height">
                <input name="is_icy" class="m-2" type="radio" value="1"> <label class="form-check-label ml-2">Лед есть</label>
                <input name="is_icy" class="m-2" type="radio" value="0"> <label class="form-check-label ml-2">Льда нет</label>
            </div>
            <div class="row my-3">
                <div class="col">
                    <button type="submit" class="btn btn-outline-primary btn-block">Добавить гору</button>
                    <a class="btn btn-outline-primary mx-3" href="{{ URL::to('mountains/pdf') }}">Скачать как PDF</a>
                </div>
            </div>
        </form>
    </div>
@endauth
<div>
    <form action="{{url('mountains')}}" method="GET" class="form">
        <div class="row mb-3">
            <div class="col">
                <input placeholder="Минимальная высота" class="form-control" type="number" name="min_height" value="{{$minHeight!=0 ? $minHeight : ''}}">
            </div>
            <div class="col">
                <input placeholder="Максимальная высота" class="form-control" type="number" name="max_height" value="{{$maxHeight!=0 ? $maxHeight : ''}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-check form-check-inline">
                    <input name="is_icy" type="radio" value="true" {{$isIcy=="true" ? 'checked': ''}}>
                    <label class="form-check-label ml-2">Лед</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input name="is_icy" type="radio" value="false" {{$isIcy=="false" ? 'checked' : ''}}>
                    <label class="form-check-label ml-2">Без льда</label>
                </div>
            </div>
            <div class="col">
                <div class="form-check form-check-inline" {{$isIcy!="true"&&$isIcy!="false" ? 'checked' : ''}}>
                    <input name="is_icy" type="radio">
                    <label class="form-check-label ml-2">Неважно</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-outline-primary  btn-block ">Отфильтровать</button>
            </div>            
        </div>
    </form>
</div>
<div class="table-responsive ">
    <table class="table table-striped table-bordered">
        <tr class="text-center">
            <th>Название горы</th>
            <th>Высота (метры)</th>
            <th>Наличие льда</th>
            @auth<th></th>@endauth
        </tr>
        @foreach ($mountains as $mountain)
            <tr>
                <td>{{$mountain->name}}</td>
                <td>{{$mountain->height}}</td>
                <td>{{$mountain->is_icy}}</td>
                @auth
                    <td class="text-center">
                        <form action="{{url('mountains/'.$mountain->id)}}" method="POST" class="form">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button type="submit" class="btn btn-secondary">Удалить</button>
                        </form>
                    </td>
                @endauth
            </tr>
        @endforeach
    </table>
  </div>
@endsection