<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryActivity extends Model
{
    protected $fillable = ['nama_tempat','alamat_lengkap','nomor_telephone','narahubung','jabatan','no_hp_narahubung',
        'email_narahubung','instagram','website','jam_operasioanl','hari_tidak_operasional',
        'batasan_usia','keunikan','pembayaran','reservasi','wifi','area_parkir','jenis_tempat',
        'harga_tiket','deskripsi_tempat','aktifitas_utama','fasilitas_pendukung','keterangan_tambahan','img'

    ];
}
