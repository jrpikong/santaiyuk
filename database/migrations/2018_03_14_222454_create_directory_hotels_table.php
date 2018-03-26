<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_hotel');
            $table->string('narahubung');
            $table->string('jabatan');
            $table->string('no_hp_narahubung');
            $table->string('email_narahubung');
            $table->string('alamat_lengkap');
            $table->string('nomor_reservasi');
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('group_by')->nullable();
            $table->integer('jumlah_kamar');
            $table->text('tempat_menarik_terdekat')->nullable();
            $table->string('penghargaan')->nullable();
            $table->text('keunikan')->nullable();
            $table->string('jenis_penginapan');
            $table->string('rekomendasi_untuk');
            $table->string('range_harga_kamar');
            $table->string('fasilitas_hotel');
            $table->text('deskripsi_hotel');
            $table->text('tipe_kamar');
            $table->text('fasilitas_umum_kamar');
            $table->longText('img');
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
        Schema::dropIfExists('directory_hotels');
    }
}
