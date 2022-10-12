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
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->string('work_order_number')->nullable();
            $table->string('assigned_by')->nullable();
            $table->dateTime('assigned_at')->nullable();
            $table->dateTime('scheduled_at')->nullable();
            $table->string('completed_by')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->foreignId('work_order_type_id')->constrained('work_order_types');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('priority_id')->constrained('priorities');
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
        Schema::table('work_orders', function (Blueprint $table) {
            $table->dropForeign('work_orders_work_order_type_id_foreign');
            $table->dropForeign('work_orders_category_id_foreign');
            $table->dropForeign('work_orders_sub_category_id_foreign');
            $table->dropForeign('work_orders_status_id_foreign');
            $table->dropForeign('work_orders_priority_id_foreign');
            //$table->dropForeign(['work_order_type_id', 'category_id', 'sub_category_id', 'status_id', 'priority_id']);
        });

        Schema::dropIfExists('work_orders');
    }
};
