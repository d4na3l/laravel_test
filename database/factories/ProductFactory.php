<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 100), // precio entre 1 y 100
            'quantity' => $this->faker->numberBetween(0, 10),
            'inStock' => function (array $attributes) {
                return $attributes['quantity'] > 0;
            },
        ];
    }
}

