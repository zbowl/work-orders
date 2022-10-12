<?php

namespace Database\Seeders;

use App\Models\WorkOrder;
use App\Models\WorkOrderType;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //WorkOrder::factory()
        //    ->count(10)
        //    ->create();
        $faker = Factory::create();

        $approvedAt = $faker->dateTimeBetween('-3 day', '-2 day');

        $workOrders = [
            [
                'work_order_number' => 'WORD0000000001',
                'assigned_at' => $approvedAt,
                'assigned_by' => 'Dispatch',
                'scheduled_at' => $faker->dateTimeBetween('+2 day', '+3 day'),
                'completed_by' => null,
                'completed_at' => null,
                'work_order_type_id' => 1, //General
                'status_id' => 1, //New Request
                'category_id' => 9, //New Service
                'sub_category_id' => 18, //Installation
                'priority_id' => 3 //Normal
            ],
            [
                'work_order_number' => 'WORD0000000002',
                'assigned_at' => $approvedAt,
                'assigned_by' => 'Dispatch',
                'scheduled_at' => $faker->dateTimeBetween('+2 day', '+3 day'),
                'completed_by' => null,
                'completed_at' => null,
                'work_order_type_id' => 4, //Corrective Maintenance
                'status_id' => 6, //Parts/Materials on Order
                'category_id' => 4, //Gas Lines
                'sub_category_id' => 14, //Exposed Pipe
                'priority_id' => 1 //Critical
            ],
            [
                'work_order_number' => 'WORD0000000003',
                'assigned_at' => $approvedAt,
                'assigned_by' => 'Dispatch',
                'scheduled_at' => $faker->dateTimeBetween('+2 day', '+3 day'),
                'completed_by' => null,
                'completed_at' => null,
                'work_order_type_id' => 2, //Preventative Maintenance
                'status_id' => 2, //Work in Progress
                'category_id' => 2, //Telecommunication Lines
                'sub_category_id' => 7, //Distribution
                'priority_id' => 4 //Low
            ]
        ];

        foreach($workOrders as $workOrder){
            $workOrderModel = new WorkOrder();
            $workOrderModel->create($workOrder);
        }

    }
}
