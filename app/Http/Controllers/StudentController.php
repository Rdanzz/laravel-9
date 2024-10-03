<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index ()
    {
        $student = Student::all();
        // dd($student);
        return view('student.student', ['studentList' => $student]);

        // Get Data / Menampilkan semua data
        // Query Builder
        // $student = DB::table('students')->get();
        // dd($student);

        // Eloquent ORM
        // $student = Student::all();
        // dd($student);

        // Insert Data
        // Query Builder
        // $student = DB::table('students')->insert([
        //     'name' => 'John Doe',
        //     'classroom_id' => 1,
        //     'nis' => '1234567890',
        //     'gender' => 'L',
        // ]);
        // dd($student);

        // Eloquent ORM
        $student = new Student();
        $student->name = 'John Doe';
        $student->classroom_id = 1;
        $student->nis = '1234567890';
        $student->gender = 'L';
        $student->save();
        dd($student);

        // Mengambil Data Pertama
        // Query Builder
        // $student = DB::table('students')->first();
        // dd($student);

        // Eloquent ORM
        // $student =

        // Mencari Data
        // Query Builder
        // $student = DB::table('students')->where('id', 1)->first();
        // dd($student);

        // Eloquent ORM
        // $student = Student::find(1);
        // dd($student);

        // Update Data
        // Query Builder
        // $student = DB::table('students')->where('id', 1)->update(['name' => 'John Doe']);
        // dd($student);

        // Eloquent ORM
        // $student = Student::find(1);
        // $student->name = 'John Doe';
        // $student->save();
        // dd($student);

        // Delete Data
        // Query Builder
        // $student = DB::table('students')->where('id', 1)->delete();
        // dd($student);

        // Eloquent ORM
        // $student = Student::find(1);
        // $student->delete();
        // dd($student);
    }
}
