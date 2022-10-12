<?php

namespace Database\Seeders;

use App\Models\WorkOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkOrderMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materialIDs = [1, 2, 3, 4, 5];

        $workOrder = WorkOrder::find(1);

        //dd($workOrder);

        $workOrder->materials()->attach($materialIDs);
        $workOrder->save();
    }
}
