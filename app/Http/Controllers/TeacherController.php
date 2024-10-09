<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index ()
    {
        $teachers = Teacher::all();
        // dd($teachers->all());

        return view('teacher.teacher', compact('teachers'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        // dd($request->all());

        Teacher::create($request->all());

        return redirect()->route('teacher')->with('success', 'Data berhasil disimpan');
    }


    public function edit($id)
    {
        $teachers = Teacher::all();

        // Cari guru berdasarkan id
        $teacher = Teacher::findOrFail($id);
        // dd($teacher);

        // Kirim data guru yang ditemukan ke view yang sama (teacher.teacher)
        return view('teacher.teacher', compact('teacher', 'teachers'));
    }
}
