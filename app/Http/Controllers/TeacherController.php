<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index ()
    {
        $teachers = Teacher::all();

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
}
