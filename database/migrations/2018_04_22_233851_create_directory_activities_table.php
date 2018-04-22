<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tempat')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->string('nomor_telephone')->nullable();
            $table->string('narahubung')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('no_hp_narahubung')->nullable();
            $table->string('email_narahubung')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('jam_operasioanl')->nullable();
            $table->string('hari_tidak_operasional')->nullable();
            $table->string('batasan_usia')->nullable();
            $table->string('keunikan')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('reservasi')->nullable();
            $table->string('wifi')->nullable();
            $table->string('area_parkir')->nullable();
            $table->string('jenis_tempat')->nullable();
            $table->string('harga_tiket')->nullable();
            $table->longText('deskripsi_tempat')->nullable();
            $table->longText('aktifitas_utama')->nullable();
            $table->longText('fasilitas_pendukung')->nullable();
            $table->longText('keterangan_tambahan')->nullable();
            $table->longText('img')->nullable();
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
        Schema::dropIfExists('directory_activities');
    }
}
