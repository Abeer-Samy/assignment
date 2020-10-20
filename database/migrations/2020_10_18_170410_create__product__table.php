<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->integer('code');
            $table->unsignedBigInteger('ProductlineID');
            $table->string('name',255);
            $table->integer('Scale');
            $table->string('vendor',255);
            $table->string('PdDescription',255);
            $table->integer('QtylnStock');
            $table->decimal('BuyPrice',19,0);
            $table->string('MSRP' , 255);
            $table->timestamps();

            $table->foreign('ProductlineID')->references('id')->on('productline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product_');
    }
}
