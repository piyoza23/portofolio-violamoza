<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Viola',
            'title' => 'Fullstack Developer',
            'about' => 'Passionate Fullstack Developer specializing in Laravel, Filament, Livewire and Docker.',
            'email' => 'viola@gmail.com',
            'phone' => '08123456789',
            'location' => 'Indonesia',
            'photo' => null,
            'resume' => null,
        ]);
    }
}