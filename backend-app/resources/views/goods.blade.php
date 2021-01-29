@extends('layouts.app')
@section('content')

@auth
    <div class="text-right my-3">    
      
      <form method="post" action="{{ url('/goods/import') }}" enctype="multipart/form-data">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input class="form-control " type="file" multiple name="file[]">
        <button type="submit" class="btn btn-secondary my-3">Импортировать</button>
      </form>
      <button type="button" class="btn btn-outline-primary" id="add-good">Добавить вручную</button>
    </div>
@endauth

<div id="good-renew">
  @foreach ($goods as $good)
    <div class="card my-2 good-renew-inner">
        <div class="card-body">
            <div class="card-title">
                <button type="button" class="btn btn-primary watch-goods" data-good-id="{{$good->id}}">
                  {{$good->name}}
                </button>
            </div>
        </div>
    </div>
  @endforeach
</div>

<div class="modal fade" id="the-good" tabindex="-1" aria-labelledby="goodsHeader" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="good_name"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Размер: <span id="good_size"></span><br>
        В наличии: <span id="good_presence"></span><br>
        В продаже с <span id="good_sells"></span>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
          Закрыть
      </button>
      @auth
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-good" data-bs-dismiss="modal" aria-label="Close">
          Редактировать
        </button>
        <button type="submit" class="btn btn-secondary" id="good_delete" data-bs-dismiss="modal" aria-label="Close">
                Удалить
        </button>
      @endauth
       </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit-good" tabindex="-1" aria-labelledby="goodsHeader" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="egood_id">
        <div class="my-3">Название: <input type="text" class="form-control" name="egood-name" id="egood_name"></div>
        <div class="my-3">Размер: <input type="text" class="form-control" name="egood-size" id="egood_size"></div>
        <div class="my-3">В наличии: <input type="checkbox" class="form-check-input" name="egood-presence" id="egood_presence"></div>
        <div class="my-3"> В продаже с <input type="date" class="form-control" name="egood-sells" id="egood_sells"></div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
          Закрыть
      </button>
      <button type="button" class="btn btn-primary" id="save-good" data-bs-target="#save-good" data-bs-dismiss="modal" aria-label="Close">
        Сохранить
      </button>
      </div>
    </div>
  </div>
</div>

@endsection