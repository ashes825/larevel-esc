<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'secondName',
        'patronymic',
        'currentPlaceOfLive',
        'profEducation',
        'workExp',
        'businessTrips',
        'relocate',
        'gender',
        'specialization',
        'previousPlaceWork',
        'desireSalary',
    ];
}
