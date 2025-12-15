<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        $name = $this->faker->words(2, true);
        return [
            'sku' => strtoupper(Str::random(8)),
            'name' => ucfirst($name),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['Food', 'Drink', 'Electronics', 'Other']),
            'price' => $this->faker->randomFloat(2, 1000, 200000),
            'cost_price' => $this->faker->randomFloat(2, 500, 90000),
            'stock' => $this->faker->numberBetween(0, 100),
            'discount_percent' => $this->faker->randomElement([0, 0, 5, 10, 15, 20]),
        ];
    }
}
