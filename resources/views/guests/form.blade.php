@extends('layout.main')

@section('title')
    Добавить гостя
@endsection

@section('content')
    <div class="title m-b-md">
        Форма
    </div>
    <form method="post" action="/guest/new">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="passport">Пасспорт</label>
            <input type="text" id="passport" name="passport" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>
    </form>
@endsection