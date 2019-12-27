<div class="normal-table-list mg-t-30">
    <div class="basic-tb-hd">
        <h2>Daftar Pengajuan</h2>
    </div>
    <div class="col-lg-12 todo-inputbar">
        <div class="form-group todo-flex pull-right">
            <div class="nk-int-st">
                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control"
                    placeholder="Cari...">
            </div>
            <div class="todo-send">
                <button class="btn-primary btn-md btn-block btn notika-add-todo waves-effect" type="button"
                    id="todo-btn-submit">Cari</button>
            </div>
        </div>
        <div>
            <a href="" class="btn btn-default">
                <li class="fa fa-print"></li>
            </a>
            <a href="" class="btn btn-default">
                <li class="fa fa-file-excel-o"></li>
            </a>
            <a href="" class="btn btn-default">
                <li class="fa fa-file-pdf-o"></li>
            </a>
        </div>
    </div>
    <div class="bsc-tbl-hvr">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No Ref. Mitra</th>
                    <th>Nama</th>
                    <th>Nama Perusahaan</th>
                    <th>Tanggal Daftar</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Agunan</th>
                    <th>Lihat Detail</th>
                    <th>Print</th>
                    <th>Cabang</th>
                    <th>User Log.</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dt)
                <tr>
                    <td></td>
                    <td>{{$dt->kode_pengajuan}}</td>
                    <td>{{$dt->nama}}</td>
                    <td>{{$dt->nama_usaha}}</td>
                    <td>{{$dt->tanggal_daftar}}</td>
                    <td>Rp. {{$dt->nilai_pengajuan}}</td>
                    <td><small>{{$dt->status}}</small> </td>
                    <td>
                        @if($dt->nama_tabel_agunan == 'agunan_kendaraan')
                        Kendaraan Dengan No.BPKB {{$dt->no_bpkb}}
                        @elseif($dt->nama_tabel_agunan == 'agunan_sertifikat')
                        Sertifikat Dengan No.SHM {{$dt->no_shm}}
                        @elseif($dt->nama_tabel_agunan == 'agunan_penjamin')
                        penjamin Dengan NIPP {{$dt->nipp}}
                        @elseif($dt->nama_tabel_agunan == 'agunan_sph')
                        SPH Dengan No.SPH {{$dt->no_sph}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('pengajuan.edit', $dt->id)}}" class="btn btn-default"><i
                                class="fa fa-list-alt"></a></i>
                    </td>
                    <td>
                        <a href="#" class="btn btn-default"><i class="fa fa-print"></i></a>
                    </td>
                    <td></td>
                    <td>{{$dt->user_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@if(session('pesan'))
@push('js')
<script>
swal({
    title: "Berhasil Diajukan",
    text: "Menunggu Persetujuan",
    type: "success",
    showCancelButton: false,
    confirmButtonText: "Ok",
});
</script>
@endpush
@endif