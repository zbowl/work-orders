<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\WorkOrder;
use App\Models\WorkOrderTask;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkOrderTask>
 */
class WorkOrderTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkOrderTask::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['completed_by' => "string", 'completed_at' => "\DateTime", 'form_data' => "string", 'work_order_id' => "mixed", 'task_id' => "mixed"])] public function definition(): array
    {
        return [
            'completed_by' => $this->faker->name(),
            'completed_at' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}',
            'work_order_id' => WorkOrder::factory(),
            'task_id' => Task::factory(),
        ];
    }
}
