<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::insert([

            [
                'name' => 'Laravel Certification',
                'issuer' => 'Dicoding',
                'issued_at' => now(),
                'certificate_url' => '#',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'name' => 'Docker Fundamental',
                'issuer' => 'Udemy',
                'issued_at' => now(),
                'certificate_url' => '#',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}