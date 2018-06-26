<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('catalog_id')->foreign('catalog_id')->references('id_catalog')->on('catalog');
            $table->string('category_id')->foreign('category_id')->references('id_category')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_category');
    }
}
