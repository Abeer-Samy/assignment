<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Offices', function (Blueprint $table) {
            $table->integer('code');
            $table->string('phone',255);
            $table->string('city',255);
            $table->string('Address1',255);
            $table->string('Address2',255);
            $table->string('State',255);
            $table->string('Country',255);
            $table->integer('PostalCode');
            $table->string('Territory',255);
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
        Schema::dropIfExists('_office_');
    }
}
