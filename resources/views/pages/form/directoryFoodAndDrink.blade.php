        <h3>Isikan Formulir Direktori Food And Drink Dibwah Ini!</h3>

        <form class="form-horizontal" method="post" action="{{route('postHotel')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-3" for="nama-resto">Nama Resto / Kafe : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama-resto" name="nama-resto" placeholder="Nama Resto / Kafe">
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
                    <input type="text" class="form-control" id="no-hp-narahubung" name="no-hp-narahubung" placeholder="No HP Nara Hubung / Contact Person">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="email-narahubung">Email Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email-narahubung" name="email-narahubung" placeholder="Email Nara Hubung / Contact Person">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="alamat-lengkap">Alamat Lengkap : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="alamat-lengkap" name="alamat-lengkap" placeholder="Alamat Lengkap">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="nomor-reservasi">Nomor Reservasi : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nomor-reservasi" name="nomor-reservasi" placeholder="Nomor Reservasi">
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
                    <input type="text" class="form-control" id="website" name="website" placeholder="http://restolegenda.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="jam-operasional">Jam Operasional : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jam-operasional" name="jam-operasional" placeholder="Jam Operasional">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="menu-rekomendasi">Menu Rekomendasi : </label>
                <div class="col-sm-9">
                    <label class="control-label col-sm-3" for="minuman">Minuman</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="minuman" name="minuman" placeholder="Minuman Rekomendasi">
                    </div>

                    <label class="control-label col-sm-3" for="makanan">Makanan Utam</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="makanan" name="makanan" placeholder="Makanan Rekomendasi">
                    </div>

                    <label class="control-label col-sm-3" for="makanan-pendamping">Makanan Pendamping</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="makanan-pendamping" name="makanan-pendamping" placeholder="Makanan Pendamping">
                    </div>

                    <label class="control-label col-sm-3" for="kudapan-munulainnya">Kudapan / Menu Lainnya</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kudapan-munulainnya" name="kudapan-munulainnya" placeholder="Kudapan / Menu Lainnya">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="penghargaan">Penghargaan : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="penghargaan" name="penghargaan" placeholder="Penghargaan Yang Pernah Diraih">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="keunikan">Keunikan : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="keunikan" name="keunikan" placeholder="Keunikan Yang Dimiliki">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="range-harga">Range Harga : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="range-harga" name="range-harga">
                        <option value="Dibawah 100.000">Dibawah 100.000</option>
                        <option value="100.000 - 250.000">100.000 - 250.000</option>
                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                        <option value="Lebih dari 1.000.000">Lebih dari 1.000.000</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="kategori">Kategori : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="Resto">Resto</option>
                        <option value="Cafe / Pub & Bar">Cafe / Pub & Bar</option>
                        <option value="Other Meals">Other Meals</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="menu-paket">Menu Paket : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="menu-paket" id="menu-paket" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="menu-paket" id="menu-paket" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="menu-brunch">Menu Brunch : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="menu-brunch" id="menu-brunch" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="menu-brunch" id="menu-brunch" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="menu-buffet">Menu Buffer : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="menu-buffet" id="menu-buffet" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="menu-buffet" id="menu-buffet" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="reservasi">Reservasi : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="reservasi" id="reservasi" value="Disarankan Untuk Reservasi">Disarankan Untuk Reservasi
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="reservasi" id="reservasi" value="Langsung Hadir">Langsung Hadir
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for=gratis-minum-pembuka>Gratis Minum Pembuka : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="gratis-minum-pembuka" id="gratis-minum-pembuka" value="Ya">Ya
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gratis-minum-pembuka" id="gratis-minum-pembuka" value="Tida">Tidak
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="ruang-privat">Ruang Privat : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="ruang-privat" id="ruang-privat" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ruang-privat" id="ruang-privat" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="jasa-pengiriman">Jasa Pengiriman : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="jasa-pengiriman" id="jasa-pengiriman" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jasa-pengiriman" id="jasa-pengiriman" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="area-merokok">Area Merokok : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="area-merokok" id="area-merokok" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="area-merokok" id="area-merokok" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="minuman-alkohol">Minuman Alkohol : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="minuman-alkohol" id="minuman-alkohol" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="minuman-alkohol" id="minuman-alkohol" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="area-parkit">Area Parkir : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="area-parkit" id="area-parkit" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="area-parkit" id="area-parkit" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="wi-fi">Wi-fi : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="wi-fi" id="wi-fi" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="wi-fi" id="wi-fi" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="hiburan-khusus">Hiburan Khusus : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="hiburan-khusus" id="hiburan-khusus" value="Tersedia">Tersedia (Live Musik, Karaoke, dll)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="hiburan-khusus" id="hiburan-khusus" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="pembayaran">Pembayaran : </label>
                <div class="col-sm-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran" id="pembayaran" value="Tunai"> Tunai
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran" id="pembayaran" value="Debit"> Debit
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="pembayaran" id="pembayaran" value="Kartu Kredit"> Kartu Kredit (Amex, Visa, Maste)
                    </label>
                </div>
            </div>



            <div class="form-group">
                <label class="control-label col-sm-3" for="jenis-masakan">Jenis Masakan : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="jenis-masakan" name="jenis-masakan" multiple>
                        <option value="Indonesia">Indonesia</option>
                        <option value="American">American</option>
                        <option value="Italian">Italian</option>
                        <option value="Italian">Italian</option>
                        <option value="Mexican">Mexican</option>
                        <option value="Mexican">Mexican</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Arabian">Arabian</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Makanan Sehat">Makanan Sehat</option>
                        <option value="Cepat Saji">Cepat Saji</option>
                        <option value="Dissert">Dissert</option>
                        <option value="Bakery">Bakery</option>
                    </select>
                </div>
            </div>




            <div class="form-group">
                <label class="control-label col-sm-3" for="deskripsi-hotel">Deskripsi Hotel :</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="deskripsi-hotel" name="deskripsi-hotel" placeholder="Deskripsi Hotel Anda"></textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3" for="fasilitas-umum-kamar">Tampak Depan Resto, Ruang Indor / Out Door, Menu Andalan : </label>
                <div class="col-sm-9">
                    <input type="file" multiple name="img" id="img">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
