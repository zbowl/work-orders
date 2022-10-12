<?php

namespace Tests\Feature\Models;

use App\Models\WorkOrder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkOrderTest extends TestCase
{

    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $workOrder = WorkOrder::factory()->create();

        $this->assertModelExists($workOrder);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $workOrder = WorkOrder::factory()->create();

        $workOrder->delete();

        $this->assertModelMissing($workOrder);

    }

}
