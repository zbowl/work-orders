<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Status::factory()
        //    ->count(5)
        //    ->create();

        $statuses = [
            [
                'name' => 'New Request',
                'description' => 'Default work order status. A request for work has been entered, no one has been assigned work to be completed and no action has been taken on the job.',
                'order' => 1
            ],
            [
                'name' => 'Work in Progress',
                'description' => 'Any work order that has been assigned or scheduled to be completed will be in progress. The work order has been reviewed and assigned to a technician',
                'order' => 2
            ],
            [
                'name' => 'Complete',
                'description' => 'All work required by the technician has been performed. Purchases, labor, and materials may not be captured on the work order yet.',
                'order' => 3
            ],
            [
                'name' => 'Closed',
                'description' => 'Both physical work and administrative documentation is concluded. No further edits to the work order is allowed unless the status is changed from "Closed" back to "Complete"',
                'order' => 4
            ],
            [
                'name' => 'Pending',
                'description' => 'The job will be done, but not until resources are ready. Other work might be attended to first.',
                'order' => 5
            ],
            [
                'name' => 'Parts/Materials on Order',
                'description' => 'Work is waiting for the arrival of parts or materials before work can continue.',
                'order' => 6
            ],
            [
                'name' => 'On Hold',
                'description' => 'Work is paused, other than waiting for parts/materials, perhaps due to resources.',
                'order' => 7
            ],
            [
                'name' => 'Waiting for More Information',
                'description' => 'Waiting for more information from the requester/dispatcher or another person before proceeding with completing work.',
                'order' => 8
            ],
            [
                'name' => 'Awaiting Funding',
                'description' => 'This work order is waiting for funding to be available before work can begin.',
                'order' => 9
            ],
            [
                'name' => 'Deferred',
                'description' => 'Used to show that work has been recognized, but waiting to be performed at a later date.',
                'order' => 10
            ],
            [
                'name' => 'Forwarded',
                'description' => 'This is a work order that is forwarded to another department. This can happen when a work order is mistakenly entered to the wrong department.',
                'order' => 11
            ],
            [
                'name' => 'Declined',
                'description' => 'Work order will not be performed. The site administrator might decline a work order for not having resources or be outside of the typical work scope.',
                'order' => 12
            ],
            [
                'name' => 'Duplicate Request',
                'description' => 'A previously requested work order already exists.',
                'order' => 13
            ],
            [
                'name' => 'Voided',
                'description' => 'Used for a work order that has no purpose but is not deletable. Voided work orders will not be included in any reporting.',
                'order' => 14
            ],
        ];

        foreach($statuses as $status){
            $statusModel = new Status();
            $statusModel->create($status);
        }

    }
}
