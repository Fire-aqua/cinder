@extends('layouts.app')

@section('content')
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
                <button type="submit" class="btn btn-outline-primary btn-block">Искать</button>
            </div>
        </div>
    </form>
    
</div>
<div class="table-responsive ">
    <table class="table table-striped table-bordered">
        <tr>
            <th>Название горы</th>
            <th>Высота (метры)</th>
            <th>Наличие льда</th>
        </tr>
        @foreach ($mountains as $mountain)
            <tr>
                <td>{{$mountain->name}}</td>
                <td>{{$mountain->height}}</td>
                <td>{{$mountain->is_icy}}</td>
            </tr>
        @endforeach
    </table>
  </div>
@endsection