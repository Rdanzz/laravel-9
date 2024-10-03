<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $class = Classroom::all();
        // dd($student);
        return view('classroom.classroom', ['classList' => $class]);
    }
}
