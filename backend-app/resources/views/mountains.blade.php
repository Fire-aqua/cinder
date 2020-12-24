@extends('layouts.app')

@section('content')
<div class="table-responsive ">
    <table class="table table-striped table-bordered">
        <tr>
            <th>Название горы</th>
            <th>Высота (метры)</th>
            <th>Наличие льда</th>
        </tr>
        @foreach ($mountainsArray as $mountain)
            <tr>
                <td>{{$mountain->name}}</td>
                <td>{{$mountain->height}}</td>
                <td>{{$mountain->is_icy}}</td>
            </tr>
        @endforeach
    </table>
  </div>
@endsection