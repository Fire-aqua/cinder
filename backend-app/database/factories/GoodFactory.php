<?php

namespace Database\Factories;

use App\Models\Good;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Goods::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'size' => $this->faker-> numberBetween(34, 50),
            'presence' => $this->faker->boolean(),
            'sells_since' => $this->faker->dateTimeBetween('-2 years', 'now')
        ];
    }
}
