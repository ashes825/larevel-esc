<div class="jumbotron" style="padding: 30px">
{{--    <h1>{{$data-name }} — {{ }}</h1>--}}
    <div class="row">
        <div class="col-8" >

            <p>Имя: {{ $itemVacancy->name}}</p>
            <p>Фамилия: {{ $itemVacancy->secondName}}</p>
            <p>Отчество: {{ $itemVacancy->patronymic}}</p>
            <p>Текущее место жительства: {{ $itemVacancy->currentPlaceOfLive}}</p>
            <p>Профессиональное образование: {{ $itemVacancy->profEducation}}</p>
            <p>Опыт работы: {{ $itemVacancy->workExp}}</p>
            <p>Желаемая зарплата, в рублях: {{ $itemVacancy->specialization}}</p>
            <p>Прошлое место работы: {{ $itemVacancy->previousPlaceWork}}</p>
            <p>Желаемая зарплата: {{ $itemVacancy->desireSalary}}</p>

            @if($itemVacancy->businessTrips)
                <p>Готоность к командировкам: да</p>
            @else
                <p>Готоность к комадировкам: нет</p>
            @endif

            @if($itemVacancy->relocate)
                <p>Готовность к переезду: да</p>
            @else
                <p>Готовность к переезду: нет</p>
            @endif

            @if($itemVacancy->gender)
                <p>Пол: мужской</p>
            @else
                <p>Пол: женский</p>
            @endif

        </div>
    </div>
</div>
