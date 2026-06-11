<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        SocialLink::insert([

            [
                'platform'=>'Github',
                'url'=>'https://github.com/username',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'platform'=>'LinkedIn',
                'url'=>'https://linkedin.com/in/username',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            [
                'platform'=>'Instagram',
                'url'=>'https://instagram.com/username',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}