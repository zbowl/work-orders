<?php

namespace Tests\Feature\Models;

use App\Models\Image;
use App\Models\ImageDetails;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageTest extends TestCase
{
    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $image = Image::factory()->create();

        $this->assertModelExists($image);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $image = Image::factory()->create();

        $image->delete();

        $this->assertModelMissing($image);

    }

    /**
     * Verify that the model parent cascaded on delete
     *
     * @return void
     */
    public function test_model_related_deleted_by_cascade()
    {
        $imageFactory = Image::factory();

        $imageDetails = ImageDetails::factory()
            ->has($imageFactory)
            ->create();

        $imageDetails->image->delete();

        $this->assertModelMissing($imageDetails);

    }
}
