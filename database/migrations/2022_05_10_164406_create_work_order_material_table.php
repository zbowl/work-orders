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
        Schema::create('material_work_order', function (Blueprint $table) {
            $table->foreignId('work_order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('material_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['work_order_id', 'material_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('material_work_order', function (Blueprint $table) {
            $table->dropForeign('material_work_order_material_id_foreign');
            $table->dropForeign('material_work_order_work_order_id_foreign');
            //$table->dropForeign(['work_order_id', 'material_id']);
        });
        Schema::dropIfExists('material_work_order');
    }
};
