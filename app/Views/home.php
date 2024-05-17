<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prospera</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
  <!-- Template -->
  <link rel="stylesheet" href="assets/template/css/style.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light">
                <a href="<?php echo base_url('/')?>">
                    <small>PROSPERA</small>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li class="dropdown"><a href="#"><span>Kependudukan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#Demografi">Demografi Penduduk</a></li>
                        <li><a href="#Pendidikan">Pendidikan</a></li>
                        <li><a href="#Pekerjaan">Pekerjaan</a></li>
                        <li><a href="#Kelompok">Kelompok Umur</a></li>
                        <li><a href="#Agama">Agama</a></li>
                        <li><a href="#Dusun">Dusun</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                <li><a class="getstarted scrollto" href="/login">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
  <!-- /.navbar -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Prospera</h1>
                <p style="text-align: justify;">
                    Sistem Prospera merupakan suatu sistem yang mengumpulkan dan menyajikan beragam informasi, baik yang bersifat potensi yang dimiliki desa/kelurahan maupun informasi terkait kerawanan atau tantangan yang dihadapi desa/kelurahan.</p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?php echo base_url('assets')?>/dist/img/20944100.png" class="img-fluid animated" alt="">
            </div>
        </div>

    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img pb-3">
                <img src="<?php echo base_url('assets')?>/dist/img/Artboard.png" style="width: 300px !important;" alt="" data-aos="zoom-in">
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center">
                    <p style="text-align: justify;">Informasi terkait potensi desa/kelurahan meliputi : ketenagakerjaan, pendidikan, kesehatan, sosial budaya, olahraga dan hiburan, angkutan, komunikasi dan informasi, ekonomi, keamanan, pembangunan dan pemberdayaan masyarakat desa/kelurahan. Informasi terkait kerawanan atau tantangan meliputi bencana alam, pencemaran lingkungan, permasalahan sosial dan kesehatan di masyarakat, dan gangguan keamanan yang terjadi di desa/kelurahan.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Kependudukan ======= -->

    <!-- demo grafipenduduk -->
    <section id="Demografi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Demografi Penduduk </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/laki@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Laki-laki</a></h4>
                        <p class="description">Jumlah laki-laki yang berada di   adalah <b> ($sql_pria); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/perempuan@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Perempuan</a></h4>
                        <p class="description">Jumlah perempuan yang berada di   adalah <b> ($sql_wanita); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/total@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Total</a></h4>
                        <p class="description">Jumlah total laki-laki dan perempuan yang berada di   adalah <b> ($sql_total); ?></b> Jiwa</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- akhir Demografi Penduduk -->

    <!-- Pendidikan -->
    <section id="Pendidikan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Pendidikan</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/belumsekolah@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Belum Sekolah</a></h4>
                        <p class="description">Jumlah penduduk yang belum sekolah di   adalah <b> ($sql_belum_sekolah); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/putussekolah@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Tidak Tamat SD</a></h4>
                        <p class="description">Jumlah penduduk yang tidak tamat SD di   adalah <b> ($sql_tidak_tamat_sd); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/sd_1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Tamat SD/Sederajat</a></h4>
                        <p class="description">Jumlah penduduk yang tamat SD/Sederajat di   adalah <b> ($sql_sd); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/smp@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">SLTP/Sederajat</a></h4>
                        <p class="description">Jumlah penduduk yang tamat SLTP/Sederajat di Desa Butu adalah <b> ($sql_smp); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/sma@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">SLTA/Sederajat</a></h4>
                        <p class="description">Jumlah penduduk yang tamat SLTA/Sederajat di   adalah <b> ($sql_sma); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/study/d3@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Diploma 1-3</a></h4>
                        <p class="description">Jumlah penduduk yang Diploma 1-3 di   adalah <b> ($sql_diploma); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/study/s1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Strata 1</a></h4>
                        <p class="description">Jumlah penduduk yang Strata 1 di   adalah <b> ($sql_s1); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/study/s2@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Strata 2</a></h4>
                        <p class="description">Jumlah penduduk yang Strata 2 di   adalah <b> ($sql_s2); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/study/s3@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Strata 3</a></h4>
                        <p class="description">Jumlah penduduk yang Strata di   adalah <b> ($sql_s3); ?></b> Jiwa</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Akhir pendidikan -->



    <!-- Pekerjaan -->

    <section id="Pekerjaan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Pekerjaan</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/belumberkerja@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Belum/Tidak Berkerja</a></h4>
                        <p class="description">Jumlah penduduk yang belum/tidak berkerja di   adalah <b> ($sql_blmbekerja); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/petani.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Petani/Pekebun</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Petani/Pekebun di   adalah <b> ($sql_petani); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/buruh_tani.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Buruh Tani</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Buruh Tani di   adalah <b> ($sql_buruh_tani); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/buruh_kebun.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Buruh Perkebunan</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Buruh Perkebunan di   adalah <b> ($sql_buruh_kebun); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/buruh_bangunan.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Buruh Bangunan</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Buruh Bangunan di   adalah <b> ($sql_buruh_bangunan); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/nelayan.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Nelayan</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Nelayan di   adalah <b> ($sql_nelayan); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/pedagang.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Pedagang Kecil</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Pedagang di   adalah <b> ($sql_pedagang_kecil); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/pedagang.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Pedagang Besar</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Pedagang di   adalah <b> ($sql_pedagang_besar); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/industry.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Industri</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Industri di   adalah <b> ($sql_industri); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/guru.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Guru</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Guru di   adalah <b> ($sql_guru); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/pns.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">PNS</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai PNS di   adalah <b> ($sql_pns); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/pensiunan.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Pensiunan</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Pensiunan di   adalah <b> ($sql_pensiun); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/perangkat_desa.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">Perangkat Desa</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai Perangkat Desa di   adalah <b> ($sql_perdesa); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/job/TKI.png" alt="" class="mt-3 mb-4" width="50%"></div>
                        <h4 class="title"><a href="">TKI</a></h4>
                        <p class="description">Jumlah penduduk yang berkerja sebagai TKI di   adalah <b> ($sql_tki); ?></b> Jiwa</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Akhir Pekerjaan -->


    <!-- Kelompok umur -->

    <section id="Kelompok" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Kelompok Umur</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/bayi_1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Bayi</a></h4>
                        <p class="description">Jumlah bayi yang berada di   adalah <b> ($sql_umur_bayi); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/anak@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Anak-anak</a></h4>
                        <p class="description">Jumlah anak-anak yang berada di   adalah <b> ($sql_umur_anak); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/remaja_1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Remaja</a></h4>
                        <p class="description">Jumlah remaja yang berada di   adalah <b> ($sql_umur_remaja); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/dewasa_1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Dewasa</a></h4>
                        <p class="description">Jumlah orang dewasa yang berada adi   adalah <b> ($sql_umur_dewasa); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url('assets')?>/dist/img/4x/orang tua_1@4x-8.png" alt=""></div>
                        <h4 class="title"><a href="">Lansia</a></h4>
                        <p class="description">Jumlah orang tua yang berada di   adalah <b> ($sql_umur_lansia); ?></b> Jiwa</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end kelopok umur   -->


    <!-- Agama -->
    <section id="Agama" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Agama</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/islam.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Islam</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Islam di   adalah <b> ($sql_islam); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/christian.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Kristen</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Kristen di   adalah <b> ($sql_kristen); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/christian.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Katolik</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Kristen di   adalah <b> ($sql_katolik); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/buddhism.png" alt="" class="p-3" width="50%">
                        </div>
                        <h4 class="title"><a href="">Budha</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Kristen di   adalah <b> ($sql_budha); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/hinduism.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Hindu</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Kristen di   adalah <b> ($sql_hindu); ?></b> Jiwa</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/religion/confucianism.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Khonghucu</a></h4>
                        <p class="description">Jumlah orang yang memeluk agama Kristen di   adalah <b> ($sql_khonghucu); ?></b> Jiwa</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end agama -->


    <!-- Dusun -->

    <section id="Dusun" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Infografis Kependudukan</h2>
                <p>Dusun</p>
            </div>

            <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/4x/dusun_1@4x-8.png" alt=""></div>
                            <h4 class="title"><a href="">dusun</a></h4>
                            <p class="description">
                                Jumlah penduduk yang berada di dusun di   adalah
                                <b>
                                </b>
                                Jiwa
                            </p>
                        </div>
                    </div>
            </div>

        </div>
    </section>

    <!-- end dusun -->

    <!-- End Kependudukan -->


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hubungi Kami</h2>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info">
                                <div class="address">
                                    <i class="fa fa-map-pin"></i>
                                    <h4>Lokasi:</h4>
                                    <p>Jln, contoh, Kabupaten contoh, contoh 96264</p>
                                </div>

                                <div class="email">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>desacantik1810@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-8">
                            <div class="info">
                                <iframe src="" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

<footer class="main-footer">
    <strong>&copy; 2024 <a href="http://pringsewukab.bps.go.id/">BPS Kabupaten Pringsewu</a>.</strong>
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>

<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script> -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script  src="<?php echo base_url('assets')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script  src="<?php echo base_url('assets')?>/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
</body>
</html>
