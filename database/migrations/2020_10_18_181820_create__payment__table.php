<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payments', function (Blueprint $table) {
            $table->string('CheckNum', 255);
            $table->unsignedBigInteger('CustomerID');
            $table->dateTime('PaymentDate');
            $table->decimal('Amount',19,0);
            $table->timestamps();
            $table->foreign('CustomerID')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_payment_');
    }
}
