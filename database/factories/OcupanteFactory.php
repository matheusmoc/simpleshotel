<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ocupante>
 */
class OcupanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(5),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->address(),
            'telefone' => fake()->phoneNumber(),
            'cidade' => fake()->city(),
            'estado' => fake()->country(),
            'cep' => fake()->randomNumber(8),
           
        ];
    }
}
