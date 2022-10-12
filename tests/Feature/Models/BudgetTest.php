<?php

namespace Tests\Feature\Models;

use App\Models\Budget;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BudgetTest extends TestCase
{

    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $budget = Budget::factory()->create();

        $this->assertModelExists($budget);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $budget = Budget::factory()->create();

        $budget->delete();

        $this->assertModelMissing($budget);

    }

}
