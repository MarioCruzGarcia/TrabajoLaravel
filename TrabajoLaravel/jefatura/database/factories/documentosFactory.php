<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class documentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'extension' => $this->faker->fileExtension,
            'ubicacion' => $this->faker->url,
            'entregas_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
