<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address' => $this->faker->address,
            'creditCard' => $this->faker->numberBetween($min = 1000000000, $max = 9999999999),
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'status' => $this->faker->randomElement(['Complete', 'Sent', 'Delivered']),
        ];
    }
}
