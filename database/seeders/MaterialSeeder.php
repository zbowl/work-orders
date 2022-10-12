<?php

namespace Database\Seeders;


use App\Models\Material;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Material::factory()
        //    ->count(25)
        //    ->create();
        $faker = Factory::create();
        $approvedAt = $faker->dateTimeBetween('-1 week', '-2 day');

        $materials = [
            [
                'inventory_asset_id' => 1,
                'budget_id' => 1,
                'quantity_requested' => 2,
                'quantity_used' => 2,
                'quantity_back_to_stock' => 0,
                'approved_at' => $approvedAt,
                'approved_by' => 'Management'
            ],
            [
                'inventory_asset_id' => 2,
                'budget_id' => 1,
                'quantity_requested' => 2,
                'quantity_used' => 2,
                'quantity_back_to_stock' => 0,
                'approved_at' => $approvedAt,
                'approved_by' => 'Management'
            ],
            [
                'inventory_asset_id' => 3,
                'budget_id' => 1,
                'quantity_requested' => 2,
                'quantity_used' => 2,
                'quantity_back_to_stock' => 0,
                'approved_at' => $approvedAt,
                'approved_by' => 'Management'
            ],
            [
                'inventory_asset_id' => 4,
                'budget_id' => 1,
                'quantity_requested' => 4,
                'quantity_used' => 4,
                'quantity_back_to_stock' => 0,
                'approved_at' => $approvedAt,
                'approved_by' => 'Management'
            ],
            [
                'inventory_asset_id' => 5,
                'budget_id' => 1,
                'quantity_requested' => 65,
                'quantity_used' => 65,
                'quantity_back_to_stock' => 0,
                'approved_at' => $approvedAt,
                'approved_by' => 'Management'
            ],
        ];

        foreach($materials as $material){
            $materialModel = new Material();
            $materialModel->create($material);
        }

    }
}
