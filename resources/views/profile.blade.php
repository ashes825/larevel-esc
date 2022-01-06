@extends('layouts.app')

@section('title','Профиль')

@section('content')

    <p class="h4">{{Auth::user()->name}} {{Auth::user()->secondName}} {{Auth::user()->patronymic}}</p>
    <p class="h5">{{Auth::user()->email}}</p>
    @isset($data)
        @if(Auth::user()->role_id!=1)
            @foreach($data as $itemVacancy)
                @include('inc.itemVacancy')
                <a href="{{route('editCV', $itemVacancy->id)}}">
                    <button class="btn btn-primary">Редактировать резюме</button>
                </a>
            @endforeach
            @empty($data[0])
                <a href="{{route('createCV')}}">
                    <button class="btn btn-primary">Создать резюме</button>
                </a>
            @endempty
        @endif
    @endisset
@endsection
