@extends('templates.index')
@section('konten')
<!-- Main Menu area End-->
<div class="tabs-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">
                    <div class="tab-hd">
                        <h2>Pengajuan Mitra Baru</h2>
                    </div>
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs">
                            @if($errors->has('nama_lengkap') || $errors->has('jenis_identitas') ||
                            $errors->has('nomor_identitas') || $errors->has('tempat_lahir') ||
                            $errors->has('tanggal_lahir') || $errors->has('jk') || $errors->has('nama_ibu') ||
                            $errors->has('nilai_pengajuan') || $errors->has('sektor_usaha') ||
                            $errors->has('badan_usaha') || $errors->has('kota') || $errors->has('tanggal_daftar'))
                            <li><a data-toggle="tab" href="#daftar_pengajuan">Daftar Pengajuan</a>
                            </li>
                            @else
                            <li class="active"><a data-toggle="tab" href="#daftar_pengajuan">Daftar Pengajuan</a>
                            </li>
                            @endif

                            @if($errors->has('nama_lengkap') || $errors->has('jenis_identitas') ||
                            $errors->has('nomor_identitas') || $errors->has('tempat_lahir') ||
                            $errors->has('tanggal_lahir') || $errors->has('jk') || $errors->has('nama_ibu') ||
                            $errors->has('nilai_pengajuan') || $errors->has('sektor_usaha') ||
                            $errors->has('badan_usaha') || $errors->has('kota') || $errors->has('tanggal_daftar'))
                            <li class="active"><a data-toggle="tab" href="#tambah_data_pengajuan">Tambah Data
                                    Pengajuan</a></li>
                            @else
                            <li><a data-toggle="tab" href="#tambah_data_pengajuan">Tambah Data Pengajuan</a></li>
                            @endif
                            <li><a data-toggle="tab" href="#pengajuan_dari_mitra">Pengajuan Dari Mitra</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">
                            @if($errors->has('nama_lengkap') || $errors->has('jenis_identitas') ||
                            $errors->has('nomor_identitas') || $errors->has('tempat_lahir') ||
                            $errors->has('tanggal_lahir') || $errors->has('jk') || $errors->has('nama_ibu') ||
                            $errors->has('nilai_pengajuan') || $errors->has('sektor_usaha') ||
                            $errors->has('badan_usaha') || $errors->has('kota') || $errors->has('tanggal_daftar'))
                            <div id="daftar_pengajuan" class="tab-pane fade">
                                @else
                                <div id="daftar_pengajuan" class="tab-pane fade in active">
                                    @endif
                                    <div class="tab-ctn">
                                        @include('pengajuan_mitra.d_pengajuan')
                                    </div>
                                </div>
                                @if($errors->has('nama_lengkap') || $errors->has('jenis_identitas') ||
                                $errors->has('nomor_identitas') || $errors->has('tempat_lahir') ||
                                $errors->has('tanggal_lahir') || $errors->has('jk') || $errors->has('nama_ibu') ||
                                $errors->has('nilai_pengajuan') || $errors->has('sektor_usaha') ||
                                $errors->has('badan_usaha') || $errors->has('kota') || $errors->has('tanggal_daftar'))
                                <div id="tambah_data_pengajuan" class="tab-pane  fade in active">
                                    @else
                                    <div id="tambah_data_pengajuan" class="tab-pane  fade">
                                        @endif
                                        <div class="tab-ctn">
                                            @include('pengajuan_mitra.tambah_pengajuan.index')
                                        </div>
                                    </div>
                                    <div id="pengajuan_dari_mitra" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            @include('pengajuan_mitra.pengajuan_mitra')
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