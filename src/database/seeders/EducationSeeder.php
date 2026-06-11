<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'school' => 'Universitas ABC',
            'major' => 'Informatics Engineering',
            'start_year' => 2021,
            'end_year' => 2025,
        ]);
    }
}