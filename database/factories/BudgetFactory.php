<?php

namespace Database\Factories;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Budget::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['budget_number' => "string", 'description' => "string", 'strategic_plan_number' => "string"])] public function definition(): array
    {
        return [
            'budget_number' => $this->faker->regexify('[A-Z]{3}[0-4]{3}[A-Z]{3}'),
            'description' => $this->faker->sentence(9),
            'strategic_plan_number' => $this->faker->year(),
        ];
    }
}
