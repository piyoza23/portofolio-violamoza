<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::insert([

            [
                'name'=>'John Doe',
                'position'=>'CEO Company',
                'message'=>'Very professional developer and easy to work with.',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'name'=>'Jane Doe',
                'position'=>'Project Manager',
                'message'=>'Delivered the project on time with excellent quality.',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}