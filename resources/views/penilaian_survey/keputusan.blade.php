<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two"
                aria-expanded="false">
                Keputusan
            </a>
        </h4>
    </div>
    <div id="accordionGreen-two" class="collapse" role="tabpanel">
        <div class="panel-body">
            <div class="form-group">

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="">Alasan:</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <textarea name="alasan" id="alasan" class="form-control" rows="5"
                                        value="{{$data->kesimpulan_u_s->alasan}}">{{$data->kesimpulan_u_s->alasan}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>