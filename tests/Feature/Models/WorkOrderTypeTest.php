<?php

namespace Tests\Feature\Models;

use App\Models\WorkOrderType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkOrderTypeTest extends TestCase
{

    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $workOrderType = WorkOrderType::factory()->create();

        $this->assertModelExists($workOrderType);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $workOrderType = WorkOrderType::factory()->create();

        $workOrderType->delete();

        $this->assertModelMissing($workOrderType);

    }

}
