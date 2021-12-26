@extends('layouts.app')

@section('title','Редактирование резюме')

@section('content')
        <h3 class="h3" style="text-align: center">Редактирование резюме</h3>
        <form class="flex justify-content-center searcher" action="{{route('editCV-submit',$data->id)}}" method="get">
            @csrf
            <div class="form-group">
                <label for="currentPlaceOfLive">Место текущего проживания</label>
                <input class= "form-control" name="currentPlaceOfLive" type="text" placeholder="Текущее место проживания" value="{{$data->currentPlaceOfLive}}" required>
            </div>

            <div class="form-group">
                <label for="specialization">Специализация</label>
                <input class= "form-control" name="specialization" type="text" placeholder="Специализация" value="{{$data->specialization}}" required>
            </div>

            <div class="form-group">
                <label for="profEducation">Профессиональное образование</label>
                <input class= "form-control" name="profEducation" type="text" placeholder="Профессиональное образование" value="{{$data->profEducation}}" required>
            </div>

            <div class="form-group">
                <label for="previousPlaceWork">Прошлое место работы</label>
                <input class= "form-control" name="previousPlaceWork" type="text" placeholder="Прошлое место работы" value="{{$data->previousPlaceWork}}" required>
            </div>

            <div class="form-group">
                <label for="desireSalary">Желаемая зарплата, в рублях</label>
                <input class= "form-control" name="desireSalary" type="text" placeholder="Желаемая зарплата, в рублях" value="{{$data->desireSalary}}" required>
            </div>

            <div class="form-group">
                <label for="workExp">Опыт работы</label>
                <input class= "form-control" name="workExp" type="text" placeholder="Опыт работы" value="{{$data->workExp}}" required>
            </div>

            <div class="form-group">
                <label for="businessTrips">Возможность командировок</label>
                <select class="form-group" name="businessTrips" id="businessTrips" size="1">
                    <option value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="relocate">Возможность переезда</label>
                <select class="form-group" name="relocate" id="relocate" size="1">
                    <option value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Пол</label>
                <select class="form-group" name="gender" id="gender" size="1">
                    <option value="1">Мужской</option>
                    <option value="0">Женский</option>
                </select>
            </div>

            <button class="btn btn-primary"type="submit">Сохранить</button>
        </form>
@endsection
