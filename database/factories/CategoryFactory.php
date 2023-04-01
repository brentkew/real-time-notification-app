<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $catedgory = $this->faker->word();
        return [
            'name' => $catedgory,
            'slug' => Str::slug($catedgory)
        ];
    }
}
