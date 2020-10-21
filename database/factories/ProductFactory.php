<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(100),
            'description' => $this->faker->text(300),
            'unit_price' => $this->faker->numberBetween(1, 100),
            'stock' => $this->faker->numberBetween(1, 100)
        ];
    }
}
