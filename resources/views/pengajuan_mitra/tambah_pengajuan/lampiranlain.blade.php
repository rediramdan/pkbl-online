<div class="form-element-area">
    <div class="form-example-wrap mg-t-30">
        <form method="POST" action="{{route('dlampiranlain.update', $data->data_lampiran_2->id)}}"
            id="form-lampiranlain" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="">
                <h3>Lampiran Lainnya</h3>
                <hr>
            </div>

            <div class="form-group">
                <input type="hidden" name="id_route" value="{{$data->id}}">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="">Keterangan</label>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
                        <div class="nk-int-st">
                            <input type="text" class="form-control input-sm" name="keteranganlainya"
                                id="keteranganlainya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="">Files</label>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7 col-xs-12">
                        <div class="nk-int-st">
                            <input type="file" class="form-control" name="filelainnya" id="filelainnya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">

                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <button class="btn btn-default">Attach</button>
                        <span class="text-nk-red" style="color:red">Default
                            extensions that can
                            upload: file jpg jpeg gif
                            png doc docx odt rar
                            zip pdf</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <button id="btn1-update-lampiranlain" type="submit" class="btn btn-default">Update</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                    <form action="{{route('pengajuan.status', $data->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <input type="hidden" name="status" value="Menunggu Persetujuan">
                        <button id="btn1-update-lampiranlain" type="submit" class="btn btn-default">Ajukan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
$('#btn-update-lampiranlain').click(function(event) {
    event.preventDefault();
    var form = $('#form-lampiranlain'),
        url = form.attr('action'),
        method = 'PUT';
    form.find('small').remove();

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        contentType: false,
        cache: false,
        processData: false,
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