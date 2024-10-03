<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        // Student::insert([
        //     [
        //         'name' => 'John Doe',
        //         'classroom_id' => 1,
        //         'nis' => '010101',
        //         'gender' => 'L',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],
        //     [
        //         'name' => 'Jane Smith',
        //         'classroom_id' => 2,
        //         'nis' => '020202',
        //         'gender' =>'L',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ],

        // ]);
        Student::factory()
        ->count(25)
        ->create();
    }
}
