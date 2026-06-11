<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([

            [
                'title' => 'Portfolio Website',
                'description' => 'Personal portfolio website built with Laravel and Filament.',
                'image' => null,
                'github_url' => 'https://github.com/',
                'demo_url' => '#',
                'featured' => true,
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'title' => 'School Information System',
                'description' => 'Academic information system with Filament Admin Panel.',
                'image' => null,
                'github_url' => 'https://github.com/',
                'demo_url' => '#',
                'featured' => true,
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'title' => 'Inventory Management',
                'description' => 'Inventory system using Laravel and Livewire.',
                'image' => null,
                'github_url' => 'https://github.com/',
                'demo_url' => '#',
                'featured' => false,
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}