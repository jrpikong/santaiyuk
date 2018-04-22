        <h3>Isikan Formulir Direktori Hotel Di bawah ini!</h3>
        @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
        @endforeach
        <form class="form-horizontal" method="post" action="{{route('postHotel')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('nama_hotel') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="nama-hotel">Nama Hotel : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama-hotel" name="nama_hotel" placeholder="Nama Hotel">
                    @if ($errors->has('nama_hotel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_hotel') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('narahubung') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="nama-hotel">Nama Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="narahubung" name="narahubung" placeholder="Nara Hubung / Contact Person">
                    @if ($errors->has('narahubung'))
                        <span class="help-block">
                            <strong>{{ $errors->first('narahubung') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="jabatan">Jabatan : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                    @if ($errors->has('jabatan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jabatan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('no_hp_narahubung') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="no-hp-narahubung">No HP Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no-hp-narahubung" name="no_hp_narahubung" placeholder="No HP Nara Hubung / Contact Person">
                    @if ($errors->has('no_hp_narahubung'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp_narahubung') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email_narahubung') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="email-narahubung">Email Nara Hubung : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email-narahubung" name="email_narahubung" placeholder="Email Nara Hubung / Contact Person">
                    @if ($errors->has('email_narahubung'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email_narahubung') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('alamat_lengkap') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="alamat-lengkap">Alamat Lengkap : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="alamat-lengkap" name="alamat_lengkap" placeholder="Alamat Lengkap">
                    @if ($errors->has('alamat_lengkap'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat_lengkap') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('nomor_reservasi') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="nomor-reservasi">Nomor Reservasi : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nomor-reservasi" name="nomor_reservasi" placeholder="Nomor Reservasi">
                    @if ($errors->has('nomor_reservasi'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nomor_reservasi') }}</strong>
                        </span>
                    @endif
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
                    <input type="text" class="form-control" id="group-by" name="group_by" placeholder="Group By">
                </div>
            </div>
            <div class="form-group{{ $errors->has('jumlah_kamar') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="jumlah-kamar">Jumlah Kamar : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jumlah-kamar" name="jumlah_kamar" placeholder="87">
                    @if ($errors->has('jumlah_kamar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jumlah_kamar') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="tempat-menarik-terdekat">Tempat Menarik Terdekat : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tempat-menarik-terdekat" name="tempat_menarik_terdekat" placeholder="Tempat Menarik Terdekat">
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

            <div class="form-group{{ $errors->has('jenis_penginapan') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="jenis-penginapan">Jenis Penginapan : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="jenis-penginapan" name="jenis_penginapan">
                        <option value="Resort">Resort</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    @if ($errors->has('jenis_penginapan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jenis_penginapan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="rekomendasi-untuk">Rekomendasi Untuk : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="rekomendasi-untuk" name="rekomendasi_untuk[]" multiple required>
                        <option value="Perjalanan Bisnis">Perjalanan Bisnis</option>
                        <option value="Wisata Keluarga">Wisata Keluarga</option>
                        <option value="Honeymooners">Honeymooners</option>
                    </select>
                </div>
            </div>
            <div class="form-group{{ $errors->has('range_harga_kamar') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="range-harga-kamar">Range Harga Kamar/Malam : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="range-harga-kamar" name="range_harga_kamar">
                        <option value="Dibawah 250.000">Dibawah 250.000</option>
                        <option value="250.000-500.000">250.000-500.000</option>
                        <option value="500.000-1.000.000">500.000-1.000.000</option>
                        <option value="1.000.000- 5.000.000">1.000.000- 5.000.000</option>
                        <option value="Lebih dari 5.000.000">Lebih dari 5.000.000</option>
                    </select>
                    @if ($errors->has('range_harga_kamar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('range_harga_kamar') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('fasilitas_hotel') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="fasilitas-hotel">Fasilitas Hotel :</label>
                <div class="col-sm-9">
                    <select class="form-control" id="fasilitas-hotel" name="fasilitas_hotel[]" multiple>
                        <option value="KOLAM RENANG">KOLAM RENANG</option>
                        <option value="TEMPAT OLAH RAGA">TEMPAT OLAH RAGA</option>
                        <option value="MINI MARKET">MINI MARKET</option>
                        <option value="BALLROOM">BALLROOM</option>
                        <option value="MEETING ROOM">MEETING ROOM</option>
                        <option value="RESTAURANT">RESTAURANT</option>
                        <option value="SPA">SPA</option>
                    </select>
                    @if ($errors->has('fasilitas_hotel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fasilitas_hotel') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('deskripsi_hotel') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="deskripsi-hotel">Deskripsi Hotel  : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="deskripsi-hotel" name="deskripsi_hotel" placeholder="Deskripsi Hotel Anda"></textarea>
                    @if ($errors->has('deskripsi_hotel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('deskripsi_hotel') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('tipe_kamar') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="tipe-kamar">Tipe Kamar & Kapasitas Masing - Masing Kamar : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="tipe-kamar" name="tipe_kamar" placeholder="Tipe Kamar"></textarea>
                    @if ($errors->has('tipe_kamar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tipe_kamar') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('fasilitas_umum_kamar') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="fasilitas-umum-kamar">Fasilitas Umum Di Dalam Kamar :</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="fasilitas-umum-kamar" name="fasilitas_umum_kamar" placeholder="Fasilitas Umum Di Dalam Kamar"></textarea>
                    @if ($errors->has('fasilitas_umum_kamar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fasilitas_umum_kamar') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                <label class="control-label col-sm-3" for="Foto">Foto :</label>
                <div class="col-sm-9">
                    <input type="file" multiple name="img[]" id="img">
                    @if ($errors->has('img'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>