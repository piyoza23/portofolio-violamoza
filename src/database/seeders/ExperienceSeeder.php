<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::insert([

            [
                'company' => 'Freelancer',
                'position' => 'Fullstack Developer',
                'start_date' => '2024-01-01',
                'end_date' => null,
                'description' => 'Building web applications with Laravel and Filament.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'company' => 'Personal Project',
                'position' => 'Backend Developer',
                'start_date' => '2023-01-01',
                'end_date' => '2023-12-31',
                'description' => 'Developing APIs and dashboard systems.',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}