@extends('layouts.app')

@section('content')
    <body>
        <form method="post" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <input type="file" multiple name="file[]">
            <button type="submit">Загрузить</button>
        </form>
    </body>
@endsection