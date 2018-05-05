<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryFoodDrink extends Model
{
    protected $fillable = [
        'id','nama_resto','narahubung','jabatan','no_hp_narahubung','email_narahubung','alamat_lengkap',
        'instagram','website','jam_operasional','rekom_minuman','rekom_makanan',
        'rekom_makanan_pendamping','rekom_kudapan','penghargaan','keunikan','range_harga',
        'category','menu_paket','menu_brunch','menu_buffet','reservasi','gratis_minum_pembuka',
        'ruang_privat','jasa_pengiriman','area_merokok','minuman_alkohol','area_parkir','wifi',
        'hiburan_khusus','pembayaran','jenis_masakan','deskripsi_reso','images'
    ];
}
