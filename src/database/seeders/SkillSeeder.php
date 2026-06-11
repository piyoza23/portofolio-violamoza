<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name'=>'Laravel','icon'=>'fab-laravel'],
            ['name'=>'Filament V3','icon'=>'heroicon-o-bolt'],
            ['name'=>'Livewire','icon'=>'heroicon-o-bolt'],
            ['name'=>'Blade','icon'=>'heroicon-o-code-bracket'],
            ['name'=>'Docker','icon'=>'heroicon-o-cube'],
            ['name'=>'MariaDB','icon'=>'heroicon-o-circle-stack'],
            ['name'=>'Tailwind CSS','icon'=>'heroicon-o-paint-brush'],
            ['name'=>'PHP','icon'=>'heroicon-o-code-bracket'],
            ['name'=>'Git','icon'=>'heroicon-o-code-bracket'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}