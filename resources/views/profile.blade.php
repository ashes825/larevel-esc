@extends('layouts.app')

@section('title','Профиль')

@section('content')

    @isset($data)
        @foreach($data as $itemVacancy)
            @include('inc.itemVacancy')
            <a href="{{route('editCV', $itemVacancy->id)}}"><button class="btn btn-primary">Редактировать резюме </button></a>
        @endforeach
    @endisset
    @empty($data)
        <a href="{{route('createCV')}}"><button class="btn btn-primary">Создать резюме</button></a>
    @endempty
@endsection
