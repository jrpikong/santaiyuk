<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('jam_operasioanl')->nullable();
            $table->string('memiliki_showroom')->nullable();
            $table->string('alamat_showroom')->nullable();
            $table->string('jenis')->nullable();
            $table->string('range_harga')->nullable();
            $table->longText('deskripsi_produk')->nullable();
            $table->longText('foto_produk')->nullable();
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
        Schema::dropIfExists('directory_products');
    }
}
