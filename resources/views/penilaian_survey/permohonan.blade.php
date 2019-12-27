<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionBlue" href="#accordionBlue-two"
                aria-expanded="false">
                B. Permohonan yang Diajukan Calon Mitra Binaan
            </a>
        </h4>
    </div>
    <div id="accordionBlue-two" class="collapse" role="tabpanel">
        <div class="panel-body">
            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">No Reff Customer : </label>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="norefc" id="norefc" type="text" class="form-control input-sm"
                                    value="{{$data->permohonan_c_m->no_ref_customer}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-example-int form-horizental">
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <label class="hrzn-fm">Permohonan Kredits : </label>
                        </div>
                        <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                            <div class="nk-int-st">
                                <input name="pk" id="pk" type="text" class="form-control input-sm"
                                    value="{{$data->permohonan_c_m->permohonan_kredit}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>