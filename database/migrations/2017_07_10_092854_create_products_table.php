<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name');
            $table->int('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->int('rate_id')->unsigned();
            $table->foreign('rate_id')->references('rate_id')->on('rates')->onDelete('cascade');
            $table->float('rate_count');
            $table->float('unit_price');
            $table->int('total_quanity');
            $table->int('rate_id')->unsigned();
            $table->foreign('shop_product_id')->references('shop_product_id')->on('shop_products')->onDelete('cascade');
            $table->int('top_product');
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
        Schema::dropIfExists('products');
    }
}
