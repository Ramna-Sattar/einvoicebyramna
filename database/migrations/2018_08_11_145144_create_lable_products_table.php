<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lable_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('product_serial_number');
            $table->string('product_item');
            $table->integer('product_quantity');
            $table->float('product_unit_price');
            $table->float('product_total');
            $table->integer('product_discount');
            $table->float('product_net_total');
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
        Schema::dropIfExists('lable_products');
    }
}
