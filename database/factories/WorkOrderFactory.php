<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkOrder>
 */
class WorkOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['work_order_number' => "string", 'assigned_by' => "string", 'assigned_at' => "string",
        'scheduled_at' => "string", 'completed_by' => "string", 'completed_at' => "string",
        'company_id' => "int", 'work_order_type_id' => "int", 'status_id' => "int", 'category_id' => "int",
        'sub_category_id' => "int", 'priority_id' => "int"])] public function definition(): array
    {
        return [
            'work_order_number' => 'WO' . str_pad((string)$this->faker->numberBetween(1,9999999999),10),
            'assigned_by' => $this->faker->name(),
            'assigned_at' => $this->faker->dateTimeBetween('-1 week', '-2 day'),
            'scheduled_at' => $this->faker->dateTimeBetween('+2 day', '+1 week'),
            'completed_by' => $this->faker->name(),
            'completed_at' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'work_order_type_id' => WorkOrderType::factory(),
            'status_id' => Status::factory(),
            'category_id' => Category::factory(),
            'sub_category_id' => SubCategory::factory(),
            'priority_id' => Priority::factory(),

        ];
    }
}
