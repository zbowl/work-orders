<?php

namespace Database\Factories;

use App\Models\InventoryAsset;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class InventoryAssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventoryAsset::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['item_number' => "string", 'item_description' => "string", 'bin_number' => "string",
        'unit_price' => "string", 'quantity_on_hand' => "string", 'safety_stock' => "string",
        'quantity_on_order' => "string", 'quantity_allocated' => "string",
        'item_class_code' => "string", 'location_code' => "string"])] public function definition(): array
    {
        return [
            'item_number' => $this->faker->regexify('[A-Z]{3}[0-4]{3}'),
            'item_description' => $this->faker->sentence(9),
            'bin_number' => $this->faker->regexify('[A-Z]{2}[0-4]{2}'),
            'unit_price' => $this->faker->randomFloat(2,0,99999),
            'quantity_on_hand' => $this->faker->randomNumber(),
            'safety_stock' => $this->faker->randomNumber(),
            'quantity_on_order' => $this->faker->randomNumber(),
            'quantity_allocated' => $this->faker->randomNumber(),
            'item_class_code' => $this->faker->regexify('[A-Z]{2}[0-4]{2}'),
            'location_code' => $this->faker->regexify('[A-Z]{1}[0-4]{3}')
        ];
    }
}
