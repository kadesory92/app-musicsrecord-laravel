<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Playlist;
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
        

/*         Artist::factory()
        ->has($albums->count(4))
        ->count(10)
        ->create(); */

        Artist::factory()
        ->has(Album::factory()->count(4))
        ->count(10)
        ->create();

        $alb=range(1, 40);

        User::factory(10)->create()->each(function($user) use($alb) {
            Playlist::factory(rand(1, 5))->create([
                'user_id' => $user->id
            ])->each(function ($playlists) use ($alb) {
                shuffle($alb);
                $playlists->albums()->attach(array_slice($alb, 0, rand(1, 4)));
            });
        });


        // \App\Models\User::factory(10)->create();
    }
}
