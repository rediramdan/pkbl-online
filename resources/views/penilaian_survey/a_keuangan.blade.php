<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three"
                aria-expanded="false">
                H. Aspek Keuangan
            </a>
        </h4>
    </div>

    <div id="accordionGreen-three" class="collapse" role="tabpanel">
        <div class="panel-body">
            <h4>1. Data
                Keuangan
            </h4>
            <hr>
        </div>
        <div class="panel-body">
            <h5 style="text-decoration: underline;">Aktiva</h5>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">a. Kas dan Bank</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="kasbnk" id="kasbnk" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->kas_bank}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">b. Persediaan Barang</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="persedianb" id="persedianb" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->persediaan_barang}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">c. Piutang Usaha</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="piutang" id="piutang" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->piutang_usaha}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">d. Peralatan Usaha</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="peralatanu" id="peralatanu" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->peralatan_usaha}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">e. Kendaraan</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="kendaraan" id="kendaraan" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->kendaraan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">Total (Rp.)</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="totalk" id="totalk" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->total_aktiva}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <h5 style="text-decoration: underline;">Pasiva</h5>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">a. Hutang Dagang</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="hutangd" id="hutangd" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->hutang_dagang}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">b. Hutang Lain-lain</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="hutangl" id="hutangl" class="form-control input-sm"
                                    placeholder="0" value="{{$data->data_keuangan->hutang_lain}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">c. Modal</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="modal" id="modal" class="form-control input-sm" placeholder="0"
                                    value="{{$data->data_keuangan->modal}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">Total (Rp.)</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="total" id="total" class="form-control input-sm" placeholder="0"
                                    value="{{$data->data_keuangan->total_pasiva}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="panel-body">
            <h4>2.
                Perkembangan
                Hasil Usaha</h4>
            <hr>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Berdasarkan Catatan Pembukuan dan
                                Wawancara,
                                Diperoleh sbb:</label>
                            <div class="nk-int-st">
                                <textarea name="pemasaran" id="pemasaran" class="form-control" rows="5"
                                    placeholder="Isi disini......"
                                    value="{{$data->perkembangan_h_u->catatan_wawancara}}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <h5 style="text-decoration: underline;">d. Beban Rumah
                tangga</h5>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">- Biaya Sewa</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="biayas" id="biayas" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->biaya_sewa}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">- Biaya Makan</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="biayam" id="biayam" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->biaya_makan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">- Biaya Utilitas</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="biayau" id="biayau" class="form-control input-sm"
                                    placeholder="Listrik, Telepon, Air"
                                    value="{{$data->perkembangan_h_u->biaya_utilitas}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">- Biaya Pendidikan</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="biayap" id="biayap" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->biaya_pendidikan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">- Biaya Lain-lain</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="biayal" id="biayal" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->biaya_lain}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">Jumlah Beban Rumah
                                Tangga</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="bebanrt" id="bebanrt" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->jumlah_biaya}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">Pendapatan Lain-lain</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="pendapatanll" id="pendapatanll" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->pendapatan_lain}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-example-int form-horizental mg-t-15">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="">Kemampuan Membayar
                                Angsuran/Bulan</label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input type="text" name="angsuran" id="angsuran" class="form-control input-sm"
                                    placeholder="0" value="{{$data->perkembangan_h_u->angsuran_perbulan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>