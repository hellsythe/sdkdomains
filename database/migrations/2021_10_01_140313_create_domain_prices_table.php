<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_prices', function (Blueprint $table) {
            $table->commonFields();
            $table->string('tld');
            $table->string('price_mx');
            $table->string('price_usd');
            $table->string('cost');
            $table->boolean('main');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domain_prices');
    }
}
