<div class="form-element-area">
    <div class="form-example-wrap mg-t-30">
        <div class="">
            <h3>Data Usaha</h3>
            <hr>
        </div>
        <form method="POST" action="{{route('dusaha.update', $data->data_usaha->id)}}" id="form-usaha">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Bidang Usaha</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="bidangusaha" name="bidangusaha"
                                            class="form-control input-sm" placeholder="Masukan bidang usaha anda"
                                            value="{{$data->data_usaha->bidang_usaha}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Nama
                                        Usaha</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="namausaha" name="namausaha" class="form-control input-sm"
                                            placeholder="Masukan Nama Usaha anda"
                                            value="{{$data->data_usaha->nama_usaha}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Nama
                                        Pimpinan</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="namapimpinan" name="namapimpinan"
                                            class="form-control input-sm" placeholder="Masukan Nama Pimpinan Usaha anda"
                                            value="{{$data->data_usaha->nama_pimpinan}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="fm-checkbox">
                                        <label><input type="checkbox" name="chalamat" value="alamatsama"
                                                class="i-checks">
                                            <i></i> Alamat Usaha
                                            Sama Dengan Alamat
                                            Tempat
                                            tinggal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Alamat
                                        Usaha</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="alamatusaha" name="alamatusaha"
                                            class="form-control input-sm" placeholder="Masukan alamat usaha Usaha anda"
                                            value="{{$data->data_usaha->alamat_usaha}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kota</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="uskota" name="uskota" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kota = [null,'Bandung','Ciamis'];
                                        ?>
                                                @for($i=0; $i< count($kota); $i++) @if($kota[$i]==$data->
                                                    data_usaha->kota)
                                                    <option value="{{$kota[$i]}}" selected>
                                                        {{$kota[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$kota[$i]}}">
                                                        {{$kota[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kecamatan</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="uskecamatan" name="uskecamatan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kecamatan = [null,'Ujungberung','Panjalu','Lumbung'];
                                        ?>
                                                @for($i=0; $i< count($kecamatan); $i++) @if($kecamatan[$i]==$data->
                                                    data_usaha->kecamatan)
                                                    <option value="{{$kecamatan[$i]}}" selected>
                                                        {{$kecamatan[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$kecamatan[$i]}}">
                                                        {{$kecamatan[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kecamatan
                                        Lainnya</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="uskecamatanlain" name="uskecamatanlain"
                                            class="form-control input-sm" placeholder="Masukan Kecamatan anda" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kelurahan/Desa</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="uskelurahan" name="uskelurahan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kelurahan = [null,'Cigending','Harumansari','Panghegar'];
                                        ?>
                                                @for($i=0; $i< count($kelurahan); $i++) @if($kelurahan[$i]==$data->
                                                    data_usaha->kelurahan)
                                                    <option value="{{$kelurahan[$i]}}" selected>
                                                        {{$kelurahan[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$kelurahan[$i]}}">
                                                        {{$kelurahan[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kelurahan
                                        Lainnya</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" name="uskelurahanlain" class="form-control input-sm"
                                            placeholder="Alamat Lain" disabled=""
                                            value="{{$data->data_usaha->kelurahan}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kode
                                        Pos</label>
                                </div>
                                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-7">
                                    <div class="nk-int-st">
                                        <input type="text" id="uskodepos" name="uskodepos" class="form-control input-sm"
                                            placeholder="Masukan Kode Pos Anda" value="{{$data->data_usaha->kode_pos}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">No.
                                        Telepon</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="ustelepon" name="ustelepon" class="form-control input-sm"
                                            placeholder="Masukan Nomor Telpon anda"
                                            value="{{$data->data_usaha->no_tlp}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">No.
                                        Handphone</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="ushp" name="ushp" class="form-control input-sm"
                                            placeholder="Masukan Nomor Handphone anda"
                                            value="{{$data->data_usaha->no_hp}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">No.
                                        Fax</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="usfax" name="usfax" class="form-control input-sm"
                                            placeholder="Masukan Nomor Fax" value="{{$data->data_usaha->no_fax}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">E-mail</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="usemail" name="usemail" class="form-control input-sm"
                                            placeholder="Masukan Email anda" value="{{$data->data_usaha->email}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Status
                                        Kepemilikan
                                        Usaha</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="usstatuskepemilikan" name="usstatuskepemilikan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $status_kepemilikan_usaha = [null,'Milik sendiri','Milik orang lain'];
                                        ?>
                                                @for($i=0; $i< count($status_kepemilikan_usaha); $i++)
                                                    @if($status_kepemilikan_usaha[$i]==$data->
                                                    data_usaha->status_kepemilikan_usaha)
                                                    <option value="{{$status_kepemilikan_usaha[$i]}}" selected>
                                                        {{$status_kepemilikan_usaha[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$status_kepemilikan_usaha[$i]}}">
                                                        {{$status_kepemilikan_usaha[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Tanggal
                                        Akhir Sewa</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int" id="data_1">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input id="ustanggalakhir" name="ustanggalakhir" type="text"
                                                class="form-control" placeholder="Masukan tanggal "
                                                value="{{$data->data_usaha->tanggal_akhir_sewa}}">
                                        </div>
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Tanggal Mulai
                                        Usaha</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int" id="data_1">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input id="tanggalmulai" name="tanggalmulai" type="text"
                                                class="form-control" placeholder="Masukan tanggal "
                                                value="{{$data->data_usaha->tanggal_aktif_usaha}}">
                                        </div>
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Jumlah
                                        Tenaga Kerja</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <input type="text" id="jumlahtenaga" name="jumlahtenaga"
                                            class="form-control input-sm" placeholder="Masukan Jumlah Tenaga Kerja"
                                            value="{{$data->data_usaha->jumlah_tenaga_kerja}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Modal Kerja
                                        (Rp.)</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="usmodal" name="usmodal" class="form-control input-sm"
                                            placeholder="Masukan Modal Kerja Anda" value="{{$data->data_usaha->modal}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Investasi
                                        (Rp.)</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="investasi" name="investasi" class="form-control input-sm"
                                            placeholder="Masukan Nilai Investasi"
                                            value="{{$data->data_usaha->investasi}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Omset /
                                        Bulan (Rp.)</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="omsetrp" name="omsetrp" class="form-control input-sm"
                                            placeholder="Masukan Omset Anda"
                                            value="{{$data->data_usaha->omset_perbulan_rp}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Omset /
                                        Bulan (Unit)</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="omsetunit" name="omsetunit" class="form-control input-sm"
                                            placeholder="Masukan Omset Anda"
                                            value="{{$data->data_usaha->omset_perbulan_unit}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Adm.
                                        Pembukuan</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="pembukuan" name="pembukuan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $adm_pembukuan = [null,'Milik sendiri','Milik orang lain'];
                                        ?>
                                                @for($i=0; $i< count($adm_pembukuan); $i++)
                                                    @if($adm_pembukuan[$i]==$data->
                                                    data_usaha->adm_pembukuan)
                                                    <option value="{{$adm_pembukuan[$i]}}" selected>
                                                        {{$adm_pembukuan[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$adm_pembukuan[$i]}}">
                                                        {{$adm_pembukuan[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Berupa</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="berupa" name="berupa" class="form-control input-sm"
                                            placeholder="" value="{{$data->data_usaha->berupa}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kewajiban
                                        Pinjaman di Pihak
                                        Lain</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="kewajiban" name="kewajiban" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $pinjaman_pihak_lain = [null,'Milik sendiri','Milik orang lain'];
                                        ?>
                                                @for($i=0; $i< count($pinjaman_pihak_lain); $i++)
                                                    @if($pinjaman_pihak_lain[$i]==$data->
                                                    data_usaha->pinjaman_pihak_lain)
                                                    <option value="{{$pinjaman_pihak_lain[$i]}}" selected>
                                                        {{$pinjaman_pihak_lain[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$pinjaman_pihak_lain[$i]}}">
                                                        {{$pinjaman_pihak_lain[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Bank /
                                        BUMN</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="bumn" name="bumn" class="form-control input-sm"
                                            placeholder="" value="{{$data->data_usaha->bank_bumn}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Besarnya
                                        (Rp.)</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="besarnya" name="besarnya" class="form-control input-sm"
                                            placeholder="" value="{{$data->data_usaha->Besarnya}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btn-update-dtusaha" class="btn btn-success notika-btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
<script>
$('#btn-update-dtusaha').click(function(event) {
    event.preventDefault();;
    var form = $('#form-usaha'),
        url = form.attr('action'),
        method = 'PUT';

    form.find('small').remove();

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        success: function(response) {
            swal({
                title: "Berhasil Update",
                text: "Data Berhasil disimpan",
                type: "success",
                showCancelButton: false,
                confirmButtonText: "Ok",
            })

        },
        error: function(xhr) {
            var res = xhr.responseJSON;

            if ($.isEmptyObject(res) == false) {
                $.each(res.errors, function(key, value) {

                    swal({
                        title: "Gagal Update",
                        text: "Periksa kembali inputan anda",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "Ok",
                    })

                    $('#' + key)
                        .closest('.nk-int-st')
                        .append('<small style="color:red">' + value + '</small>');
                });
            }
        }
    });


});
</script>
@endpush