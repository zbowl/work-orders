<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageDetails>
 */
class ImageDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['file_name' => "string", 'file_size' => "int", 'file_type' => "string",
        'file_mime_type' => "string", 'sections_found' => "int", 'image_width' => "int",
        'image_length' => "int", 'image_width_length_html_style' => "string",
        'image_date' => "string", 'image_datetime' => "string", 'image_datetime_original' => "string",
        'image_datetime_digitized' => "string", 'image_unique_id' => "string", 'image_gps_latitude_reference' => "string",
        'image_gps_latitude' => "string", 'image_gps_latitude_json' => "string", 'image_gps_longitude_reference' => "string",
        'image_gps_longitude' => "string", 'image_gps_longitude_json' => "string", 'image_id' => "int"])] public function definition(): array
    {
        return [
            'file_name' => $this->faker->word() . $this->faker->fileExtension(),
            'file_size' => $this->faker->numberBetween(1048576999, 1073741824),
            'file_type' => $this->faker->fileExtension(),
            'file_mime_type' => $this->faker->mimeType(),
            'sections_found' => $this->faker->randomNumber(3),
            'image_width' => $this->faker->randomNumber(3,true),
            'image_length' => $this->faker->randomNumber(3,true),
            'image_width_length_html_style' => $this->faker->randomNumber(3,true),
            'image_date' => $this->faker->date(),
            'image_datetime' => $this->faker->datetime(),
            'image_datetime_original' => $this->faker->datetime(),
            'image_datetime_digitized' => $this->faker->datetime(),
            'image_unique_id' => $this->faker->uuid(),
            'image_gps_latitude_reference' => $this->faker->latitude(),
            'image_gps_latitude' => $this->faker->latitude(),
            'image_gps_latitude_json' => $this->faker->latitude(),
            'image_gps_longitude_reference' => $this->faker->longitude(),
            'image_gps_longitude' => $this->faker->longitude(),
            'image_gps_longitude_json' => $this->faker->longitude(),
            'image_id' => Image::factory(),
        ];
    }
}
