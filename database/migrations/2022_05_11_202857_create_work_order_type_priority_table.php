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
        Schema::create('priority_work_order_type', function (Blueprint $table) {
            $table->foreignId('work_order_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('priority_id')->constrained()->cascadeOnDelete();
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
        Schema::table('priority_work_order_type', function (Blueprint $table) {
            $table->dropForeign('priority_work_order_type_work_order_type_id_foreign');
            $table->dropForeign('priority_work_order_type_priority_id_foreign');
            //$table->dropForeign(['work_order_id', 'task_id']);
        });
        Schema::dropIfExists('priority_work_order_type');
    }
};
