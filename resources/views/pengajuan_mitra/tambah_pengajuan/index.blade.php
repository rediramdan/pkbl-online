<div class="form-element-area">
    <div class="form-example-wrap">


        <form method="POST" action="{{route('pengajuan.tambah')}}">
            {{csrf_field()}}
            <div class="form-example-int form-horizental">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Tanggal Daftar </label>
                </div>
                <div id="data_1"
                    class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int col-lg-4 col-md-7 col-sm-7 col-xs-12">
                    <div class=" input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" name="tanggal_daftar" class="form-control" placeholder="Tanggal Daftar"
                            value="{{date('Y-m-d')}}">
                        <small class="" style="font-size:11px;color:red;">
                            {{ $errors->has('tanggal_daftar') ? $errors->first('tanggal_daftar') : ""}} </small>
                    </div>
                    <div class="form-ic-cmp">
                        <i class="notika-icon notika-calendar"></i>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="form-example-wrap mg-t-30">
    <div class="cmp-tb-hd cmp-int-hd">
        <h3>Data Pemohon</h3>
        <hr>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="">Nama Lengkap </label>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="nk-int-st">
                        <input type="text" name="nama_lengkap" class="form-control input-sm" placeholder="Nama Lengkap">
                        <small class="" style="font-size:11px;color:red;">
                            {{ $errors->has('nama_lengkap') ? $errors->first('nama_lengkap') : ""}} </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="nk-int-mk sl-dp-mn col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Jenis Identitas </label>
                </div>
                <div class="chosen-select-act fm-cmp-mg col-lg-2 col-md-7 col-sm-7 col-xs-12">
                    <select class="chosen" name="jenis_identitas">
                        <option value="">-- PILIH --</option>
                        <option value="KTP">KTP</option>
                        <option value="SIM">SIM</option>
                    </select>
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('jenis_identitas') ? $errors->first('jenis_identitas') : ""}} </small>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="">Nomor Identitas </label>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="nk-int-st">
                        <input type="text" name="nomor_identitas" class="form-control input-sm"
                            placeholder="Nomor Identitas">
                        <small class="" style="font-size:11px;color:red;">
                            {{ $errors->has('nomor_identitas') ? $errors->first('nomor_identitas') : ""}} </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="">Tempat Lahir </label>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="nk-int-st">
                        <input type="text" name="tempat_lahir" class="form-control input-sm" placeholder="Tempat Lahir">
                        <small class="" style="font-size:11px;color:red;">
                            {{ $errors->has('tempat_lahir') ? $errors->first('tempat_lahir') : ""}} </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-example-int form-horizental">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                <label class="">Tanggal Lahir </label>
            </div>
            <div id="data_1"
                class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int col-lg-4 col-md-7 col-sm-7 col-xs-12">
                <div class=" input-group date nk-int-st">
                    <span class="input-group-addon"></span>
                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('tanggal_lahir') ? $errors->first('tanggal_lahir') : ""}} </small>
                </div>
                <div class="form-ic-cmp">
                    <i class="notika-icon notika-calendar"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Jenis Kelamin </label>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="fm-checkbox">
                        <label><input type="radio" value="Laki-laki" name="jk" class="i-checks"> <i></i>
                            Laki_laki</label>
                    </div>
                    <div class="fm-checkbox">
                        <label><input type="radio" value="Perempuan" name="jk" class="i-checks"> <i></i>
                            Perempuan</label>
                    </div>
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('jk') ? $errors->first('jk') : ""}} </small>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="">Nama Ibu </label>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                    <div class="nk-int-st">
                        <input type="text" name="nama_ibu" class="form-control input-sm" placeholder="Nama Ibu">
                        <small class="" style="font-size:11px;color:red;">
                            {{ $errors->has('nama_ibu') ? $errors->first('nama_ibu') : ""}} </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-example-int form-horizental">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                <label class="">Nilai Pengajuan </label>
            </div>
            <div class="form-group ic-cmp-int col-lg-5 col-md-7 col-sm-7 col-xs-12">
                <div class="nk-int-st">
                    <input type="number" name="nilai_pengajuan" class="form-control">
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('nilai_pengajuan') ? $errors->first('nilai_pengajuan') : ""}} </small>
                </div>
                <div class="form-ic-cmp">
                    <label>Rupiah</label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="nk-int-mk sl-dp-mn col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Sektor Usaha </label>
                </div>
                <div class="chosen-select-act fm-cmp-mg col-lg-4 col-md-7 col-sm-7 col-xs-12">
                    <select class="chosen" name="sektor_usaha">
                        <option value="">-- SEMUA --</option>
                        <option value="Sektor Industri">Sektor Industri</option>
                        <option value="Sektor Perdagangan">Sektor Perdagangan</option>
                        <option value="Sektor Perdagangan">Sektor Perdagangan</option>
                        <option value="Sektor Pertanian">Sektor Pertanian</option>
                        <option value="Sektor Peternakan">Sektor Peternakan</option>
                        <option value="Sektor Perkebunan">Sektor Perkebunan</option>
                        <option value="Sektor Perikanan">Sektor Perikanan</option>
                        <option value="Sektor Jasa">Sektor Jasa</option>
                        <option value="Sektor Lainnya">Sektor Lainnya</option>
                        <option value="Data Migrasi">Data Migrasi</option>
                    </select>
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('sektor_usaha') ? $errors->first('sektor_usaha') : ""}} </small>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="nk-int-mk sl-dp-mn col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Badan Usaha </label>
                </div>
                <div class="chosen-select-act fm-cmp-mg col-lg-5 col-md-7 col-sm-7 col-xs-12">
                    <select class="chosen" name="badan_usaha">
                        <option value="">-- PILIH --</option>
                        <option value="Perorangan">Perorangan</option>
                        <option value="Badan Usaha/Perusahaan">Badan Usaha/Perusahaan</option>
                        <option value="Koperasi">Koperasi</option>
                        <option value="Sinergi BUMN">Sinergi BUMN</option>
                    </select>
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('badan_usaha') ? $errors->first('badan_usaha') : ""}} </small>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int form-horizental">
        <div class="form-group ">
            <div class="row">
                <div class="nk-int-mk sl-dp-mn col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                    <label class="">Kota </label>
                </div>
                <div class="chosen-select-act fm-cmp-mg col-lg-6 col-md-7 col-sm-7 col-xs-12">
                    <select class="chosen" name="kota">
                        <option value="">-- PILIH --</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                    <small class="" style="font-size:11px;color:red;">
                        {{ $errors->has('kota') ? $errors->first('kota') : ""}} </small>
                </div>
            </div>
        </div>
    </div>

    <div class="form-example-int mg-t-15">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            </div>
            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>

            </div>
        </div>
    </div>
    </form>
</div>
<hr>