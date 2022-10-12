<?php

namespace Tests\Feature\Models;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $category = Category::factory()->create();

        $this->assertModelExists($category);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $category = Category::factory()->create();

        $category->delete();

        $this->assertModelMissing($category);

    }

}
