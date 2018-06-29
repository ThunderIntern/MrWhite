<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->text('link');
<<<<<<< HEAD:database/migrations/2018_06_21_023343_tbl_link_catalog.php
            $table->string('id_catalog');
=======
            $table->string('catalog_id');
>>>>>>> 431a8d834cc90b4805d94d04c1c83105612f712b:database/migrations/2018_06_28_105024_create_links_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
