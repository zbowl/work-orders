<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\ImageDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageDetails::factory()
            ->count(1)
            ->create();
    }
}
