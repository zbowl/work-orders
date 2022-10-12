<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::factory()
        //    ->count(10)
        //    ->create();

        $categories = [
            [
                'name' => 'Pole Work',
                'description' => 'Any work related to poles.',
                'order' => 1
            ],
            [
                'name' => 'Telecommunication Lines',
                'description' => 'Any work related to the fiber lines, either overhead or underground.',
                'order' => 2
            ],
            [
                'name' => 'Electrical Lines',
                'description' => 'Any work related to the electric lines, either overhead or underground.',
                'order' => 3
            ],
            [
                'name' => 'Gas Lines',
                'description' => 'Any work related to the gas lines, either overhead or underground.',
                'order' => 4
            ],
            [
                'name' => 'Walking Survey',
                'description' => '3 year walking survey.',
                'order' => 5
            ],
            [
                'name' => 'Mobile Leak Survey',
                'description' => 'Annual mobile leak survey.',
                'order' => 6
            ],
            [
                'name' => 'Public Buildings Survey',
                'description' => 'Annual public buildings survey.',
                'order' => 7
            ],
            [
                'name' => 'Demolitions',
                'description' => 'Tear down of service, either Gas or Electric.',
                'order' => 8
            ],
            [
                'name' => 'New Service',
                'description' => 'Preparations for a new service. Gas, Electric and/or Fiber.',
                'order' => 9
            ],
        ];

        foreach($categories as $category){
            $categoryModel = new Category();
            $categoryModel->create($category);
        }


    }
}
