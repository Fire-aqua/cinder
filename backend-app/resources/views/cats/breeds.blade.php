@extends('layouts.app')
@section('content')
    <div class="text-center m-3">
    <a href="/cats" class="btn btn-outline-primary">Котики</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr class="text-center align-middle">
            <th>Порода</th>
            @auth<th></th>@endauth
            </tr>
            @foreach ($breeds as $breed)
            <tr class="text-center align-middle">
                <td>{{$breed->name}}</td>
                @auth
                <td class="d-flex justify-content-around">
                    
                    <a href="/breeds/create" role="button" class="btn btn-secondary">
                        <span class="mdi mdi-cat md-36"></span>
                    </a>
                    
                    <a href="/breeds/{{$breed->id}}/edit" role="button" class="btn btn-secondary">
                        <span class="mdi mdi-clipboard-edit-outline"></span>
                    </a>
                    <form action="{{url('breeds/'.$breed->id)}}" method="POST" class="form">
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