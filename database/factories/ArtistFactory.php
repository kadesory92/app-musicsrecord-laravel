<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=>$this->faker->name,
            'profileimage'=>$this->faker->image('public/storage/images',640,480, null, false),

            //
        ];
    }
}
