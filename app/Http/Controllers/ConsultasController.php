<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Areas;
use App\Models\Teachers;
use App\Models\Courses;
use App\Models\Apprentices;

class ConsultasController extends Controller
{
    //
public function areaTeachers() {
    $area = Areas::with('teachers')->find(1);
    return $area;
}

public function courseTeachers() {
    $course = Courses::with('teachers')->find(1);
    return $course;
}

public function teacherCourses() {
    $teacher = Teachers::with('courses')->find(1);
    return $teacher;
}

public function apprenticesInfo() {
    $apprentices = Apprentices::with(['courses', 'computers'])->get();
    return $apprentices;
}
}
