<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pivots\WorkOrderTypeCategory;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\Task;
use App\Models\WorkOrderType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkOrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //WorkOrderType::factory()
        //    ->count(10)
        //    ->create();

        $workOrderTypes = [
                [
                    'name' => 'General',
                    'description' => 'Basic generic work order type.'
                ],
                [
                    'name' => 'Preventative Maintenance',
                    'description' => 'Scheduled routine maintenance to prevent equipment failure and unplanned outages.'
                ],
                [
                    'name' => 'Inspection',
                    'description' => 'Inspecting assets, components, or systems for functionality or performance.'
                ],
                [
                    'name' => 'Corrective Maintenance',
                    'description' => 'A corrective maintenance work order is created when a maintenance technician discovers issues while conducting preventive maintenance, inspection, general, or emergency work order tasks. Corrective maintenance is performed to identify, isolate, and solve the issue so that the equipment, machine, or system can be restored to its correct condition.'
                ],
                [
                    'name' => 'Emergency',
                    'description' => 'When an unplanned asset breakdown occurs and needs to be repaired right away. An emergency work order records and tracks reactive maintenance that is performed.'
                ],
        ];

        foreach($workOrderTypes as $workOrderType){
            $workOrderTypeModel = new WorkOrderType();
            $workOrderTypeModel->create($workOrderType);
        }

    }
}
