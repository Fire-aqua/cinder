<?php

namespace Database\Factories;

use App\Models\Mountain;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class MountainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mountain::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'height' => $this->faker->numberBetween(500, 8850),
            'is_icy' => $this->faker->boolean()
        ];
    }
}
