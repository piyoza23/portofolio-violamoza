<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([

            [
                'title'=>'Web Development',
                'description'=>'Building responsive and scalable web applications.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'title'=>'API Development',
                'description'=>'REST API with Laravel.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'title'=>'Dashboard Development',
                'description'=>'Admin Panel using Filament V3.',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}