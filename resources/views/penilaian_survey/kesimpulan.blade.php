<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="false">
                M. Kesimpulan, Usul & Saran
            </a>
        </h4>
    </div>
    <div id="accordionGreen-one" class="collapse" role="tabpanel">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Jenis
                                        Pinjaman</label>
                                </div>
                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-12">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select name="jnsp" id="jnsp" class="chosen"
                                            data-placeholder="Choose a Country...">
                                            <option value="United States">
                                                United
                                                States</option>
                                            <option value="United Kingdom">
                                                United
                                                Kingdom</option>
                                            <option value="Afghanistan">
                                                Afghanistan
                                            </option>
                                            <option value="Aland Islands">
                                                Aland
                                                Islands</option>
                                            <option value="Albania">
                                                Albania</option>
                                            <option value="Algeria">
                                                Algeria</option>
                                            <option value="American Samoa">
                                                American
                                                Samoa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Kegunaan</label>
                                </div>
                                <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input name="kegunaan" id="kegunaan" type="text" class="form-control input-sm"
                                            value="{{$data->kesimpulan_u_s->kegunaan}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Jasa
                                        Administrasi</label>
                                </div>
                                <div class="col-lg-9 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input name="jsa" id="jsa" type="text" class="form-control input-sm"
                                            value="{{$data->kesimpulan_u_s->jasa_administrasi}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="">Jenis Perhitungan
                                        Jasa</label>
                                </div>
                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-12">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select name="jpj" id="jpj" class="chosen"
                                            data-placeholder="Choose a Country...">
                                            <option value="United States">
                                                United
                                                States</option>
                                            <option value="United Kingdom">
                                                United
                                                Kingdom</option>
                                            <option value="Afghanistan">
                                                Afghanistan
                                            </option>
                                            <option value="Aland Islands">
                                                Aland
                                                Islands</option>
                                            <option value="Albania">
                                                Albania</option>
                                            <option value="Algeria">
                                                Algeria</option>
                                            <option value="American Samoa">
                                                American
                                                Samoa</option>
                                        </select>
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