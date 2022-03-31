<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('pro_id');
            // $table->foreign('pro_id')->references('id')->on('products');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->string('Sari');
            $table->string('Salwar_Kameez');
            $table->string('Churidaar');
            $table->string('Lehenga_Choli');
            $table->string('shirts');
            $table->string('frock');
            $table->string('t-shirts');
            $table->string('jackets');
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
        Schema::dropIfExists('subcategories');
    }
}
