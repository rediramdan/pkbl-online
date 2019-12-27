<div class="form-element-area">
    <div class="form-example-wrap mg-t-30">
        <div class="">
            <h3>Lampiran</h3>
            <hr>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <form method="POST" action="{{route('dlampiran.update', $data->data_lampiran_1->id)}}"
                    id="form-lampiran" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('put')}}
                    <input type="hidden" name="id_route" value="{{$data->id}}">
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbktp" type="checkbox" class="i-checks"
                                        value="ktp_pemohon">
                                    KTP Pemohon
                                    @if($data->data_lampiran_1->ktp_pemohon != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="ktp_pemohon" id="ktp_pemohon" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbkk" type="checkbox" class="i-checks"
                                        value="kk_pemohon">
                                    Kartu Keluarga
                                    Pemohon
                                    @if($data->data_lampiran_1->kk_pemohon != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="kk_pemohon" id="kk_pemohon" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbktppk" type="checkbox" class="i-checks"
                                        value="ktp_penjamin">
                                    KTP Penerus
                                    Kewajiban
                                    @if($data->data_lampiran_1->ktp_penjamin != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="ktp_penjamin" id="ktp_penjamin" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbkkpk" type="checkbox" class="i-checks"
                                        value="kk_penjamin">
                                    Kartu Keluarga
                                    Penerus
                                    Kewajiban
                                    @if($data->data_lampiran_1->kk_penjamin != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="kk_penjamin" id="kk_penjamin" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbppp" type="checkbox" class="i-checks"
                                        value="poto_pemohon">
                                    Pas photo Pemohon
                                    uk. 4 x 6,
                                    berwarna (2 lembar)
                                    @if($data->data_lampiran_1->poto_pemohon != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="poto_pemohon" id="poto_pemohon" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="">
                                <label>
                                    <input name="lampiran[]" id="cbpppk" type="checkbox" class="i-checks"
                                        value="poto_penjamin">
                                    Pas photo Penerus
                                    Kewajiban
                                    uk. 4 x
                                    6, berwarna (2
                                    lembar)
                                    @if($data->data_lampiran_1->poto_penjamin != null)
                                    (sudah ada)
                                    @endif
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                <input name="poto_penjamin" id="poto_penjamin" type="file" class="">
                                <p class="help-block text-red" style="color:red;">Foto
                                    dengan format
                                    .jpg/.jpeg/.gif/.png
                                    (max size : 2Mb)</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbsku" type="checkbox" class="i-checks" value="sku_desa">
                                Surat Keterangan
                                Usaha dari
                                yang
                                berwenang dari
                                Desa/Kelurahan
                                @if($data->data_lampiran_1->sku_desa != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="sku_desa" id="sku_desa" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbskd" type="checkbox" class="i-checks"
                                    value="skd_tempat_tinggal">
                                Surat Keterangan
                                Domisili
                                Tempat
                                Tinggal dari
                                Desa/Kelurahan
                                @if($data->data_lampiran_1->skd_tempat_tinggal != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="skd_tempat_tinggal" id="skd_tempat_tinggal" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbftu" type="checkbox" class="i-checks"
                                    value="poto_tempat_usaha">
                                Foto Tempat Usaha
                                @if($data->data_lampiran_1->poto_tempat_usaha != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="poto_tempat_usaha" id="poto_tempat_usaha" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbfp" type="checkbox" class="i-checks" value="poto_produk">
                                Foto Produk
                                @if($data->data_lampiran_1->poto_produk != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="poto_produk" id="poto_produk" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbfku" type="checkbox" class="i-checks"
                                    value="poto_kegiatan_usaha">
                                Foto Kegiatan Usaha
                                @if($data->data_lampiran_1->poto_kegiatan_usaha != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="poto_kegiatan_usaha" id="poto_kegiatan_usaha" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbdlu" type="checkbox" class="i-checks"
                                    value="denah_lokasi">
                                Denah Lokasi Usaha
                                @if($data->data_lampiran_1->denah_lokasi != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="denah_lokasi" id="denah_lokasi" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbdtt" type="checkbox" class="i-checks"
                                    value="denah_tempat_tinggal">
                                Denah Tempat Tinggal
                                @if($data->data_lampiran_1->denah_tempat_tinggal != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="denah_tempat_tinggal" id="denah_tempat_tinggal" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbbt" type="checkbox" class="i-checks"
                                    value="buku_tabungan">
                                Buku tabungan
                                @if($data->data_lampiran_1->buku_tabungan != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="buku_tabungan" id="buku_tabungan" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbapu" type="checkbox" class="i-checks"
                                    value="akte_pendiri_usaha">
                                Akte Pendirian Usaha
                                @if($data->data_lampiran_1->akte_pendiri_usaha != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="akte_pendiri_usaha" id="akte_pendiri_usaha" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbsiu" type="checkbox" class="i-checks"
                                    value="surat_ijin_usaha">
                                Surat Izin Usaha
                                yang masih
                                berlaku
                                @if($data->data_lampiran_1->surat_ijin_usaha != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="surat_ijin_usaha" id="surat_ijin_usaha" type="file" class="">
                            <p class="help-block text-red" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="">
                            <label>
                                <input name="lampiran[]" id="cbnpwp" type="checkbox" class="i-checks"
                                    value="no_pokok_wajib_pajak">
                                Nomor Pokok Wajib
                                Pajak
                                (NPWP)
                                @if($data->data_lampiran_1->no_pokok_wajib_pajak != null)
                                (sudah ada)
                                @endif
                            </label>
                        </div>
                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                            <input name="no_pokok_wajib_pajak" id="no_pokok_wajib_pajak" type="file" class="">
                            <p class="help-block" style="color:red;">Foto
                                dengan format
                                .jpg/.jpeg/.gif/.png
                                (max size : 2Mb)</p>
                        </div>
                    </div>
                </div>

                <div class="form-example-int mg-t-15">
                    <div class="row">
                        <div class="">
                        </div>
                        <div class="form-example-int col-lg-12 col-md-7 col-sm-7 col-xs-12 mg-t-15">
                            <button type="submit" class="btn btn-primary notika-btn-primary waves-effect"
                                id="btn1-update-lampiran">Simpan</button>
                            <button class="btn btn-deefault notika-btn-default waves-effect pull-right">Kembali</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if(session('pesan'))
@push('js')
<script>
swal({
    title: "Berhasil Update",
    text: "Data Berhasil disimpan",
    type: "success",
    showCancelButton: false,
    confirmButtonText: "Ok",
});
</script>
@endpush
@endif