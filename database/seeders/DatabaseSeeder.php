<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Material;
use App\Models\Priority;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\Task;
use App\Models\WorkOrder;
use App\Models\WorkOrderTask;
use App\Models\WorkOrderType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            BudgetSeeder::class,
            PrioritySeeder::class,
            StatusSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            TaskSeeder::class,
            InventoryAssetSeeder::class,
            MaterialSeeder::class,
            WorkOrderTypeSeeder::class,
            WorkOrderSeeder::class,
            WorkOrderMaterialSeeder::class,
            WorkOrderTaskSeeder::class,

            //CommentSeeder::class,
            //ImageDetailsSeeder::class,
            //ImageSeeder::class,
        ]);


    }
}
