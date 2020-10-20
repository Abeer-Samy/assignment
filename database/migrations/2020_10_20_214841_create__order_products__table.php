<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
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
            $table->unsignedBigInteger('orderID');
            $table->integer('productCode');
            $table->integer('Qty');
            $table->decimal('priceEach',19,0);
            $table->timestamps();
            $table->foreign('productCode')->references('code')->on('product');
            $table->foreign('orderID')->references('id')->on('order');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_order_products_');
    }
}
