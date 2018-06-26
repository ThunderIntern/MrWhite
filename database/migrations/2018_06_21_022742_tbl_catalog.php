<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCatalog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('catalog', function (Blueprint $table) {
            $table->string('id_catalog');
            $table->string('barcode');
            $table->double('harga');
            $table->text('deskripsi');
            $table->text('url_gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
