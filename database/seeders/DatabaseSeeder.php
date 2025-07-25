<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Autor;
use App\Models\Buch;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Autor::factory(100)->create()->each(function ($autor)
        {
            $numBuch = random_int(5, 30);

            Buch::factory()->count($numBuch)->for($autor)->create();
        });



    }



}
