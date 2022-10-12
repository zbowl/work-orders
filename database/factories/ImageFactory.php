<?php

namespace Database\Factories;

use App\Models\WorkOrder;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['file_name' => "string", 'file_path' => "string", 'work_order_id' => "mixed"])] public function definition(): array
    {
        return [
            'file_name' => $this->faker->word() . $this->faker->fileExtension(),
            'file_path' => $this->faker->word() . $this->faker->fileExtension(),
            'work_order_id' => WorkOrder::factory(),
        ];
    }
}
