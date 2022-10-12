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
        Schema::create('status_work_order_type', function (Blueprint $table) {
            $table->foreignId('work_order_type_id')->constrained('work_order_types')->cascadeOnDelete();
            $table->foreignId('status_id')->constrained('statuses')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['work_order_type_id', 'status_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('status_work_order_type', function (Blueprint $table) {
            $table->dropForeign('status_work_order_type_work_order_type_id_foreign');
            $table->dropForeign('status_work_order_type_status_id_foreign');
            //$table->dropForeign(['work_order_type_id', 'status_id']);
        });
        Schema::dropIfExists('status_work_order_type');
    }
};
