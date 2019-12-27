<div class="form-element-area">
    <div class="form-example-wrap mg-t-30">
        <div class="">
            <h3>Data Agunan</h3>
            <hr>
        </div>
        <form method="POST" action="{{route('dagunan.update', $data->d_agunan->id)}}" id="form-agunan">
            {{csrf_field()}}
            <input type="hidden" name="id_kendaraan" value="{{$data->agunan_kendaraan->id}}">
            <input type="hidden" name="id_sertifikat" value="{{$data->agunan_sertifikat->id}}">
            <input type="hidden" name="id_penjamin" value="{{$data->agunan_penjamin->id}}">
            <input type="hidden" name="id_sph" value="{{$data->agunan_sph->id}}">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 form-example-int form-horizental">
                            <label class="">Pilih Jenis
                                Agunan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fm-checkbox">
                            <label class="pilih-agunan" data-pilih="#kendaraan">
                                @if($data->d_agunan->nama_tabel_agunan == 'agunan_kendaraan')
                                <input type="radio" value="agunan_kendaraan" name="nama_tabel" class="i-checks" checked>
                                @else
                                <input type="radio" value="agunan_kendaraan" name="nama_tabel" class="i-checks">
                                @endif
                                Kendaraan
                            </label>
                        </div>
                        <div class="fm-checkbox">
                            <label class="pilih-agunan" data-pilih="#sertifikat">
                                @if($data->d_agunan->nama_tabel_agunan == 'agunan_sertifikat')
                                <input type="radio" value="agunan_sertifikat" name="nama_tabel" class="i-checks"
                                    checked>
                                @else
                                <input type="radio" value="agunan_sertifikat" name="nama_tabel" class="i-checks">
                                @endif
                                Sertifikat
                            </label>
                        </div>
                        <div class="fm-checkbox">
                            <label class="pilih-agunan" data-pilih="#penjamin">
                                @if($data->d_agunan->nama_tabel_agunan == 'agunan_penjamin')
                                <input type="radio" value="agunan_penjamin" name="nama_tabel" class="i-checks" checked>
                                @else
                                <input type="radio" value="agunan_penjamin" name="nama_tabel" class="i-checks">
                                @endif
                                Penjamin
                            </label class="pilih-agunan">
                        </div>
                        <div class="fm-checkbox">
                            <label class="pilih-agunan" data-pilih="#sph">
                                @if($data->d_agunan->nama_tabel_agunan == 'agunan_sph')
                                <input type="radio" value="agunan_sph" name="nama_tabel" class="i-checks" checked>
                                @else
                                <input type="radio" value="agunan_sph" name="nama_tabel" class="i-checks">
                                @endif
                                SPH
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="kendaraan" class="target">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">No.
                                            BPKB</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nobpkb" name="nobpkb" class="form-control input-sm"
                                                placeholder="Masukan no BPKB"
                                                value="{{$data->agunan_kendaraan->no_bpkb}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">No.
                                            Polisi</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-example-int form-example-st">
                                            <div class="form-group">
                                                <div class="nk-int-st">
                                                    <input type="text" id="nopolisi" name="nopolisi"
                                                        class="form-control input-sm"
                                                        value="{{$data->agunan_kendaraan->no_polisi}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-example-int form-example-st">
                                            <div class="form-group">
                                                <div class="nk-int-st">
                                                    <input type="text" id="nopolisi1" name="nopolisi1"
                                                        class="form-control input-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-example-int form-example-st">
                                            <div class="form-group">
                                                <div class="nk-int-st">
                                                    <input type="text" id="nopolisi2" name="nopolisi2"
                                                        class="form-control input-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">No.
                                            Rangka</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="norangka" name="norangka"
                                                class="form-control input-sm" placeholder="Masukan no rangka"
                                                value="{{$data->agunan_kendaraan->no_rangka}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">No.
                                            Mesin</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nomesin" name="nomesin" class="form-control input-sm"
                                                placeholder="Masukan no mesin"
                                                value="{{$data->agunan_kendaraan->no_mesin}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Jenis
                                            Kendaraan</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="jnskendaraan" name="jnskendaraan"
                                                class="form-control input-sm" placeholder="Masukan jenis kendaraan"
                                                value="{{$data->agunan_kendaraan->jenis_kendaraan}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Merk</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="merk" name="merk" class="form-control input-sm"
                                                placeholder="Masukan merk" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Nama
                                            Pemilik</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nmpemilik" name="nmpemilik"
                                                class="form-control input-sm" placeholder="Masukan nama pemilik"
                                                value="{{$data->agunan_kendaraan->nama_pemilik}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn notika-btn-orange waves-effect btn-update-dagunan">Update</button>
            </div>
            <div id="sertifikat" class="target" style="display:none;">
                <div class="form-example-int form-horizental">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">No. SHM</label>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                <div class="nk-int-st">
                                    <input type="text" id="noshm" name="noshm" class="form-control input-sm"
                                        placeholder="" value="{{$data->agunan_sertifikat->no_shm}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-int form-horizental mg-t-15">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">Nama SHM</label>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                <div class="nk-int-st">
                                    <input type="text" id="namashm" name="namashm" class="form-control input-sm"
                                        placeholder="" value="{{$data->agunan_sertifikat->nama_shm}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-int form-horizental mg-t-15">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">Alamat SHM</label>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                <div class="nk-int-st">
                                    <input type="text" id="alamatshm" name="alamatshm" class="form-control input-sm"
                                        placeholder="" value="{{$data->agunan_sertifikat->alamat_shm}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-int form-horizental mg-t-15">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">Luas</label>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                <div class="nk-int-st">
                                    <input type="text" id="luas" name="luas" class="form-control input-sm"
                                        placeholder="" value="{{$data->agunan_sertifikat->luas}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-int form-horizental mg-t-15">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">Tanggal Terbit</label>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-8">
                                <div class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int" id="data_1">
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input id="tglterbit" name="tglterbit" type="text" class="form-control"
                                            placeholder="Masukan tanggal "
                                            value="{{$data->agunan_sertifikat->tgl_terbit}}">
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
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <label class="">Wilayah Penerbit</label>
                            </div>
                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                <div class="nk-int-st">
                                    <input type="text" id="wilayahp" name="wilayahp" class="form-control input-sm"
                                        placeholder="" value="{{$data->agunan_sertifikat->wilayah_p}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn notika-btn-orange waves-effect  btn-update-dagunan">Update</button>
            </div>

            <div id="penjamin" class="target" style="display:none;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Nama</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nama" name="nama" class="form-control input-sm"
                                                placeholder="Masukan nama" value="{{$data->agunan_penjamin->nama}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">NIPP</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nipp" name="nipp" class="form-control input-sm"
                                                placeholder="Masukan NIPP" value="{{$data->agunan_penjamin->nipp}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input type="text" id="tgllahir" name="tgllahir" class="form-control"
                                                    value="{{$data->agunan_penjamin->tanggal_lahir}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Alamat</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="alamat" name="alamat" class="form-control input-sm"
                                                placeholder="Masukan alamat" value="{{$data->agunan_penjamin->alamat}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn notika-btn-orange waves-effect  btn-update-dagunan">Update</button>
            </div>
            <div id="sph" class="target" style="display:none;">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">No. SPH</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="nosph" name="nosph" class="form-control input-sm"
                                                placeholder="Masukan no SPH" value="{{$data->agunan_sph->no_sph}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Nama SPH</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="namasph" name="namasph" class="form-control input-sm"
                                                placeholder="Masukan nama SPH" value="{{$data->agunan_sph->nama_sph}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Alamat SPH</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="alamatsph" name="alamatsph"
                                                class="form-control input-sm" placeholder="Masukan alamat SPH
                                                value=" {{$data->agunan_sph->alamat_sph}}"">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Luas</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="luas" name="luas" class="form-control input-sm"
                                                placeholder="Masukan luas" value="{{$data->agunan_sph->luas_sph}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Tanggal Terbit</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                            <div class="input-group date nk-int-st">
                                                <span class="input-group-addon"></span>
                                                <input type="text" id="tglterbit" name="tglterbit" class="form-control"
                                                    value="{{$data->agunan_sph->tanggal_terbit}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label class="">Wilayah Penerbit</label>
                                    </div>
                                    <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="wilayahp" name="wilayahp"
                                                class="form-control input-sm" placeholder="Masukan wilayah penerbit"
                                                value="{{$data->agunan_sph->wilayah_p}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn notika-btn-orange waves-effect btn-update-dagunan">Update</button>
            </div>
        </form>
    </div>
</div>

@push('js')
<script>
$(document).on('click', '.pilih-agunan', function() {
    var page = $(this).attr("data-pilih");
    $('.target').attr('style', 'display:none');
    $(page).attr('style', 'display:block');
});
</script>
<!-- <script>
$('#benih').on('change', function() {
    var idalamat = $('#benih option:selected').attr('data-alamat');
    alert(idalamat);
    $('#kelurahan').removeAttr('disabled', 'disabled');
});
$(document).on('click', '.cancel-alamat', function() {
    document.getElementById('kelurahan').value = "";
    $('#kelurahan').attr('disabled', 'disabled');
});
</script> -->
@endpush
@push('js')
<script>
$('.btn-update-dagunan').click(function(event) {
    event.preventDefault();;
    var form = $('#form-agunan'),
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