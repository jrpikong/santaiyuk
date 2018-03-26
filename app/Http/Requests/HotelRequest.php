<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_hotel' => 'required',
            'narahubung' => 'required',
            'jabatan' => 'required',
            'no_hp_narahubung' => 'required',
            'email_narahubung' => 'required|email',
            'alamat_lengkap' => 'required',
            'nomor_reservasi' => 'required',
            'jumlah_kamar' => 'required|int',
            'jenis_penginapan' => 'required',
            'range_harga_kamar' => 'required',
            'fasilitas_hotel' => 'required',
            'deskripsi_hotel' => 'required',
            'tipe_kamar' => 'required',
            'fasilitas_umum_kamar' => 'required',
            'img' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'nama_hotel.required' => 'Nama Hotel Harus di Isi',
            'narahubung.required' => 'Nama Nara Hubung Harus di Isi',
            'jabatan.required' => 'Jabatan Nara Hubung Harus di Isi',
            'no_hp_narahubung.required' => 'No Hp Nara Hubung Harus di Isi',
            'email_narahubung.required' => 'Email Nara Hubung Harus di Isi',
            'alamat_lengkap.required' => 'Alamat Harus di Isi',
            'nomor_reservasi.required' => 'Nomor Reservasi Harus di Isi',
            'jumlah_kamar.required' => 'Jumlah Kamar Harus di Isi',
            'jenis_penginapan.required' => 'Jenis Penginapan Harus di Isi',
            'range_harga_kamar.required' => 'Range Harga Kamar Harus di Isi',
            'fasilitas_hotel.required' => 'Fasilitas Hotel Harus di Isi',
            'deskripsi_hotel.required' => 'Deskripsi Hotel Harus di Isi',
            'tipe_kamar.required' => 'Tipe Kamar Harus di Isi',
            'fasilitas_umum_kamar.required' => 'Fasilitas Kamar Harus di Isi',
            'img.required' => 'Foto Harus di Isi',
        ];
    }
}
