@extends ('layouts.app')

@section('title','Результат поиска')

@section('content')


    <h3>Результат поиска</h3>
    @isset($data)
        @foreach($data as $itemSearch)
            @include('inc.itemSearch')
        @endforeach
    @endisset
    @empty($data)
        Ничего не найдено
    @endempty


@endsection
