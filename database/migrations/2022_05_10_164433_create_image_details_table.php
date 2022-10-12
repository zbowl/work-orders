<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_details', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_mime_type')->nullable();
            $table->string('sections_found')->nullable();
            $table->string('image_width')->nullable();
            $table->string('image_length')->nullable();
            $table->string('image_width_length_html_style')->nullable();
            $table->date('image_date')->nullable();
            $table->dateTime('image_datetime')->nullable();
            $table->string('image_datetime_original')->nullable();
            $table->string('image_datetime_digitized')->nullable();
            $table->string('image_unique_id')->nullable();
            $table->string('image_gps_latitude_reference')->nullable();
            $table->string('image_gps_latitude')->nullable();
            $table->string('image_gps_latitude_json')->nullable();
            $table->string('image_gps_longitude_reference')->nullable();
            $table->string('image_gps_longitude')->nullable();
            $table->string('image_gps_longitude_json')->nullable();
            $table->foreignId('image_id')->constrained('images')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_details', function (Blueprint $table) {
            $table->dropForeign(['image_id']);
        });

        Schema::dropIfExists('image_details');
    }
};
