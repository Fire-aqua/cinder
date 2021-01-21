@extends('layouts.app')
@section('content')

@auth
    <div class="text-right my-3">    
      <button type="button" class="btn btn-primary" id="add-good">Добавить товар</button>
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
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-good" data-bs-dismiss="modal" aria-label="Close">
        Редактировать
      </button>
      <button type="submit" class="btn btn-secondary" id="good_delete" data-bs-dismiss="modal" aria-label="Close">
              Удалить
          </button>
       </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit-good" tabindex="-1" aria-labelledby="goodsHeader" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="good_name"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="egood_id">
        Название: <input type="text" class="form-control my-3" name="egood-name" id="egood_name"><br>
        Размер: <input type="text" class="form-control my-3" name="egood-size" id="egood_size"><br>
        В наличии: <input type="checkbox" class="form-check-input my-3" name="egood-presence" id="egood_presence"><br>
        В продаже с <input type="date" class="form-control my-3" name="egood-sells" id="egood_sells"><br>
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