@extends('layout.main')

@section('title')
    Гости
@endsection

@section('content')
    <div class="title m-b-md">
        Посетители
    </div>
    <table class="table-guests">
        <thead>
        <tr>
            <td>ФИО</td>
            <td>Пасспорт</td>
            <td>Время входа</td>
            <td>Время выхода</td>
            <td></td>
        </tr>
        </thead>
        <tbody>

        @foreach($guests as $guest)
            <tr>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->passport }}</td>
                <td>{{ $guest->enter }}</td>
                <td>{{ $guest->quit }}</td>
                <td><a href="/guest/quit/{{ $guest->id }}">></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection