<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class gruposFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word,
            'aulas_id' => $this->faker->numberBetween(1, 100), 
            'cursos_id' => $this->faker->numberBetween(1, 100), 
            'ciclos_id' => $this->faker->numberBetween(1, 100), 
        ];
    }
}
