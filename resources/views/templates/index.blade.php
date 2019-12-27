@include('templates.header')
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<!-- Start Header Top Area -->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area rounded bg-light">
                    <h3>
                        <a href="#"><img src="{{url('template')}}/img/logo/logo.png" alt="" width=50 /></a>
                        <span style="color:rgb(67, 134, 221);" class="mt-2">PKBL</span>
                        <span style="color:orange;font-size:16px;">Online</span>
                    </h3>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.html">Dashboard Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active">
                        <a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>
                            Home</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#kemitraan"><i class="fa fa-child"></i>
                            Kemitraan</a>
                    </li>
                    @if(Auth::user()->level == 'a')
                    <li>
                        <a data-toggle="tab" href="#bina"><i class="fa fa-archive"></i> Bina Lingkungan</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#csr"><i class="fa fa-briefcase"></i> CSR</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#transaksi"><i class="fa fa-money"></i> Transaksi</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#rka"><i class="fa fa-th"></i> RKA</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#pkbl"><i class="fa fa-desktop"></i> PKBL</a>
                    </li>
                    @endif
                    <li>
                        <a data-toggle="tab" href="#lainnya"><i class="fa fa-bars"></i>Lainnya</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.html">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div id="kemitraan" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li>
                                <a href="{{route('pengajuan')}}">Pengajuan Mitra Baru</a>
                            </li>
                            <li>
                                <div class="dropdown-trig-an-list">
                                    <div class="dropdown-trig-sgn">
                                        <a class="triger-fadeIn" data-toggle="dropdown">Pra Realisasi</a>
                                        <ul class="dropdown-menu triger-fadeIn-dp">
                                            @if(Auth::user()->level == 'a')
                                            <li><a href="{{route('penugasan')}}">Penugasan Survey</a></li>
                                            @endif
                                            @if(Auth::user()->level == 'p')
                                            <li><a href="{{route('penilaian.daftar')}}">Penilaian</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-trig-an-list">
                                    <div class="dropdown-trig-sgn">
                                        <a class="triger-fadeIn" data-toggle="dropdown">Agunan</a>
                                        <ul class="dropdown-menu triger-fadeIn-dp">
                                            <li><a href="#">Penerimaan Agunan</a></li>
                                            <li><a href="#">Penukaran Agunan</a></li>
                                            <li><a href="#">Penyerahan Agunan Mitra Lunas</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="index.html">Realisasi</a>
                            </li>
                            <li>
                                <a href="index.html">Jadwal Pembayaran</a>
                            </li>
                            <li>
                                <a href="index.html">Mitra Sinergi</a>
                            </li>
                            <li>
                                <a href="index.html">Penugasan Monitoring</a>
                            </li>
                            <li>
                                <a href="index.html">Monitoring</a>
                            </li>

                        </ul>
                    </div>
                    <div id="bina" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Bina Lingkungan</a>
                            </li>

                        </ul>
                    </div>
                    <div id="csr" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">CSR</a>
                            </li>

                        </ul>
                    </div>
                    <div id="transaksi" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Transaksi</a>
                            </li>

                        </ul>
                    </div>
                    <div id="rka" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">RKA</a>
                            </li>

                        </ul>
                    </div>
                    <div id="pkbl" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">PKBL</a>
                            </li>

                        </ul>
                    </div>
                    <div id="lainnya" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Admin</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->

@yield('konten')

<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019
                        <a href="">PKL2019</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.footer')