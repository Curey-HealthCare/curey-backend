<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Language;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Language::query()->truncate();
        Language::query()->create([
            'code' => 'en',
            'name' => 'English',
            'active' => true,
        ]);
        Language::query()->create([
            'code' => 'ar',
            'name' => 'العربية',
            'active' => true,
        ]);
        Language::query()->create([
            'code' => 'fr',
            'name' => 'Français',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'de',
            'name' => 'Deutsch',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'es',
            'name' => 'Español',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'it',
            'name' => 'Italiano',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'pt',
            'name' => 'Português',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'ru',
            'name' => 'Русский',
            'active' => false,
        ]);
        Language::query()->create([
            'code' => 'tr',
            'name' => 'Türkçe',
            'active' => false,
        ]);
    }
}
