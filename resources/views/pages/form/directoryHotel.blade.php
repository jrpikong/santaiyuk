        <h3>Isikan Formulir Direktori Hotel Dibwah Ini!</h3>

        <form class="form-horizontal" method="post" action="{{route('postHotel')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-3" for="nama-hotel">Nama Hotel : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama-hotel" name="nama-hotel" placeholder="Nama Hotel">
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
                    <input type="text" class="form-control" id="website" name="website" placeholder="http://hotelasmara.com">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="group-by">Group By : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="group-by" name="group-by" placeholder="Group By">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="jumlah-kamar">Jumlah Kamar : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jumlah-kamar" name="jumlah-kamar" placeholder="87">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="tempat-menarik-terdekat">Tempat Menarik Terdekat : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tempat-menarik-terdekat" name="tempat-menarik-terdekat" placeholder="Tempat Menarik Terdekat">
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
                <label class="control-label col-sm-3" for="jenis-penginapan">Jenis Penginapan : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="jenis-penginapan" name="jenis-penginapan">
                        <option value="Resort">Resort</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="rekomendasi-untuk">Rekomendasi Untuk : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="rekomendasi-untuk" name="rekomendasi-untuk" multiple>
                        <option value="Perjalanan Bisnis">Perjalanan Bisnis</option>
                        <option value="Wisata Keluarga">Wisata Keluarga</option>
                        <option value="Honeymooners">Honeymooners</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="range-harga-kamar">Range Harga Kamar/Malam : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="range-harga-kamar" name="range-harga-kamar">
                        <option value="Dibawah 250.000">Dibawah 250.000</option>
                        <option value="250.000-500.000">250.000-500.000</option>
                        <option value="500.000-1.000.000">500.000-1.000.000</option>
                        <option value="1.000.000- 5.000.000">1.000.000- 5.000.000</option>
                        <option value="Lebih dari 5.000.000">Lebih dari 5.000.000</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="fasilitas-hotel">Fasilitas Hotel</label>
                <div class="col-sm-9">
                    <select class="form-control" id="fasilitas-hotel" name="fasilitas-hotel" multiple>
                        <option value="KOLAM RENANG">KOLAM RENANG</option>
                        <option value="TEMPAT OLAH RAGA">TEMPAT OLAH RAGA</option>
                        <option value="MINI MARKET">MINI MARKET</option>
                        <option value="BALLROOM">BALLROOM</option>
                        <option value="MEETING ROOM">MEETING ROOM</option>
                        <option value="RESTAURANT">RESTAURANT</option>
                        <option value="SPA">SPA</option>
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label class="control-label col-sm-3" for="deskripsi-hotel">Deskripsi Hotel  : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="deskripsi-hotel" name="deskripsi-hotel" placeholder="Deskripsi Hotel Anda"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="tipe-kamar">Tipe Kamar & Kapasitas Masing - Masing Kamar : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="tipe-kamar" name="tipe-kamar" placeholder="Tipe Kamar"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="fasilitas-umum-kamar">Fasilitas Umum Di Dalam Kamar</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="fasilitas-umum-kamar" name="fasilitas-umum-kamar" placeholder="Fasilitas Umum Di Dalam Kamar"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="fasilitas-umum-kamar">Fasilitas Umum Di Dalam Kamar</label>
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