<?php

namespace App\Http\Controllers;

use App\DirectoryHotel;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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
}
