<div class="normal-table-list mg-t-15">
    <div class="basic-tb-hd">
        <h4>Penugasan Survey</h4>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <div class="nk-int-st">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>





        <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12 mg-l-15">
            <label>Kota / <label>Kabupaten</label> </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" data-placeholder="Choose a Country...">
                    <option value="United States">Kabupaten</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>
        </div>
        <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
            <label class="">Status Survey</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" data-placeholder="Choose a Country...">
                    <option value="United States">Status</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Filter</button>
        <button type="submit" class="btn btn-default">Reset</button>

    </div>
</div>
<hr>
<form action="{{route('penugasan.tambah')}}" method="POST">
    {{csrf_field()}}
    <div class="normal-table-list mg-t-30">
        <div class="bsc-tbl-hvr">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="i-checks"></th>
                        <th>No Ref. Customer</th>
                        <th>Nama</th>
                        <th>Nama Perusahaan</th>
                        <th>Tanggal Daftar</th>
                        <th>Nilai</th>
                        <th>Kota/Kabupaten</th>
                        <th>Cabang</th>
                        <th>Petugas Survey</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                    <tr>
                        <td><input type="checkbox" class="i-checks" name="id_pengajuan[]" value="{{$dt->id}}"></td>
                        <td>{{$dt->kode_pengajuan}}</td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->nama_usaha}}</td>
                        <td>{{$dt->tanggal_daftar}}</td>
                        <td>Rp. {{$dt->nilai_pengajuan}}</td>
                        <td>
                            {{$dt->kota}}
                        </td>
                        <td></td>
                        <td>{{$dt->user_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="normal-table-list mg-t-15"><br>
        <div class="row">
            <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                <label class="">Petugas</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" name="petugas" data-placeholder="Choose a Country...">
                        @foreach($data->petugas as $petugas)
                        <option value="{{$petugas->id}}">{{$petugas->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-1">
                <label for="">Keterangan</label>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <div class="nk-int-st">
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <label for="">Tanggal Penugasan</label>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                    <div class="input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" name="tanggal_penugasan">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Tugaskan</button>
        </div>
    </div>
</form>

@if(session('pesan'))
@push('js')
<script>
swal({
    title: "Berhasil Ditugaskan",
    text: "Data Berhasil disimpan",
    type: "success",
    showCancelButton: false,
    confirmButtonText: "Ok",
});
</script>
@endpush
@endif