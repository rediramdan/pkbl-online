<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionBlue" href="#accordionBlue-opat"
                aria-expanded="false">
                D. Legalitas Calon Mitra
            </a>
        </h4>
    </div>
    <div id="accordionBlue-opat" class="collapse" role="tabpanel">
        <div class="panel-body">
            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">No KTP Calon MB : </label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="nktp" id="nktp" type="text" class="form-control input-sm"
                                    class="form-control input-sm" value="{{$data->legalitas_c_m->no_ktp_calon}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Nomor Kartu Keluarga :
                            </label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="nkk" id="nkk" type="text" class="form-control input-sm"
                                    value="{{$data->legalitas_c_m->no_kk}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Nomor Surat Keterangan Usaha
                                : </label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="nsku" id="nsku" type="text" class="form-control input-sm"
                                    value="{{$data->legalitas_c_m->no_surat_keterangan}}">
                            </div>
                            <div class="nk-int-st">
                                <label class="pull-right">dari
                                    kelurahan/desa</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Nomor Surat Ijin Usaha :
                            </label>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="nsiu" id="nsiu" type="text" class="form-control input-sm"
                                    value="{{$data->legalitas_c_m->no_surat_ijin_usaha}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>