<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table -> integer('category_id');
            $table -> integer('brand_id');
            $table -> string('name');
            $table -> string('code');
            $table -> float('price',10,2);
            $table -> integer('stock_amount');
            $table -> text('short_description');
            $table -> text('long_description');
            $table -> text('image');
            $table -> tinyInteger('status');
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
