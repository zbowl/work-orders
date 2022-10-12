<?php

namespace Database\Factories;

use App\Models\Budget;
use App\Models\InventoryAsset;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['quantity_requested' => "int", 'quantity_used' => "int",
        'quantity_back_to_stock' => "int", 'approved_at' => "\DateTime",
        'approved_by' => "string", 'inventory_asset_id' => "mixed", 'budget_id' => "mixed"])] public function definition(): array
    {
        return [
            'quantity_requested' => $this->faker->randomNumber(2),
            'quantity_used' => $this->faker->randomNumber(2),
            'quantity_back_to_stock' => $this->faker->randomNumber(1,true),
            'approved_at' => $this->faker->dateTime(),
            'approved_by' => $this->faker->name(),
            'inventory_asset_id' => InventoryAsset::factory(),
            'budget_id' => Budget::factory(),
        ];
    }
}
