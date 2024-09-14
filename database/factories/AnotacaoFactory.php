<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anotacao>
 */
class AnotacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "Titulo" => fake()->sentence(2),
            "Conteudo" => fake()->sentence(10),
            "dia" => fake()->time('Y-m-d H:i:s')
            ];
    }
}
