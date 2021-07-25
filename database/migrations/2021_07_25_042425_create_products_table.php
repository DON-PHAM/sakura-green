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
            $table->bigIncrements('id');
            $table->string('productname');
            $table->string('slug');
            $table->string('symbol');
            $table->string('image');
            $table->string('description');
            $table->decimal('price');
            $table->string('seotitle');
            $table->integer('discount');
            $table->integer('categoryproductid');
            $table->boolean('status');
            $table->boolean('showhome');
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
