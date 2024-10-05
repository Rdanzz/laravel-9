<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        // Lazy load
        // $class = Classroom::all();
        $class = Classroom::with('students')->get();
        // dd($student);
        return view('classroom.classroom', ['classList' => $class]);
    }

    public function show($id)
    {
        // Ambil data siswa berdasarkan ID
        $class = Classroom::with(['students'])->findOrFail($id);
        return view('classroom.detail', compact('class'));
    }
}
