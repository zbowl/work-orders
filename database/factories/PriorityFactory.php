<?php

namespace Database\Factories;

use App\Models\Priority;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Priority>
 */
class PriorityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Priority::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'order' => "int", 'description' => "string"])] public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'description' => $this->faker->sentence(9),
        ];
    }
}
