<div class="jumbotron" style="padding: 30px">
{{--    <h1>{{$data-name }} — {{ }}</h1>--}}
    <div class="row">
        <div class="col-8" >

            <p>{{ $itemVacancy->name}}</p>
            <p>{{ $itemVacancy->secondName}}</p>
            <p>{{ $itemVacancy->patronymic}}</p>
            <p>{{ $itemVacancy->currentPlaceOfLive}}</p>
            <p>{{ $itemVacancy->profEducation}}</p>
            <p>{{ $itemVacancy->workExp}}</p>

            @if($itemVacancy->businessTrips)
            <p>Да</p>
                @else
                 <p>Нет</p>
            @endif

            @if($itemVacancy->relocate)
                <p>Да</p>
            @else
                <p>Нет</p>
            @endif

            @if($itemVacancy->gender)
                <p>Мужской</p>
            @else
                <p>Женский</p>
            @endif

        </div>
    </div>
</div>
