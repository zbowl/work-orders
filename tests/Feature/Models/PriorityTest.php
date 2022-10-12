<?php

namespace Tests\Feature\Models;

use App\Models\Priority;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PriorityTest extends TestCase
{
    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $priority = Priority::factory()->create();

        $this->assertModelExists($priority);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $priority = Priority::factory()->create();

        $priority->delete();

        $this->assertModelMissing($priority);

    }

}
