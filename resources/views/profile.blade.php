@extends('layouts.app')

@section('title','Профиль')

@section('content')

    <a href=""><button class="btn btn-primary">Редактировать профиль</button></a>
    <a href="{{route('createCV')}}"><button class="btn btn-primary">Создать резюме</button></a>
    @isset($data)
        @foreach($data as $itemVacancy)
            @include('inc.itemVacancy')
        @endforeach
    @endisset
@endsection
