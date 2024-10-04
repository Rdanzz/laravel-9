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
}
