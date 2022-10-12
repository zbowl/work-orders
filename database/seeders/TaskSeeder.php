<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Task::factory()
        //    ->count(5)
        //    ->create();

        $tasks = [
            [
                'name' => 'Origin of Leak',
                'description' => '',
                'order' => 1,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Leak Investigation Grade',
                'description' => '',
                'order' => 2,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Leak Investigation Report',
                'description' => '',
                'order' => 3,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Gas Service Pressure Tested',
                'description' => '',
                'order' => 4,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Locate and Inspect Isolation Valves',
                'description' => '',
                'order' => 5,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Gas Service and Construction Info',
                'description' => '',
                'order' => 6,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'ONT Installation',
                'description' => '',
                'order' => 7,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Router Installation',
                'description' => '',
                'order' => 8,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Secondary Connections',
                'description' => '',
                'order' => 9,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Wiring Inspection',
                'description' => '',
                'order' => 10,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Meter Installation',
                'description' => '',
                'order' => 11,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
            [
                'name' => 'Energize Service',
                'description' => '',
                'order' => 12,
                'form_data' => '{"form-inputs":[{"label":"Description","name":"description","value":null,"meta":{"type":"input","content":"text","disabled":true}},{"label":"Temperature","name":"temp","value":null,"meta":{"type":"input","content":"number","min":1,"max":5,"step":0.5}},{"label":"Is Enabled","name":"is_enabled","value":true,"meta":{"type":"input","content":"checkbox"}},{"label":"Story","name":"story","value":null,"meta":{"type":"textarea","placeholder":"We would love to hear your story","rows":5,"resize":true}},{"label":"Notes","name":"obs","value":null,"meta":{"type":"wysiwyg"}},{"label":"Start Date","name":"start_date","value":null,"meta":{"type":"datepicker","placeholder":"Woot"}},{"label":"Pick Up","name":"pick_up","value":null,"meta":{"type":"datepicker","time":true,"format":"m/d/Y h:m"}},{"label":"Reminder","name":"reminder","value":"13:59","meta":{"type":"timepicker","format":"H:i","placeholder":"Select the time"}},{"label":"Country","name":"country_id","value":"a","meta":{"type":"select","multiple":false,"options":[{"slug":"a","customLabel":"First"},{"slug":"b","customLabel":"Second"}],"trackBy":"slug","label":"customLabel"}},{"label":"Country","name":"country_id","value":null,"meta":{"type":"select","multiple":false,"source":"core.addresses.countryOptions"}},{"label":"Types","name":"type_id","value":[],"meta":{"type":"select","multiple":true,"options":[]}}]}'
            ],
        ];

        foreach($tasks as $task){
            $taskModel = new Task();
            $taskModel->create($task);
        }

    }
}
