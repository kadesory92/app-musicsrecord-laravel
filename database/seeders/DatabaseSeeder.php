<?php

namespace Database\Seeders;

use App\Models\{Artist, Album};
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

        Artist::factory()
        ->has(Album::factory()->count(4))
        ->count(10)
        ->create();

        // \App\Models\User::factory(10)->create();
    }
}
