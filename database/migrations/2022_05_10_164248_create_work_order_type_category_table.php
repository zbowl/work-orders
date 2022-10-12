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
        Schema::create('category_work_order_type', function (Blueprint $table) {
            $table->foreignId('work_order_type_id')->constrained('work_order_types')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['work_order_type_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_work_order_type', function (Blueprint $table) {
            $table->dropForeign('category_work_order_type_work_order_type_id_foreign');
            $table->dropForeign('category_work_order_type_category_id_foreign');
            //$table->dropForeign(['work_order_type_id', 'category_id']);
        });
        Schema::dropIfExists('category_work_order_type');
    }
};
