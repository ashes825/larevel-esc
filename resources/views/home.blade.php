@extends('layouts.app')

    @section('title','Главная страница')

@section('content')
            <h3 class="h3" style="text-align: center">Центр поиска сотрудников</h3>
        <form class="flex justify-content-center searcher" action="{{route('search')}}" method="get">
            <input class= "form-control" type="text" placeholder="Поиск сотрудников..." required>
            <button class="btn btn-primary ml-4" type="submit">Найти</button>
        </form>
@endsection

