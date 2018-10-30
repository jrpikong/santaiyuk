<?php

namespace App\Http\Controllers;

use App\DirectoryActivity;
use App\DirectoryFoodDrink;
use App\DirectoryHotel;
use App\DirectoryProduct;
use App\Http\Library\ApiHelper;
use App\Http\Requests\HotelRequest;
use App\Mail\Directory;
use App\Subscibe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Mail;

class FormController extends Controller
{
    public function directoryForm ()
    {
        return view('pages.directory');
    }

    public function postHotel (HotelRequest $request)
    {
        /** insert multiple images*/
        $filePath = $this->insertMultpleImage('directory-hotels', $request->file('img'));

        /**insert to Database*/
        $insertHotel = DirectoryHotel::create([
            'nama_hotel' => $request->input('nama_hotel'),
            'narahubung' => $request->input('narahubung'),
            'jabatan' => $request->input('jabatan'),
            'no_hp_narahubung' => $request->input('no_hp_narahubung'),
            'email_narahubung' => $request->input('email_narahubung'),
            'alamat_lengkap' => $request->input('alamat_lengkap'),
            'nomor_reservasi' => $request->input('nomor_reservasi'),
            'instagram' => $request->input('instagram'),
            'website' => $request->input('website'),
            'group_by' => $request->input('group_by'),
            'jumlah_kamar' => $request->input('jumlah_kamar'),
            'tempat_menarik_terdekat' => $request->input('tempat_menarik_terdekat'),
            'penghargaan' => $request->input('penghargaan'),
            'keunikan' => $request->input('keunikan'),
            'jenis_penginapan' => $request->input('jenis_penginapan'),
            'rekomendasi_untuk' => json_encode($request->input('rekomendasi_untuk')),
            'range_harga_kamar' => $request->input('range_harga_kamar'),
            'fasilitas_hotel' => json_encode($request->input('fasilitas_hotel')),
            'deskripsi_hotel' => $request->input('deskripsi_hotel'),
            'tipe_kamar' => $request->input('tipe_kamar'),
            'fasilitas_umum_kamar' => $request->input('fasilitas_umum_kamar'),
            'img' => $filePath,
        ]);

        $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
        return view('pages.directory');
    }

    public function postFoodDrink (Request $request)
    {
        /** insert multiple images*/
        $filePath = $this->insertMultpleImage('directory-food-drink', $request->file('img'));

        /**insert to Database*/
        $insertFoodDrink = DirectoryFoodDrink::create([
            'nama_resto' => $request->input('nama_resto'),
            'narahubung' => $request->input('narahubung'),
            'jabatan' => $request->input('jabatan'),
            'no_hp_narahubung' => $request->input('no_hp_narahubung'),
            'email_narahubung' => $request->input('email_narahubung'),
            'alamat_lengkap' => $request->input('alamat_lengkap'),
            'nomor_reservasi' => $request->input('nomor_reservasi'),
            'instagram' => $request->input('instagram'),
            'website' => $request->input('website'),
            'jam_operasional' => $request->input('jam_operasional'),
            'rekom_minuman' => $request->input('minuman'),
            'rekom_makanan' => $request->input('makanan'),
            'rekom_makanan_pendamping' => $request->input('makanan_pendamping'),
            'rekom_kudapan' => $request->input('kudapan_munulainnya'),
            'penghargaan' => $request->input('penghargaan'),
            'keunikan' => $request->input('keunikan'),
            'range_harga' => $request->input('range_harga'),
            'category' => $request->input('kategori'),
            'menu_paket' => $request->input('menu_paket'),
            'menu_brunch' => $request->input('menu_brunch'),
            'menu_buffet' => $request->input('menu_buffet'),
            'reservasi' => $request->input('reservasi'),
            'gratis_minum_pembuka' => $request->input('gratis_minum_pembuka'),
            'ruang_privat' => $request->input('ruang_privat'),
            'jasa_pengiriman' => $request->input('jasa_pengiriman'),
            'area_merokok' => $request->input('area_merokok'),
            'minuman_alkohol' => $request->input('minuman_alkohol'),
            'area_parkir' => $request->input('area_parkit'),
            'wifi' => $request->input('wifi'),
            'hiburan_khusus' => $request->input('hiburan_khusus'),
            'pembayaran' => json_encode($request->input('pembayaran')),
            'jenis_masakan' => json_encode($request->input('jenis_masakan')),
            'deskripsi_reso' => $request->input('deskripsi_resto'),
            'images' => $filePath,
        ]);

        $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
        return view('pages.directory');
    }

