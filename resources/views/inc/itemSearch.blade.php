<div class="jumbotron" style="padding: 30px">
    {{--    <h1>{{$data-name }} — {{ }}</h1>--}}
    <div class="row">
        <div class="col-8" >

            <a href="{{route('fullCV', $itemSearch->id)}}" class="h3"> {{ $itemSearch->specialization}}</a>
            <p>Опыт работы: {{ $itemSearch->workExp}}</p>
            <p class="h4">Желаемая зарплата: {{ $itemSearch->desireSalary}} руб.</p>
            <p>Прошлое место работы: {{ $itemSearch->previousPlaceWork}}</p>

        </div>
    </div>
</div>
