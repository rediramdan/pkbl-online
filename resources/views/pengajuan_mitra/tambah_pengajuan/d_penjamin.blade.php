<div class="form-element-area">
    <div class="form-example-wrap mg-t-30">
        <form method="POST" action="{{route('dpenjamin.update', $data->data_penerus_kewajiban_kr->id)}}"
            id="form-penjamin">
            {{csrf_field()}}
            <input type="hidden" name="id_pk" value="{{$data->data_penerus_kewajiban->id}}">
            <div class="">
                <h3>Data Ahli Waris</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h5>Penerus Kewajiban (Suami/Istri/Orang
                            Tua)</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Nama
                                                Lengkap</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="text" id="pknama" name="pknama"
                                                    class="form-control input-sm" placeholder="Masukan nama lengkap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Hubungan
                                                Keluarga</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select name="pkhubungankeluarga" id="pkhubungankeluarga" class="chosen"
                                                    data-placeholder="--PILIH--">
                                                    <?php 
                                            $hubungan_keluarga = [null,'OM OM','Ayah'];
                                        ?>
                                                    @for($i=0; $i< count($hubungan_keluarga); $i++)
                                                        @if($hubungan_keluarga[$i]==$data->
                                                        data_penerus_kewajiban->hubungan_keluarga)
                                                        <option value="{{$hubungan_keluarga[$i]}}" selected>
                                                            {{$hubungan_keluarga[$i]}}
                                                        </option>
                                                        @else
                                                        <option value="{{$hubungan_keluarga[$i]}}">
                                                            {{$hubungan_keluarga[$i]}}
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="pkpekerjaan" name="pkpekerjaan" type="text"
                                                    class="form-control input-sm" placeholder="Masukan pekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Alamat
                                                Rumah</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="pkalamatrumah" name="pkalamatrumah" type="text"
                                                    class="form-control input-sm" placeholder="Masukan alamat rumah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="fm-checkbox">
                                <label><input id="pkalamatp" name="pkalamatp" type="checkbox" class="i-checks">Alamat
                                    penjamin sama dengan
                                    alamat tempat
                                    tinggal</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kota</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="pkkota" name="pkkota" class="chosen"
                                                    data-placeholder="--PILIH--">
                                                    <?php 
                                            $kota = [null,'Ciamis','Kuningan'];
                                        ?>
                                                    @for($i=0; $i< count($kota); $i++) @if($kota[$i]==$data->
                                                        data_penerus_kewajiban->kota)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kecamatan</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="pkkecamatan" name="pkkecamatan" class="chosen"
                                                    data-placeholder="Choose a Country...">
                                                    <?php 
                                            $kecamatan = [null,'kawali','panjalu'];
                                        ?>
                                                    @for($i=0; $i< count($kecamatan); $i++) @if($kecamatan[$i]==$data->
                                                        data_penerus_kewajiban->kecamatan)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kecamatan
                                                Lainnya</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="pkkecamatanl" name="pkkecamatanl" type="text"
                                                    class="form-control input-sm"
                                                    placeholder="Masukan kecamatan lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kelurahan/Desa</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="pkdesa" name="pkdesa" class="chosen"
                                                    data-placeholder="Choose a Country...">
                                                    <?php 
                                            $kelurahan = [null,'karangpawitan','ununeun'];
                                        ?>
                                                    @for($i=0; $i< count($kelurahan); $i++) @if($kelurahan[$i]==$data->
                                                        data_penerus_kewajiban->kelurahan)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kelurahan
                                                Lainnya</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="pkkelurahanl" name="pkkelurahanl" type="text"
                                                    class="form-control input-sm"
                                                    placeholder="Masukan kelurahan lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">No
                                                Telp/HP</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="pknohp" name="pknohp" type="text"
                                                    class="form-control input-sm" placeholder="Masukan no telp/HP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <h5>Keluarga Tidak Satu Rumah Yang Dapat
                            Dihubungi</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Nama
                                                Lengkap</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktnama" name="ktnama" type="text"
                                                    class="form-control input-sm" placeholder="Masukan nama lengkap">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Hubungan
                                                Dengan
                                                Pemohon</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="kthubpe" name="kthubpe" type="text"
                                                    class="form-control input-sm"
                                                    placeholder="Masukan hubungan dengan pemohon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Pekerjaan</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktpekerjaan" name="ktpekerjaan" type="text"
                                                    class="form-control input-sm" placeholder="Masukan pekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Alamat
                                                Rumah</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktalamat" name="ktalamat" type="text"
                                                    class="form-control input-sm" placeholder="Masukan alamat rumah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kota</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="ktkota" name="ktkota" class="chosen"
                                                    data-placeholder="Choose a Country...">
                                                    <?php 
                                            $kota = [null,'ciamis','kuningan'];
                                        ?>
                                                    @for($i=0; $i< count($kota); $i++) @if($kota[$i]==$data->
                                                        data_penerus_kewajiban->kota)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kecamatan</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="ktkecamatan" name="ktkecamatan" class="chosen"
                                                    data-placeholder="Choose a Country...">
                                                    <?php 
                                            $kecamatan = [null,'kawali','panjalu'];
                                        ?>
                                                    @for($i=0; $i< count($kecamatan); $i++) @if($kecamatan[$i]==$data->
                                                        data_penerus_kewajiban->kecamatan)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kecamatan
                                                Lainnya</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktkecamatanl" name="ktkecamatanl" type="text"
                                                    class="form-control input-sm"
                                                    placeholder="Masukan kecamatan lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kelurahan/Desa</label>
                                        </div>
                                        <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select id="ktdesa" name="ktdesa" class="chosen"
                                                    data-placeholder="Choose a Country...">
                                                    <?php 
                                            $kelurahan = [null,'karangpawitan','winduraja'];
                                        ?>
                                                    @for($i=0; $i< count($kelurahan); $i++) @if($kelurahan[$i]==$data->
                                                        data_penerus_kewajiban->kelurahan)
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">Kelurahan
                                                Lainnya</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktkeluahanl" name="ktkelurahanl" type="text"
                                                    class="form-control input-sm"
                                                    placeholder="Masukan kelurahan lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                            <label class="">No
                                                Telp/HP</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input id="ktnohp" name="ktnohp" type="text"
                                                    class="form-control input-sm" placeholder="Masukan no telp/HP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btn-update-dtpenjamin" class="btn notika-btn-orange waves-effect">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
<script>
$('#btn-update-dtpenjamin').click(function(event) {
    event.preventDefault();;
    var form = $('#form-penjamin'),
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
                        .append('<small id="small" style="color:red">' + value +
                            '</small>');
                });
            }
        }
    });


});
</script>
@endpush