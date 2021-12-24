@extends('layouts.app')

    @section('title','Главная страница')

@section('content')
              <h3 class="h3" style="text-align: center">Центр поиска сотрудников</h3>
            <form class="form flex col-7 mb-6" method="get">
                @csrf
                <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Найти сотрудника...">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
@endsection

