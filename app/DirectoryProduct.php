<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryProduct extends Model
{
    protected $fillable = ['nama_produk','no_hp','email','instagram','website','jam_operasioanl',
        'memiliki_showroom','alamat_showroom','jenis','range_harga','deskripsi_produk','foto_produk'
    ];
}
