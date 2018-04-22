<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryFoodDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_food_drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_resto');
            $table->string('narahubung');
            $table->string('jabatan');
            $table->string('no_hp_narahubung');
            $table->string('email_narahubung');
            $table->string('alamat_lengkap');
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->string('rekom_minuman')->nullable();
            $table->string('rekom_makanan')->nullable();
            $table->string('rekom_makanan_pendamping')->nullable();
            $table->string('rekom_kudapan')->nullable();
            $table->string('penghargaan')->nullable();
            $table->string('keunikan')->nullable();
            $table->string('range_harga')->nullable();
            $table->string('category')->nullable();
            $table->string('menu_paket')->nullable();
            $table->string('menu_brunch')->nullable();
            $table->string('menu_buffet')->nullable();
            $table->string('reservasi')->nullable();
            $table->string('gratis_minum_pembuka')->nullable();
            $table->string('ruang_privat')->nullable();
            $table->string('jasa_pengiriman')->nullable();
            $table->string('area_merokok')->nullable();
            $table->string('minuman_alkohol')->nullable();
            $table->string('area_parkir')->nullable();
            $table->string('wifi')->nullable();
            $table->string('hiburan_khusus')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('jenis_masakan')->nullable();
            $table->string('deskripsi_reso')->nullable();
            $table->longText('images')->nullable();

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
        Schema::dropIfExists('directory_food_drinks');
    }
}
