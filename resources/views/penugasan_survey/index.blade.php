@extends('templates.index')
@section('konten')
<!-- Main Menu area End-->
<div class="tabs-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">
                    <div class="">
                        <h3>Penugasan Survey</h3>
                    </div>
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#penugasan_survey">Penugasan Survey</a>
                            </li>
                            <li><a data-toggle="tab" href="#d_penugasan_survey">Daftar Penugasan Surve</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            <div id="penugasan_survey" class="tab-pane fade in active">
                                <div class="tab-ctn">
                                    @include('penugasan_survey.penugasan')
                                </div>
                            </div>
                            <div id="d_penugasan_survey" class="tab-pane fade">
                                <div class="tab-ctn">
                                    @include('penugasan_survey.d_penugasan')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Footer area-->
@endsection