    public function postActivity (Request $request)
    {
        /** insert multiple images*/
        $filePath = $this->insertMultpleImage('directory-activity', $request->file('img'));

        /**insert to Database*/
        $insertActivity = DirectoryActivity::create([
            'nama_tempat' => $request->input('nama_tempat'),
            'alamat_lengkap' => $request->input('alamat_lengkap'),
            'nomor_telephone' => $request->input('nomor_telephone'),
            'narahubung' => $request->input('narahubung'),
            'jabatan' => $request->input('jabatan'),
            'no_hp_narahubung' => $request->input('no_hp_narahubung'),
            'email_narahubung' => $request->input('email_narahubung'),
            'instagram' => $request->input('instagram'),
            'website' => $request->input('website'),
            'jam_operasioanl' => $request->input('jam_operasioanl'),
            'hari_tidak_operasional' => $request->input('hari_tidak_operasional'),
            'batasan_usia' => $request->input('batasan_usia'),
            'keunikan' => $request->input('keunikan'),
            'pembayaran' => json_encode($request->input('pembayaran')),
            'reservasi' => $request->input('reservasi'),
            'wifi' => $request->input('wifi'),
            'area_parkir' => $request->input('area_parkir'),
            'jenis_tempat' => $request->input('jenis_tempat'),
            'harga_tiket' => $request->input('harga_tiket'),
            'deskripsi_tempat' => $request->input('deskripsi_tempat'),
            'aktifitas_utama' => $request->input('aktifitas_utama'),
            'fasilitas_pendukung' => $request->input('fasilitas_pendukung'),
            'keterangan_tambahan' => $request->input('keterangan_tambahan'),
            'img' => $filePath,
        ]);

        $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
        return view('pages.directory');
    }

    public function postProduct (Request $request)
    {
        /** insert multiple images*/
        $filePath = $this->insertMultpleImage('directory-product', $request->file('foto_produk'));

        /**insert to Database*/
        $insertProduct = DirectoryProduct::create([
            'nama_produk' => $request->input('nama_produk'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
            'instagram' => $request->input('instagram'),
            'website' => $request->input('website'),
            'jam_operasioanl' => $request->input('jam_operasioanl'),
            'memiliki_showroom' => $request->input('memiliki_showroom'),
            'alamat_showroom' => $request->input('alamat_showroom'),
            'jenis' => $request->input('jenis'),
            'range_harga' => $request->input('range_harga'),
            'deskripsi_produk' => $request->input('deskripsi_produk'),
            'foto_produk' => $request->input('foto_produk'),
            'foto_produk' => $filePath,
        ]);

        $request->session()->flash('success','Terimakasih Admin kami akan segera menghubungi Anda');
        return view('pages.directory');
    }
    protected function insertMultpleImage ($slug, $files)
    {
        if ($files) {
            $filesPath = [];
            foreach ($files as $file) {
                $filename = Str::random(20);
                $path = $slug.'/'.date('FY').'/';
                array_push($filesPath, $path.$filename.'.'.$file->getClientOriginalExtension());
                $filePath = $path.$filename.'.'.$file->getClientOriginalExtension();
                $image = Image::make($file);
                Storage::disk(config('voyager.storage.disk'))->put($filePath, (string) $image->encode(), 'public');
            }
        }
        return json_encode($filesPath);
    }




//    private function sendEmail($email,$title)
//    {
//        $data = ['message' => 'Register'];
//        Mail::to($email)->send(new Directory($data));
//    }

    public function postSubscribe(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $phone_number = $request->input('phone_number');

        Subscibe::create([
            'email' => $email,
            'name' => $name,
            'phone_number' => $phone_number,
        ]);
        $data = ['message' => 'success'];
        return ApiHelper::buildResponse(200,null,$data);
    }
}
