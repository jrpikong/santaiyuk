        <h3>Isikan Formulir Produk Di bawah ini!</h3>

        <form class="form-horizontal" method="post" action="{{route('postProduct')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-3" for="nama-produk">Nama Produk : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id=nama-produk name="nama_produk" placeholder="Nama Produk">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="no-hp">No HP : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Email : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
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
                <label class="control-label col-sm-3" for="jam-operasioanl">Jam Operasional : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="jam-operasioanl" name="jam_operasioanl" placeholder="Jam Operasional">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="memiliki-showroom">Memiliki Showroom : </label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="memiliki_showroom" id="memiliki-showroom" value="Tersedia">Tersedia
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="memiliki_showroom" id="memiliki-showroom" value="Tidak Tersedia">Tidak Tersedia
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="alamat-showroom">Alamat Lengkap Showroom : </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="alamat-showroom" name="alamat_showroom" placeholder="Alamat Lengkap Showroom">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-3" for="jenis">Jenis : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="jenis" name="jenis">
                        <option value="Fashio">Fashio</option>
                        <option value="Foods">Foods</option>
                        <option value="Services">Services</option>
                        <option value="Other Things">Other Things</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="range-harga">Range Harga : </label>
                <div class="col-sm-9">
                    <select class="form-control" id="range-harga" name="range_harga">
                        <option value="Dibawah 100.000">Dibawah 100.000</option>
                        <option value="100.000 - 250.000">100.000 - 250.000</option>
                        <option value="250.000 - 500.000">250.000 - 500.000</option>
                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                        <option value="Lebih dari 1.000.000">Lebih dari 1.000.000</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="deskripsi-produk">Deskripsi Produk : </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="deskripsi-produk" name="deskripsi_produk" placeholder="Deskripsi Produk"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="foto-produk">Foto Produk </label>
                <div class="col-sm-9">
                    <input type="file" multiple name="foto_produk[]" id="foto-produk" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>