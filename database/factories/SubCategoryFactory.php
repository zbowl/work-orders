<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'order' => "int", 'description' => "string", 'category_id' => "mixed"])] public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'description' => $this->faker->sentence(9),
            'category_id' => Category::factory(),
        ];
    }
}
