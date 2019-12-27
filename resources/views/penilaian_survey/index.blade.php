@extends('templates.index')
@section('konten')
<!-- Main Menu area End-->
<div class="tabs-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">

                    <div class="accordion-area">
                        <div class="accordion-wn-wp">
                            <div class="accordion-hd">
                                <h2>Input Hasil Survey</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="accordion-stn">
                                        <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen"
                                            role="tablist" aria-multiselectable="true">
                                            <form method="POST"
                                                action="{{route('penilaian.update', $data->identitas_c_m->id_penugasan)}}"
                                                id="form-penilaian">
                                                {{csrf_field()}}
                                                {{method_field('put')}}

                                                @include('penilaian_survey.identitas')
                                                @include('penilaian_survey.permohonan')
                                                @include('penilaian_survey.hubungan')
                                                @include('penilaian_survey.legalitas')
                                                @include('penilaian_survey.a_keuangan')
                                                @include('penilaian_survey.kebutuhan_modal')
                                                @include('penilaian_survey.kesimpulan')
                                                @include('penilaian_survey.keputusan')

                                                <button class="btn btn-success notika-btn-success"
                                                    style="margin-top:20px;" id="btn-update-penilaian">Submit</button>
                                            </form>
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
</div>
<!-- Start Footer area-->
@endsection

@push('js')
<script>
$('#btn-update-penilaian').click(function(event) {
    event.preventDefault();;
    var form = $('#form-penilaian'),
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