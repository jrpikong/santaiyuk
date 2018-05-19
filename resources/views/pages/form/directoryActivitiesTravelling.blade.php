        <h3>Isikan Formulir Aktifitas Dibwah Ini!</h3>

        <form class="form-horizontal" method="post" action="{{route('postActivity')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-3" for="nama-tempat">Nama Tempat : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" placeholder="Nama Tempat">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="alamat-lengkap">Alamat Lengkap : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="alamat-lengkap" name="alamat_lengkap" placeholder="Alamat Lengkap">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="nomor-telephone">Nomor Telephone : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nomor-telephone" name="nomor_telephone" placeholder="Nomor Telephone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="nama-hotel">Nama Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="narahubung" name="narahubung" placeholder="Nara Hubung / Contact Person">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="jabatan">Jabatan : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="no-hp-narahubung">No HP Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no-hp-narahubung" name="no_hp_narahubung" placeholder="No HP Nara Hubung / Contact Person">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="email-narahubung">Email Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email-narahubung" name="email_narahubung" placeholder="Email Nara Hubung / Contact Person">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="instagram">Instagram : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Akun Instagram Anda">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="website">Website : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="website" name="website" placeholder="http://hotelasmara.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="jam-operasioanl">Jam Operasional : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jam-operasioanl" name="jam_operasioanl" placeholder="Jam Operasional">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="hari-tidak-operasional">Hari Tidak Operasional : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hari-tidak-operasional" name="hari_tidak_operasional" placeholder="Hari Tidak Operasional">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="batasan-usia">Batasan Usia :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="batasan-usia" name="batasan_usia" placeholder="Batasan Usia">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="keunikan">Keunikan : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="keunikan" name="keunikan" placeholder="Keunikan Yang Dimiliki">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3" for="pembayaran">Pembayaran : </label>
                <div class="col-sm-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran[]" id="pembayaran" value="Tunai"> Tunai
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran[]" id="pembayaran" value="Debit"> Debit
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran[]" id="pembayaran" value="Kartu Kredit"> Kartu Kredit (Amex, Visa, Maste)
                    </label>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3" for="reservasi">Reservasi :</label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="reservasi" id="reservasi" value="Disarankan Reservasi">Disarankan Reservasi
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="reservasi" id="reservasi" value="Disarankan Langsung Hadir">Disarankan Langsung Hadir
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="wi-fi">Wi-fi : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="wifi" id="wi-fi" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="wifi" id="wi-fi" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="area-parkir">Area Parkir : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="area_parkir" id="area-parkir" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="area_parkir" id="area-parkir" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="jenis-tempat">Kategori Jenis Tempat :</label>
                <div class="col-sm-9">
                    <select class="form-control" id="jenis-tempat" name="jenis_tempat">
                        <option value="Wellness">Wellness</option>
                        <option value="Any Activities">Any Activities</option>
                        <option value="Place Of Interest">Place Of Interest</option>
                        <option value="Nature">Nature</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="harga-tiket">Harga Tiket/Membership/Orang :</label>
                <div class="col-sm-9">
                    <select class="form-control" id="harga-tiket" name="harga_tiket">
                        <option value="Dibawah 100.000">Dibawah 100.000</option>
                        <option value="100.000 - 250.000">100.000 - 250.000</option>
                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                        <option value="Lebih dari 1.000.000">Lebih dari 1.000.000</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="deskripsi-tempat">Deskripsi Tempat : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="deskripsi-tempat" name="deskripsi_tempat" placeholder="Deskripsi Tempat"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="aktifitas-utama">Aktifitas Utama : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="aktifitas-utama" name="aktifitas_utama" placeholder="Aktifitas Utama"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="fasilitas-pendukung">Fasilitas Pendukung :</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="fasilitas-pendukung" name="fasilitas_pendukung" placeholder="Fasilitas Pendukung"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="keterangan-tambahan">Keterangan Tambahan :</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="keterangan-tambahan" name="keterangan_tambahan" placeholder="Keterangan Tambahan "></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="Foto">Lampirkan Foto Lokasi :</label>
                <div class="col-sm-9">
                    <input type="file" multiple name="img[]" id="img" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>