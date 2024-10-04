<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index ()
    {
        // Eiger load
        $studentList = Student::with('classroom')->get();
        // dd($student);
        return view('student.student', compact('studentList'));
















        // Belajar Collection
        // Menghitung Rata -Rata
        // $nilai = collect([9,8,3,5,2,4,9,7,6,6,7,10,10,]);
        // php biasa
        // 1. hitung jumlah nilai
        // 2. hitung berapa banyak nilai
        // 3. hitung nilai rata-rata
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $rataNilai = $totalNilai / $countNilai;

        // collection
        // 1. hitung nilai rata-rata
        // $nilaiRatarata = collect($nilai)->avg();

        // dd($rataNilai);
        // dd($nilaiRatarata);

        // collection contains() = cek apakah sebuah array memiliki sesuatu
        // $collect = $nilai->contains(100);
        // bisa menggunakan function atau arrow function
        // $collect = $nilai->contains(fn($value) => $value < 6);
        // if ($collect = $nilai->contains($key = 0)) {
        //     echo "Nilai $key ada di dalam array";
        // }
        // else {
        //     echo "Nilai $key TIDAK ada di dalam array";
        // }
        // dd($collect);

        // collection diff() = membandingkan sebuah isi suatu array dengna array lainnya
        // $restaurantA = collect(["burger", "pizza", "mushrooms", "bakso", "nasi"]);
        // $restaurantB = collect(["spageti", "siomay", "mushrooms", "makaroni", "nasi"]);

        // $diffA = $restaurantA->diff($restaurantB);
        // $diffB = $restaurantB->diff($restaurantA);
        // dd($diffA);
        // dd($diffB);
        // dd($diffA->merge($diffB));

        // collection intersect() = menggabungkan dua array yang memiliki item yang sama

        // $intersect = $restaurantA->intersect($restaurantB);
        // dd($intersect);

        // collection except() = mengambil item yang ada di array yang pertama, tapi tidak ada di array yang kedua
        // $except = $restaurantA->except($restaurantB);
        // dd($except);

        // collection zip() = menggabungkan dua array menjadi array yang berisi array-array
        // $array1 = collect([1, 2, 3]);
        // $array2 = collect(['a', 'b', 'c']);

        // $zip = $array1->zip($array2);
        // dd($zip);
        // echo $zip;

        // collection map() = mengubah setiap item dalam array menjadi nilai yang baru
        // $array = collect([1, 2, 3, 4, 5]);

        // $map = $array->map(fn($value) => $value * 2);
        // dd($map);

        // collection filter() = mengambil item yang memenuhi kondisi tertentu
        // $filter = $nilai->filter(fn($value) => $value > 7)->all();
        // dd($filter);

        // $biodata = collect([
        //     [
        //         'name' => 'John Doe',
        //         'age' => 20,
        //         'address' => 'Jakarta'
        //     ],
        //     [
        //         'name' => 'Jane Doe',
        //         'age' => 22,
        //         'address' => 'Bandung'
        //     ],
        //     [
        //         'name' => 'Jerry Doe',
        //         'age' => 21,
        //         'address' => 'Surabaya'
        //     ]
        // ]);

        // collection pluck() 
        // mengambil nilai tertentu yang berada di indeks tertentu
        // $pluck = $biodata->pluck('name', 'address')->all();
        // dd($pluck);

        // collection sort() = mengurutkan array berdasarkan nilai yang diinginkan
        // $sort = $array->sort();
        // dd($sort);

        // collection sortDesc() = mengurutkan array berdasarkan nilai yang diinginkan secara descending
        // $sortDesc = $array->sortDesc();
        // dd($sortDesc);

        // collection shuffle() = mengacak urutan item dalam array
        // $shuffle = $array->shuffle();
        // dd($shuffle);

        // collection chunk() = membagi array menjadi beberapa array yang berukuran tertentu
        // $chunk = $array->chunk(2);
        // dd($chunk);

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
        // $student = new Student();
        // $student->name = 'John Doe';
        // $student->classroom_id = 1;
        // $student->nis = '1234567890';
        // $student->gender = 'L';
        // $student->save();
        // dd($student);

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
