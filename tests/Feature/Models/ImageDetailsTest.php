<?php

namespace Tests\Feature\Models;

use App\Models\Image;
use App\Models\ImageDetails;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageDetailsTest extends TestCase
{
    /**
     * Verify that a model can be created and exists.
     *
     * @return void
     */
    public function test_model_exists_after_creation()
    {
        $imageDetails = ImageDetails::factory()->create();

        $this->assertModelExists($imageDetails);

    }

    /**
     * Verify that a model can be deleted and no longer exists.
     *
     * @return void
     */
    public function test_model_no_longer_exists_after_deletion()
    {
        $imageDetails = ImageDetails::factory()->create();

        $imageDetails->delete();

        $this->assertModelMissing($imageDetails);

    }

    /**
     * Verify that the model parent cascaded on delete
     *
     * @return void
     */
    public function test_model_parent_deleted_by_cascade()
    {
        $imageDetails = ImageDetails::factory()->create();
        $image = $imageDetails->image->first();

        $imageDetails->delete();

        $image = Image::find($image->id);
        $image->delete();

        $this->assertModelMissing($image);

    }

}
