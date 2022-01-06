<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class SController extends Controller
{

    public function search(Request $request)
    {
        return view('search',['data'=> CV::where('specialization', 'LIKE', "%{$request->input('search')}%")->orderBy('id', 'desc')->get()]);

//        $s=$request->s;
//
//        $servername = "127.0.0.1";
//        $username = "root";
//        $password = "";
//        $BDname = "laravel";
//
//        $mysqli = new \mysqli($servername, $username, $password, $BDname);
//        if ($mysqli->connect_error) {
//            printf("Соединение не удалось: %s\n", $mysqli->connect_error);
//            exit();
//        }
//        $sql = "SELECT * FROM `c_v_s` WHERE `specialization` = '$s' ";
//        $result = $mysqli -> query($sql);
//        function doesItExist(array $arr): array
//        {
//            return array(
//                'name' => $arr['name'] != false ? $arr['name'] : 'Нет данных',
//                'secondName' => $arr['secondName'] != false ? $arr['secondName'] : 'Нет данных',
//                'patronymic' => $arr['patronymic'] != false ? $arr['patronymic'] : 'Нет данных',
//                'gender' => $arr['gender'] != false ? $arr['gender'] : 'Нет данных',
//                'currentPlaceOfLive' => $arr['currentPlaceOfLive'] != false ? $arr['currentPlaceOfLive'] : 'Нет данных',
//                'profEducation' => $arr['profEducation'] != false ? $arr['profEducation'] : 'Нет данных',
//                'specialization' => $arr['specialization'] != false ? $arr['specialization'] : 'Нет данных',
//                'workExp' => $arr['workExp'] != false ? $arr['workExp'] : 'Нет данных',
//                'previousPlaceWork' => $arr['previousPlaceWork'] != false ? $arr['previousPlaceWork'] : 'Нет данных',
//                'businessTrips' => $arr['businessTrips'] != false ? $arr['businessTrips'] : 'Нет данных',
//                'relocate' => $arr['relocate'] != false ? $arr['relocate'] : 'Нет данных',
//                'desireSalary' => $arr['desireSalary'] != false ? $arr['desireSalary'] : 'Нет данных',
//            );
//        }
//        function countPeople($result) {
//            if ($result -> num_rows > 0) {
//                while ($row = $result -> fetch_assoc()) {
//                    $arr = doesItExist($row);
//                    echo "Имя: ". $row['name'] ."<br>
//                        Фамилия: ". $row['secondName'] ."<br>
//                        Отчество: ". $row['patronymic'] ."<br>
//                        Текущее место жительства: ". $row['currentPlaceOfLive'] ."<br>
//                        Профессиональное образование: ". $row['profEducation'] ."<br>
//                        Опыт работы: ". $row['workExp'] ."<br>
//                        Специальность: ". $row['specialization'] ."<br>
//                        Прошлое место работы: ". $row['previousPlaceWork'] ."<br>
//                        Желаемая зарплата, в рублях: ". $row['desireSalary'] ."<br>";
//                    if($row['gender'])
//                        echo "Готоность к командировкам: да<br>";
//                    else
//                        echo "Готоность к командировкам: нет<br>";
//                    if($row['relocate'])
//                        echo "Готовность к переезду: да<br>";
//                    else
//                        echo "Готовность к переезду: нет<br>";
//                    if($row['gender'])
//                        echo "Пол: мужской<br><br>";
//                    else
//                        echo "Пол: женский<br><br>";
//
//                }
//            } else { echo "Никто не найден";}
//        }
//        countPeople($result);

    }
    public function show($id){

        return view('fullCV', ['itemVacancy'=>CV::findOrFail($id)]);

    }

}

