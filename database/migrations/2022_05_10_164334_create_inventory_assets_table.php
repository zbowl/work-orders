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
        Schema::create('inventory_assets', function (Blueprint $table) {
            $table->id();
            $table->string('item_number');
            $table->string('item_description');
            $table->string('bin_number');
            $table->integer('unit_price');
            $table->integer('quantity_on_hand');
            $table->integer('safety_stock');
            $table->integer('quantity_on_order');
            $table->integer('quantity_allocated');
            $table->string('item_class_code');
            $table->string('location_code');
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
        Schema::dropIfExists('inventory_assets');
    }
};
