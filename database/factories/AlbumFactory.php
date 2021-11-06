<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cover_image'=>$this->faker->image('public/storage/images',630,470, null, false),
            'name'=>$this->faker->name,
            'desc_albums'=>$this->faker->text(255),
            //
        ];
    }
}
