@extends('layouts.app')
@section('content')

  <form action="{{ url('/breeds/'.$breed->id) }}" method="POST">
    {!! csrf_field() !!}
    {!! method_field(empty($breed->id) ? 'POST' : 'PUT') !!}

    <div class="form-group m-3">
      <input placeholder="Порода" type="text" name="name" value="{{ $breed->name }}">
    </div>
    
    <div class="m-3">
      <button type="submit" class="btn btn-secondary"><span class="mdi mdi-content-save"></span></button>
    </div>
  </form>

@endsection
