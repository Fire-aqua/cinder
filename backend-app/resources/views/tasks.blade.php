@extends('layouts.home_nav')
@section('content')
<div class="panel-body">
    @include('common.errors')
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" textarea placeholder="Новая задача">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-outline-primary my-3">
                    Добавить
                </button>
            </div>
        </div>
    </form>
</div>
@if (count($tasks) > 0)
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
                <th>Текущие задачи</th>
                <th> </th>
            </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>

                        <td >
                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button class="btn btn-outline-primary">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection