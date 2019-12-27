<div class="form-element-area">

    <div class="form-example-wrap mg-t-30">
        <form method="POST" action="{{route('dpribadi.update', $data->data_pribadi->id)}}" id="form-pribadi">
            {{csrf_field()}}
            <div class="">
                <h3>Data Pribadi</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                    <label class="">Alamat
                                        Sesuai KTP</label>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="alamatktp" name="alamatktp" class="form-control input-sm"
                                            placeholder="Masukan alamat sesuai KTP anda..."
                                            value="{{$data->data_pribadi->alamat_ktp}}">
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
                                        Tempat Tinggal</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="alamattinggal" name="alamattinggal"
                                            class="form-control input-sm"
                                            placeholder="Masukan alamat tempat tinggal anda..."
                                            value="{{$data->data_pribadi->alamat_tempat_tinggal}}">
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
                                            <select id="benih" id="prkecamatan" name="prkecamatan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kecamatan = [null,'Panumbangan','Panjalu','Lainnya'];
                                        ?>
                                                @for($i=0; $i< count($kecamatan); $i++) @if($kecamatan[$i]==$data->
                                                    data_pribadi->kecamatan)
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
                                        <input type="text" id="prkecamatanlain" name="prkecamatanlain"
                                            class="form-control input-sm" placeholder="Alamat Lain" disabled="">
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
                                        <div class="chosen-select-act fm-cmp-mg class-alamat">
                                            <select id="prkelurahan" name="prkelurahan" class="chosen select-alamat"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kelurahan = [null,'Lintungpaku','Banjar','Lainnya'];
                                        ?>
                                                @for($i=0; $i< count($kelurahan); $i++) @if($kelurahan[$i]==$data->
                                                    data_pribadi->kelurahan)
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
                                        <input type="text" id="prkelurahanlain" name="prkelurahanlain"
                                            class="form-control input-sm" placeholder="Alamat Lain" disabled="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kode
                                        Pos</label>
                                </div>
                                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-7">
                                    <div class="nk-int-st">
                                        <input type="text" id="prkodepos" name="prkodepos" class="form-control input-sm"
                                            placeholder="Masukan Kode Pos" value="{{$data->data_pribadi->kode_pos}}">
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
                                    <label class="">Kepemilikan
                                        Rumah</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="rumahkepemilikan" name="rumahkepemilikan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $kepemilikan_rumah = [null,'Sendiri','Bukan Sendiri'];
                                        ?>
                                                @for($i=0; $i< count($kepemilikan_rumah); $i++)
                                                    @if($kepemilikan_rumah[$i]==$data->
                                                    data_pribadi->kepemilikan_rumah)
                                                    <option value="{{$kepemilikan_rumah[$i]}}" selected>
                                                        {{$kepemilikan_rumah[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$kepemilikan_rumah[$i]}}">
                                                        {{$kepemilikan_rumah[$i]}}
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
                                    <label class="">Telepone/No HP</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="prhp" name="prhp" class="form-control input-sm"
                                            placeholder="Masukan Nomor Handphone anda"
                                            value="{{$data->data_pribadi->no_hp}}">
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
                                        <input type="text" id="premail" name="premail" class="form-control input-sm"
                                            placeholder="Masukan Email anda" value="{{$data->data_pribadi->email}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Pekerjaan</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="prpekerjaan" name="prpekerjaan"
                                            class="form-control input-sm" placeholder="Masukan Pekerjaan anda"
                                            value="{{$data->data_pribadi->pekerjaan}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int form-horizental mg-t-15">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Agama</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="pragama" name="pragama" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $agama = [null,'Islam','Kristen','Katolik', 'Hindu'];
                                        ?>
                                                @for($i=0; $i< count($agama); $i++) @if($agama[$i]==$data->
                                                    data_pribadi->agama)
                                                    <option value="{{$agama[$i]}}" selected>
                                                        {{$agama[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$agama[$i]}}">
                                                        {{$agama[$i]}}
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
                                    <label class="">Status
                                        Pernikahan</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="statuspernikahan" name="statuspernikahan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $status_pernikahan = [null,'Belum Menikah','Menikah','Cerai'];
                                        ?>
                                                @for($i=0; $i< count($status_pernikahan); $i++)
                                                    @if($status_pernikahan[$i]==$data->
                                                    data_pribadi->status_pernikahan)
                                                    <option value="{{$status_pernikahan[$i]}}" selected>
                                                        {{$status_pernikahan[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$status_pernikahan[$i]}}">
                                                        {{$status_pernikahan[$i]}}
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
                                    <label class="">Pendidikan
                                        Terakhir</label>
                                </div>
                                <div class="col-lg-8 col-md-3 col-sm-3 col-xs-8">
                                    <div class="nk-int-st">
                                        <div class="chosen-select-act fm-cmp-mg">
                                            <select id="prpendidikan" name="prpendidikan" class="chosen"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $pendidikan_terakhir = [null,'S1','S2','S3'];
                                        ?>
                                                @for($i=0; $i< count($pendidikan_terakhir); $i++)
                                                    @if($pendidikan_terakhir[$i]==$data->
                                                    data_pribadi->pendidikan_terakhir)
                                                    <option value="{{$pendidikan_terakhir[$i]}}" selected>
                                                        {{$pendidikan_terakhir[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$pendidikan_terakhir[$i]}}">
                                                        {{$pendidikan_terakhir[$i]}}
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
                    <button id="btn-kirimpr" style="float:right"
                        class="btn btn-success notika-btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
<script>
$('#btn-kirimpr').click(function(event) {
    event.preventDefault();;
    var form = $('#form-pribadi'),
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