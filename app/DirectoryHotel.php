<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryHotel extends Model
{
    protected $fillable= ['nama_hotel','narahubung','jabatan',
                          'no_hp_narahubung','email_narahubung','alamat_lengkap',
                          'nomor_reservasi','instagram','website','group_by','jumlah_kamar',
                          'tempat_menarik_terdekat','penghargaan','keunikan','jenis_penginapan',
                          'rekomendasi_untuk','range_harga_kamar','fasilitas_hotel','deskripsi_hotel',
                          'tipe_kamar','fasilitas_umum_kamar','img'];
}
