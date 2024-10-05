<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $eskulList = Extracurricular::with('students')->get();

        return view('extracurricular.extracurricular', compact('eskulList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255','unique:extracurriculars'],
        ]);

        // dd($request->all());
        Extracurricular::create($request->all());

        return redirect()->route('extracurricular')->with('success', 'Data Eskul berhasil ditambahkan');
    }
}
