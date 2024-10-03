<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Classroom::truncate();
        Schema::enableForeignKeyConstraints();

        // Classroom::insert([
        //     [
        //         'name' => 'Math',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Computer Science',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Biology',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Science',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'English',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'History',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Geography',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);

        $data = [
            [
                'name' => 'Geography',
            ],
            [
                'name' => 'Math',
            ],
            [
                'name' => 'English',
            ],
            [
                'name' => 'History',
            ],
            [
                'name' => 'Science',
            ],
            [
                'name' => 'Computer Science',
            ]
        ];

        foreach ($data as $value)
        {
            Classroom::insert([
                'name' => $value['name'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
