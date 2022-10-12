<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Priority::factory()
        //    ->count(5)
        //    ->create();

        $priorities = [
            [
                'name' => 'Critical',
                'description' => 'Interruption making a critical functionality inaccessible or a complete network interruption causing a severe impact on services availability. There is no possible alternative.',
                'order' => 1
            ],
            [
                'name' => 'Important',
                'description' => 'Critical functionality or network access interrupted, degraded or unusable, having a severe impact on services availability. No acceptable alternative is possible.',
                'order' => 2
            ],
            [
                'name' => 'Normal',
                'description' => 'Non-critical function or procedure, unusable or hard to use having an operational impact, but with no direct impact on services availability. A workaround is available.',
                'order' => 3
            ],
            [
                'name' => 'Low',
                'description' => 'Application or personal procedure unusable, where a workaround is available or a repair is possible.',
                'order' => 4
            ],
        ];

        foreach($priorities as $priority){
            $priorityModel = new Priority();
            $priorityModel->create($priority);
        }


    }
}
