<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentices;

class ConsultasController extends Controller
{
    //
    public function index() {
        $apprentices = Apprentices::with([
            'computer',
            'course.area',
            'course.trainingCenter',
            'course.teachers'
        ])->first();

        return response()->json($apprentices);
    }

    public function show($id)
    {
        $apprentice = Apprentices::with([
            'computer',
            'course.area',
            'course.trainingCenter',
            'course.teachers'
        ])->find($id);

        return response()->json($apprentice); 
        }
    }
