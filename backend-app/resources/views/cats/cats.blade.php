@extends('layouts.app')
@section('content')

@auth
    <div class="text-center row m-3">
        <div class="col">
            <a href="/breeds" class="btn btn-outline-primary">Породы</a>
        </div>
        <div class="col">
            <form action="{{url('cats/export')}}" method="GET" class="form">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-secondary">
                    Скачать базу котиков
                </button>
            </form>
        </div>                
    </div>
    @endauth


<div class="table-responsive">
    <table class="table table-bordered">
        <tr class="text-center">
            <th>Имя</th>
            <th>Возраст</th>
            <th>Порода</th>
            @auth<th></th>@endauth
        </tr>
        @foreach ($cats as $cat)
        <tr class="text-center align-middle">
            <td>{{$cat->name}}</td>
            <td>{{$cat->age}}</td>
            <td>{{$cat->breed->name ?? 'ND'}}</td>
            @auth
            <td class="text-center d-flex justify-content-around">
                <a href="/cats/create" role="button" class="btn btn-secondary">
                    <span class="mdi mdi-cat md-36"></span>
                </a>
                
                <a href="/cats/{{$cat->id}}/edit" role="button" class="btn btn-secondary">
                    <span class="mdi mdi-clipboard-edit-outline"></span>
                </a>
                
                <form action="{{url('cats/'.$cat->id)}}" method="POST" class="form">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button type="submit" class="btn btn-secondary">
                        <span class="mdi mdi-delete"></span>
                    </button>
                </form>
            </td>
            @endauth
        </tr>
        @endforeach
    </table>
</div>


@endsection