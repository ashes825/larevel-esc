@extends('layouts.app')

    @section('title','Главная страница')

@section('content')
              <h3 class="h3" style="text-align: center">Центр поиска сотрудников</h3>
              <form method="get" action="{{route('search')}}">
              <div class="form-row">
                  <div class="form-group col-md-10">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Введите специальность...">
                  </div>
                  <div class="form-group col-md-2">
                      <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Поиск</button>
                  </div>
              </div>
              </form>
@endsection

