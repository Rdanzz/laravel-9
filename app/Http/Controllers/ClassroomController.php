<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        // Lazy load
        // $class = Classroom::all();
        $classList = Classroom::with('students')->get();
        $teacher = Teacher::all();
        // dd($student);
        return view('classroom.classroom', compact('classList', 'teacher'));
    }

    public function show($id)
    {
        // Ambil data siswa berdasarkan ID
        $class = Classroom::with(['students'])->findOrFail($id);
        return view('classroom.detail', compact('class'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'teacher_id' => ['required','integer'],
        ]);

        // dd($request->all());


        $class = Classroom::create($request->all());

        return redirect()->route(route: 'class')->with('success', 'Data Kelas berhasil ditambahkan.');
    }
}
