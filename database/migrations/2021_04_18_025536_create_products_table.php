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
            $table->unsignedBigInteger('id', True);
            $table->string('name', 255);
            $table->string('condition', 255);
            $table->string('category', 255);
            $table->integer('weight');
            $table->integer('likes')->default(0);
            $table->string('product_from', 255);
            $table->string('brand', 255);
            $table->double('price');
            $table->text('description');
            $table->integer('stock');
            $table->string('img_path', 255);
            $table->integer('discount')->nullable();
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
