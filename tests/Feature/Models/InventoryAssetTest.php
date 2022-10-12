<?php

namespace Tests\Feature\Models;

use App\Models\InventoryAsset;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InventoryAssetTest extends TestCase
{
    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $inventoryAsset = InventoryAsset::factory()->create();

        $this->assertModelExists($inventoryAsset);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $inventoryAsset = InventoryAsset::factory()->create();

        $inventoryAsset->delete();

        $this->assertModelMissing($inventoryAsset);

    }

}
