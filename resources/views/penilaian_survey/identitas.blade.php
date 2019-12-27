<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordionBlue" href="#accordionBlue-one" aria-expanded="true">
                A. Identitas Calon Mitra Binaan
            </a>
        </h4>
    </div>
    <div id="accordionBlue-one" class="collapse in" role="tabpanel">
        <div class="panel-body">
            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">No. Ref Penilaian : </label>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="norefp" id="norefp" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->no_ref_penilaian}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Tanggal Proposal : </label>
                        </div>
                        <div id="data_1"
                            class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int col-lg-4 col-md-7 col-sm-7 col-xs-12">
                            <div class=" input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input type="text" name="tglp" id="tglp" class="form-control"
                                    placeholder="Tanggal Daftar" value="{{$data->identitas_c_m->tanggal_proposal}}">
                            </div>
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-example-int form-horizental">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 mg-t-15">
                        <label class="hrzn-fm">Tanggal Survey : </label>
                    </div>
                    <div id="data_1"
                        class="form-group nk-datapk-ctm form-elet-mg ic-cmp-int col-lg-4 col-md-7 col-sm-7 col-xs-12">
                        <div class=" input-group date nk-int-st">
                            <span class="input-group-addon"></span>
                            <input type="text" name="tgls" id="tgls" class="form-control" placeholder="Tanggal Daftar"
                                value="{{$data->identitas_c_m->tanggal_survey}}">
                        </div>
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Nama : </label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="nama" id="nama" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->nama_calon}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Alamat Usaha : </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="almtu" id="almtu" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->alamat_usaha}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Kecamatan : </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="kec" id="kec" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->kecamatan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Kelurahan/Desa : </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="kel" id="kel" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->kelurahan}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Bidang Usaha : </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="bidus" id="bidus" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->bidang_usaha}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">No Telepon : </label>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="ntlp" id="ntlp" type="text" class="form-control input-sm"
                                    value="{{$data->identitas_c_m->no_telepon}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <div class="floating-numner form-rlt-mg">
                                <label class="hrzn-fm">Pengalaman Usaha :
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <textarea name="pengus" id="pengus" class="form-control" rows="5" placeholder=""
                                        value="{{$data->identitas_c_m->pengalaman_usaha}}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>