@extends('templates.index')
@section('konten')
<div class="tabs-info-area">
    <div class="container">
        <form method="POST" action="{{route('dpengajuan.update', $data->id)}}" id="form-pengajuan">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget-tabs-int">


                        <div class="form-element-area">
                            <div class="form-example-wrap">



                                <div class="form-example-int form-horizental">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                                        <label class="">Tanggal Daftar </label>
                                    </div>
                                    <div id="data_1"
                                        class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                        <div class=" input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input type="text" name="tanggal_daftar" class="form-control"
                                                placeholder="Tanggal Daftar" value="{{$data->tanggal_daftar}}">
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
                                <h3>Ubah Data Pemohon</h3>
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
                                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                    class="form-control input-sm" placeholder="Nama Lengkap"
                                                    value="{{$data->nama}}">
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
                                            <select class="chosen" name="jenis_identitas" id="jenis_identitas"
                                                data-placeholder="--PILIH--">
                                                <?php 
                                            $jenis_identitas = [null,'KTP','SIM'];
                                        ?>
                                                @for($i=0; $i< count($jenis_identitas); $i++)
                                                    @if($jenis_identitas[$i]==$data->jenis_identitas)
                                                    <option value="{{$jenis_identitas[$i]}}" selected>
                                                        {{$jenis_identitas[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$jenis_identitas[$i]}}">
                                                        {{$jenis_identitas[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
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
                                                    placeholder="Nomor Identitas" id="nomor_identitas"
                                                    value="{{$data->no_identitas}}">
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
                                                <input type="text" name="tempat_lahir" class="form-control input-sm"
                                                    placeholder="Tempat Lahir" id="tempat_lahir"
                                                    value="{{$data->tempat_lahir}}">
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
                                            <input type="text" name="tanggal_lahir" class="form-control"
                                                placeholder="Tanggal Lahir" id="tanggal_lahir"
                                                value="{{$data->tanggal_lahir}}">
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
                                                @if($data->jk == 'Laki-laki')

                                                <label><input type="radio" value="Laki-laki" name="jk" class="i-checks"
                                                        checked>
                                                    <i></i>
                                                    Laki_laki</label>
                                            </div>
                                            <div class="fm-checkbox">
                                                <label><input type="radio" value="Perempuan" name="jk" class="i-checks">
                                                    <i></i>
                                                    Perempuan</label>
                                                @else
                                                <label><input type="radio" value="Laki-laki" name="jk" class="i-checks">
                                                    <i></i>
                                                    Laki_laki</label>
                                            </div>
                                            <div class="fm-checkbox">
                                                <label><input type="radio" value="Perempuan" name="jk" class="i-checks"
                                                        checked>
                                                    <i></i>
                                                    Perempuan</label>

                                                @endif
                                            </div>
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
                                                <input type="text" name="nama_ibu" class="form-control input-sm"
                                                    placeholder="Nama Ibu" id="nama_ibu" value="{{$data->nama_ibu}}">
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
                                            <input type="number" name="nilai_pengajuan" class="form-control"
                                                id="nilai_pengajuan" value="{{$data->nilai_pengajuan}}">
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
                                            <select class="chosen" name="sektor_usaha" data-placeholder="--SEMUA--">
                                                <?php 
                                            $sektor_usaha = [null,'Sektor Industri','Sektor Perdagangan', 'Sektor Pertanian', 'Sektor Peternakan', 'Sektor Perikanan', 'Sektor Jasa', "Sektor Lainnya", 'Data Migrasi'];
                                        ?>
                                                @for($i=0; $i< count($sektor_usaha); $i++)
                                                    @if($sektor_usaha[$i]==$data->sektor_usaha)
                                                    <option value="{{$sektor_usaha[$i]}}" selected>
                                                        {{$sektor_usaha[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$sektor_usaha[$i]}}">
                                                        {{$sektor_usaha[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
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
                                            <select class="chosen" name="badan_usaha" data-placeholder="--PILIH--">
                                                <?php 
                                            $badan_usaha = [null,'Perorangan','Badan Usaha/Perusahaan', 'Koperasi', 'Sinergi BUMN'];
                                        ?>
                                                @for($i=0; $i< count($badan_usaha); $i++) @if($badan_usaha[$i]==$data->
                                                    badan_usaha)
                                                    <option value="{{$badan_usaha[$i]}}" selected>
                                                        {{$badan_usaha[$i]}}
                                                    </option>
                                                    @else
                                                    <option value="{{$badan_usaha[$i]}}">
                                                        {{$badan_usaha[$i]}}
                                                    </option>
                                                    @endif
                                                    @endfor
                                            </select>
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
                                            <select class="chosen" name="kota" data-placeholder="--PILIH--">
                                                <?php 
                                            $kota = [null,'Bandung','Jakarta', 'Ciamis'];
                                        ?>
                                                @for($i=0; $i< count($kota); $i++) @if($kota[$i]==$data->kota)
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

                            <div class="form-example-int mg-t-15">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <button type="submit" id="tombol-edit-submit"
                                            class="btn btn-success notika-btn-success">Submit</button>

                                    </div>
                                </div>
                            </div>
        </form>
    </div>
    <hr>
    <div class="row  mg-t-30">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="widget-tabs-int">
                <div class="widget-tabs-list">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#data_pribadi">Data Pribadi</a>
                        </li>
                        <li><a data-toggle="tab" href="#data_usaha">Data Usaha</a>
                        </li>
                        <li><a data-toggle="tab" href="#data_penjamin">Data
                                Ahli Waris</a></li>
                        <li><a data-toggle="tab" href="#data_agunan">Data Agunan</a>
                        </li>
                        <li><a data-toggle="tab" href="#lampiran">Lampiran</a></li>
                        <li><a data-toggle="tab" href="#lampiran_lainnya">Lampiran
                                Lainnya</a></li>
                    </ul>

                    <div class="tab-content tab-custom-st">
                        <div id="data_pribadi" class="tab-pane fade in active">
                            <div class="tab-ctn">

                                @include('pengajuan_mitra.tambah_pengajuan.d_pribadi')

                            </div>
                        </div>

                        <div id="data_usaha" class="tab-pane fade">
                            <div class="tab-ctn">

                                @include('pengajuan_mitra.tambah_pengajuan.d_usaha')




                            </div>
                        </div>
                        <div id="data_agunan" class="tab-pane fade">
                            <div class="tab-ctn">


                                @include('pengajuan_mitra.tambah_pengajuan.d_agunan')

                            </div>
                        </div>
                        <div id="data_penjamin" class="tab-pane fade">
                            <div class="tab-ctn">



                                @include('pengajuan_mitra.tambah_pengajuan.d_penjamin')



                            </div>
                        </div>
                        <div id="lampiran" class="tab-pane fade">
                            <div class="tab-ctn">


                                @include('pengajuan_mitra.tambah_pengajuan.lampiran')

                            </div>
                        </div>
                        <div id="lampiran_lainnya" class="tab-pane fade">
                            <div class="tab-ctn">


                                @include('pengajuan_mitra.tambah_pengajuan.lampiranlain')


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</form>
</div>
</div>

@endsection

@push('js')
<script>
$('#tombol-edit-submit').click(function(event) {
    event.preventDefault();;
    var form = $('#form-pengajuan'),
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