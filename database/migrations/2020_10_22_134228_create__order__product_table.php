<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductCode')->nullable();
            $table->unsignedBigInteger('OrderID')->nullable();
            $table->integer('Qty');
            $table->integer('PriceEach');
            $table->timestamps();

            $table->Foreign('OrderID')->references('id')->on('orders');
            $table->Foreign('ProductCode')->references('Code')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_order__product');
    }
}
