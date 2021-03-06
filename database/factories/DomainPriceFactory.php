<?php

namespace Database\Factories;

use App\Models\DomainPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

class DomainPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DomainPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tld' => $this->faker->tld,
            'price_mx' => $this->faker->randomFloat(2, 60, 50),
            'price_usd' => $this->faker->randomFloat(2, 0, 50),
            'cost' => $this->faker->randomFloat(2, 0, 30),
            'main' => $this->faker->boolean,
            'status' => $this->model::STATUS_ACTIVE,
        ];
    }
}
