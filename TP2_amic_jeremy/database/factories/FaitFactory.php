<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenu' => $this->faker->sentence, // Exemple d'attribut aléatoire
        ];
    }
}
