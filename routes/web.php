<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/area-teachers', [ConsultasController::class, 'areaTeachers']);
Route::get('/course-teachers', [ConsultasController::class, 'courseTeachers']);
Route::get('/teacher-courses', [ConsultasController::class, 'teacherCourses']);
Route::get('/apprentices', [ConsultasController::class, 'apprenticesInfo']);