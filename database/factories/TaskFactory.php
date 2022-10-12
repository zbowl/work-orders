<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'order' => "int", 'description' => "string", 'form_data' => "string"])] public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'description' => $this->faker->sentence(9),
            'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
        ];
    }
}
