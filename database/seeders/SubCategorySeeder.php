<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SubCategory::factory()
        //    ->count(5)
        //    ->create();

        $subCategories = [
            [
                'name' => 'Replace and Set',
                'description' => 'Replace the existing pole and set a new one.',
                'order' => 1,
                'category_id' => 1
            ],
            [
                'name' => 'Pole Transfer',
                'description' => 'Transfer of connected lines from one pole to another.',
                'order' => 2,
                'category_id' => 1
            ],
            [
                'name' => 'Pole Transfer',
                'description' => 'Transfer of connected lines from one pole to another.',
                'order' => 1,
                'category_id' => 2
            ],
            [
                'name' => 'Splice',
                'description' => 'Splicing of fibers.',
                'order' => 2,
                'category_id' => 2
            ],
            [
                'name' => 'Customer Drop',
                'description' => 'This is the fiber from MST to customer NID.',
                'order' => 3,
                'category_id' => 2
            ],
            [
                'name' => 'Distribution',
                'description' => 'Distribution fibers.',
                'order' => 4,
                'category_id' => 2
            ],
            [
                'name' => 'Feeders',
                'description' => 'Feeder fibers.',
                'order' => 5,
                'category_id' => 2
            ],
            [
                'name' => 'Pole Transfer',
                'description' => 'Transfer of connected lines from one pole to another.',
                'order' => 1,
                'category_id' => 3
            ],
            [
                'name' => 'Rental Lights',
                'description' => '',
                'order' => 2,
                'category_id' => 3
            ],
            [
                'name' => 'Single Phase',
                'description' => '',
                'order' => 3,
                'category_id' => 3
            ],
            [
                'name' => 'Three Phase',
                'description' => '',
                'order' => 4,
                'category_id' => 3
            ],
            [
                'name' => 'Transformer Grounding Grid',
                'description' => '',
                'order' => 5,
                'category_id' => 3
            ],
            [
                'name' => 'Critical Valve',
                'description' => '',
                'order' => 1,
                'category_id' => 4
            ],
            [
                'name' => 'Exposed Pipe',
                'description' => '',
                'order' => 2,
                'category_id' => 4
            ],
            [
                'name' => 'Main Distribution',
                'description' => '',
                'order' => 3,
                'category_id' => 4
            ],
            [
                'name' => 'Gas',
                'description' => 'Tear down of service, either Gas or Electric.',
                'order' => 1,
                'category_id' => 8
            ],
            [
                'name' => 'Electric',
                'description' => 'Tear down of service, either Gas or Electric.',
                'order' => 2,
                'category_id' => 8
            ],
            [
                'name' => 'Installation',
                'description' => 'Installation of asset.',
                'order' => 1,
                'category_id' => 9
            ],
            [
                'name' => 'Disconnect',
                'description' => 'Disconnection of asset.',
                'order' => 2,
                'category_id' => 9
            ],
            [
                'name' => 'Renewal',
                'description' => 'Re-installation of asset',
                'order' => 3,
                'category_id' => 9
            ],
        ];

        foreach($subCategories as $subCategory){
            $subCategoryModel = new SubCategory();
            $subCategoryModel->create($subCategory);
        }

    }
}
