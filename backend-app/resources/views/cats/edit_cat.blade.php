@extends('layouts.home_nav')
@section('content')
<form action="{{ url('/cats/'.$cat->id) }}" method="POST">
  {!! csrf_field() !!}
  {!! method_field(empty($cat->id) ? 'POST' : 'PUT') !!}
  <div class="form-group m-3">
    <input placeholder="Имя" class="form-control" type="text" name="name" value="{{ $cat->name }}">
  </div>
  <div class="form-group m-3">
    <input placeholder="Лет" class="form-control" type="number" min="0" max="30" name="age" value="{{ $cat->age }}">
  </div>
  <div class="form-group m-3">
    <select class="form-select" name="breed_id">
      <option value="" selected>Выберите породу</option>
      @foreach ($breeds as $breed)
        <option value="{{ $breed->id }}">{{ $breed->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="m-3">
    <button type="submit" class="btn btn-secondary"><span class="mdi mdi-content-save"></span></button>
  </div>
</form>
@endsection
