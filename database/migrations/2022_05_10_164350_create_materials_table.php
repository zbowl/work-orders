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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_requested');
            $table->integer('quantity_used');
            $table->integer('quantity_back_to_stock');
            $table->dateTime('approved_at')->nullable();
            $table->string('approved_by')->nullable();
            $table->foreignId('inventory_asset_id')->constrained('inventory_assets');
            $table->foreignId('budget_id')->constrained('budgets');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropForeign('materials_budget_id_foreign');
            $table->dropForeign('materials_inventory_asset_id_foreign');
            //$table->dropForeign(['inventory_id', 'budget_id']);
        });

        Schema::dropIfExists('materials');
    }
};
