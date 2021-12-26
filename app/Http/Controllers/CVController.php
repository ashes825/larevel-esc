<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;

class CVController extends Controller
{
    public function store(Request $request)
    {
        CV::create([
            'user_id'=>auth()->user()->id,
            'name' => auth()->user()->name,
            'secondName' => auth()->user()->secondName,
            'patronymic' => auth()->user()->patronymic,
            'currentPlaceOfLive' => $request->currentPlaceOfLive,
            'profEducation' => $request->profEducation,
            'workExp' => $request->workExp,
            'businessTrips' => $request->businessTrips,
            'relocate' => $request->relocate,
            'gender' => $request->gender,
            'specialization' => $request->specialization,
            'previousPlaceWork' => $request->previousPlaceWork,
            'desireSalary' => $request->desireSalary,
        ]);
        return redirect()->route('profile');
    }
    public function create(){
        return view('createCV');
    }
    public function show(){

        return view('profile', ['data'=>CV::where('user_id', auth()->user()->id)->get()]);
    }
    public function edit($id){
        return view('editCV', ['data'=>(CV::findOrFail($id))]);
    }
}
