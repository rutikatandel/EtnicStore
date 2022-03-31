<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            // $table->bigIncrements('id');
            $table->unsignedBigInteger('subcat_id');
            $table->foreign('subcat_id')->references('id')->on('subcategories');
            // $table->bigIncrements('id');
            $table->unsignedBigInteger('pro_id');
            $table->foreign('pro_id')->references('id')->on('products');
            $table->string('product_img');
            $table->string('product_name');
            $table->string('size');
            $table->biginteger('price');
            $table->string('rating');
            $table->string('description');
            $table->string('colors');
            $table->string('occasion');
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
        Schema::dropIfExists('productdetails');
    }
}
