<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Extracurricular::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => 'Coding Club',
            ],
            [
                'name' => 'Reading Club',
            ],
            [
                'name' => 'Gaming Club',
            ],
            [
                'name' => 'Cooking Club',
            ],
            [
                'name' => 'Painting Club',
            ],
            [
                'name' => 'Dancing Club',
            ]
        ];

        foreach ($data as $value) {
            Extracurricular::insert([
                'name' => $value['name'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
