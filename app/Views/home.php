<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prospera</title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets')?>/dist/img/logo.png" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/css/style.css') ?>">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      color: #333;
    }

    /* Header and Navbar */
    #header {
      background: #2c3e50;
      padding: 10px 0;
    }

    #header .logo a {
      font-size: 28px;
      font-weight: bold;
      color: #fff;
      text-transform: uppercase;
      text-decoration: none;
    }

    #navbar ul {
      list-style: none;
      padding: 0;
    }

    #navbar ul li {
      display: inline-block;
      margin: 0 15px;
    }

    #navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    #navbar ul li a:hover {
      color: #ddd;
    }

    #navbar .getstarted {
      background: #007bff;
      color: #fff;
      padding: 8px 20px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    #navbar .getstarted:hover {
      background: #0056b3;
    }

    #hero {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh; /* menyesuaikan tinggi section jika diperlukan */
  overflow: hidden; /* agar gambar tidak melampaui batas kontainer */
}

#hero .img {
  max-width: 100%;
  height: auto;
}

    #hero h1 {
      font-size: 50px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    #hero p {
      font-size: 18px;
      max-width: 600px;
      margin: 20px auto;
    }

    #hero .hero-img img {
      max-width: 100%;
      border-radius: 10px;
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% {
        transform: translatey(0px);
      }
      50% {
        transform: translatey(-10px);
      }
    }

    /* Sections */
    .section-title {
      text-align: center;
      margin-bottom: 40px;
      color: #444;
    }

    .section-title h2 {
      font-size: 36px;
      font-weight: 700;
    }

    .section-title p {
      font-size: 16px;
      margin: 0;
    }

    .filter {
      /* padding: 60px 0; */
      background: #f8f9fa;
    }

    .form-control {
      border-radius: 0;
      box-shadow: none;
      border: 1px solid #ddd;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 10px 20px;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .select2-container--default .select2-selection--single {
        height: 38px; /* Set the desired height */
        line-height: 36px; /* Center text vertically */
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 36px; /* Center text vertically */
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px; /* Align the dropdown arrow */
    }

    /* Adjust the dropdown menu height */
    .select2-container--default .select2-results--options {
        max-height: 200px; /* Set the maximum height for the dropdown menu */
        overflow-y: auto; /* Enable scrolling if necessary */
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1 class="text-light">
                <a href="<?php echo base_url('/')?>">PROSPERA</a>
            </h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#filter">Filter</a></li>
                <li class="dropdown">
                    <a href="#"><span>Data</span> <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li><a href="#Ketenagakerjaan">Kependudukan & Ketenagakerjaan</a></li>
                        <li><a href="#Perumahan">Perumahan & Lingkungan Hidup</a></li>
                        <li><a href="#Bencana">Bencana Alam</a></li>
                        <li><a href="#Pendidikan">Pendidikan & Kesehatan</a></li>
                        <li><a href="#Agama">Agama</a></li>
                        <li><a href="#Olahraga">Olahraga dan Hiburan</a></li>
                        <li><a href="#Ekonomi">Ekonomi</a></li>
                        <li><a href="#Keamanan">Keamanan</a></li>
                        <li><a href="#Pemerintahan">Pemerintahan</a></li>
                    </ul>
                </li>
                <li><a class="getstarted scrollto" href="/login">Login</a></li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
        </nav>
    </div>
  </header>
  <!-- /.navbar -->

  <!-- Hero Section -->
  <section id="hero" class="d-flex align-items-center">
    <!-- <div class="container"> -->
        <!-- Konten lain seperti teks, jika diperlukan, bisa ditambahkan di sini -->
        <img src="<?php echo base_url('assets')?>/dist/img/PROSPERA.png" class="img" alt="Prospera Image">
    <!-- </div> -->
    </section>

  <!-- End Hero -->

  <main id="main">
    <!-- Filter Section -->
    <section id="filter" class="filter">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Filter</h2>
                <p>Pilih profil potensi pekon yang ingin ditampilkan</p>
            </div>

            <form action="<?php echo base_url('Home/show_data'); ?>" method="get">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="wilayah">Pekon:</label>
                        <select class="form-control" id="wilayah" name="wilayah">
                            <?php echo "<option hidden>--Pilih Pekon--</option>" . PHP_EOL; ?>
                            <?php foreach ($desa as $key => $desa): ?>
                                <option value="<?php echo $desa['kode_desa']; ?>" <?php echo ($wilayah == $desa['kode_desa']) ? 'selected' : ''; ?>>
                                    <?php echo $desa['desa']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tahun">Tahun:</label>
                        <select name="tahun" id="tahun" class="custom-select custom-select-md mb-3">
                            <?php
                            $currentYear = date("Y");
                            for ($i = 2021; $i <= $currentYear; $i++) {
                                $selected = ($i == $tahun) ? 'selected' : '';
                                echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-sm">Tampilkan</button>
                    </div>
                </div>
                <br/>
                
            </form>
            <div class="row">
                    <div class="col-md-12 text-center">
                    <a href="<?= base_url('Home/downloadExcel?wilayah=' . $wilayah . '&tahun=' . $tahun); ?>" class="btn btn-info btn-sm"><i class="fa fa-download"> Download Data</i></a>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- End Filter Section -->

    <section id="Ketenagakerjaan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kependudukan & Ketenagakerjaan </h2>
            </div>
            <div class="section-title">
                    <p>Jumlah Penduduk</p>
                </div>
            <div class="row justify-content-center">
                
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/man.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Laki-laki</a></h4>
                        <h3><?php echo $getlakilakibypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/woman.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Perempuan</a></h4>
                        <h3><?php echo $getprbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/group.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Total Penduduk</a></h4>
                        <h3><?php echo $getpendudukbypekon; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-6 hero-img">
                <img src="<?php echo base_url('assets')?>/dist/img/Farmer-amico.png" class="img-fluid animated bounce" alt="" style="width: 400px; height: auto;">
            </div>

            <div class="col-6 d-flex flex-column justify-content-center">
                <h5>Jenis sub sektor utama sebagian besar penduduk: </h5>
                <h4><b style="color: #444;"><?php echo $getsubsektorbypekon; ?></b></h4>
                <br/>
                <h5>Komoditas utama dari sub sektor utama: </h5>
                <h4><b style="color: #444;"><?php echo $getkomoditasbypekon; ?></b></h4>
            </div>
            </div>

        </div>
    </section>

    <section id="Perumahan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Perumahan dan Lingkungan Hidup</h2>
            </div>

            <div class="icon-box">
              <div class="row">
                <div class="col-4 d-flex flex-column justify-content-center">
                  <h5>Keberadaan Tempat Penampungan Sementara (TPS)</h5> 
                  <h4><b style="color: #444;"><?php echo $gettpsbypekon; ?></b></h4>
                </div>
                <div class="col-4 hero-img">
                  <img src="<?php echo base_url('assets')?>/dist/img/recycling.png" class="img" alt="" style="width: 400px; height: auto;">
                </div>
                <div class="col-4 d-flex flex-column justify-content-center">
                  <h5>Keberadaan sungai, saluran irigasi, danau/waduk/situ/bendungan,<br/>dan embung</h5>
                    <div class="row">
                        <div class="col-6" style="opacity: <?php echo (in_array('2', $getsungaibypekon)) ? '1' : '0.2'; ?>;">
                            <img src="<?php echo base_url('assets')?>/dist/img/icons/river.png" class="img" alt="River icon" style="width: 50px; height: auto;">
                            <p><b style="color: #444;">
                                <?php echo (in_array('2', $getsungaibypekon)) ? 'Ada Sungai' : 'Tidak Ada Sungai'; ?>
                            </b></p>
                        </div>
                        <div class="col-6" style="opacity: <?php echo (in_array('3', $getsungaibypekon)) ? '1' : '0.2'; ?>;">
                            <img src="<?php echo base_url('assets')?>/dist/img/icons/sprinkler.png" class="img" alt="sprinkler icon" style="width: 50px; height: auto;">
                            <p><b style="color: #444;">
                                <?php echo (in_array('3', $getsungaibypekon)) ? 'Ada Saluran irigasi' : 'Tidak Ada Saluran irigasi'; ?>
                            </b></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="opacity: <?php echo (in_array('4', $getsungaibypekon)) ? '1' : '0.2'; ?>;">
                            <img src="<?php echo base_url('assets')?>/dist/img/icons/lake.png" class="img" alt="lake icon" style="width: 50px; height: auto;">
                            <p><b style="color: #444;">
                                <?php echo (in_array('4', $getsungaibypekon)) ? 'Ada Danau/waduk/situ/<br/>bendungan' : 'Tidak Ada Danau/waduk/<br/>situ/bendungan'; ?>
                            </b></p>
                        </div>
                        <div class="col-6" style="opacity: <?php echo (in_array('5', $getsungaibypekon)) ? '1' : '0.2'; ?>;">
                            <img src="<?php echo base_url('assets')?>/dist/img/icons/pond.png" class="img" alt="pond icon" style="width: 50px; height: auto;">
                            <p><b style="color: #444;">
                                <?php echo (in_array('5', $getsungaibypekon)) ? 'Ada Embung' : 'Tidak Ada Embung'; ?>
                            </b></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>

    <section id="Bencana" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Bencana Alam</h2>
            </div>

            <div class="row justify-content-center">
              <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card card-light shadow-sm rounded">
                        <div class="card-header bg-info text-white d-flex justify-content-center align-items-center">
                            <h3 class="card-title mb-0">Kejadian/Bencana Alam Tahun <?php echo $tahun-1 ?></h3>
                        </div>
                        <div class="card-body" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                            <!-- No Data Message -->
                            <div id="no-data-message" style="display: none; text-align: center; width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                <div class="hero-img">
                                    <img src="<?php echo base_url('assets')?>/dist/img/environment.png" class="img" alt="" style="width: 200px; height: auto;">
                                </div>
                                <h5 style="margin-top: 10px;">Tidak ada kejadian bencana.</h5>
                            </div>
                            <!-- Chart Container -->
                            <div class="chart-container" style="position: relative; width: 100%;">
                                <canvas id="bencana" width="400" height="400"></canvas>
                                
                            </div>
                        </div>
                    </div>
              </div>

              <div class="col-12 col-sm-6 col-md-4 mb-4">
                  <div class="card card-light shadow-sm rounded">
                        <div class="card-header bg-info text-white d-flex justify-content-center align-items-center">
                            <h3 class="card-title mb-0">Kejadian/Bencana Alam Tahun <?php echo $tahun ?></h3>
                        </div>
                        <div class="card-body" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                            <!-- No Data Message -->
                            <div id="no-data-message1" style="display: none; text-align: center; width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                <div class="hero-img">
                                    <img src="<?php echo base_url('assets')?>/dist/img/environment.png" class="img" alt="" style="width: 200px; height: auto;">
                                </div>
                                <h5 style="margin-top: 10px;">Tidak ada kejadian bencana.</h5>
                            </div>
                            <!-- Chart Container -->
                            <div class="chart-container1" style="position: relative; width: 100%;">
                                <canvas id="bencana1" width="400" height="400"></canvas>
                            </div>
                        </div>
                  </div>
              </div>

            </div>
        </div>
    </section>

    <section id="Pendidikan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pendidikan dan Kesehatan</h2>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card card-light shadow-sm rounded">
                        <div class="card-header bg-info text-white d-flex justify-content-center align-items-center">
                            <h3 class="card-title mb-0">Keberadaan Sarana Pendidikan</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="pendidikanTable" class="table table-bordered table-hover" style="font-size: 12px;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle">Jenis/Jenjang Pendidikan</th>
                                            <th colspan="2" scope="col" style="text-align: center; vertical-align: middle">Jumlah Lembaga</th>
                                            <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle">Jarak (km)</th>
                                            <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle">Kemudahan untuk mencapai</th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="text-align: center;">Negeri</th>
                                            <th scope="col" style="text-align: center;">Swasta</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button id="downloadPendExcel" class="btn btn-info" style="padding: 5px 10px;font-size: 12px;">Download Table to Excel</button>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card card-light shadow-sm rounded">
                        <div class="card-header bg-info text-white d-flex justify-content-center align-items-center">
                            <h3 class="card-title mb-0">Jumlah Sarana Kesehatan</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="kesehatanTable" class="table table-bordered table-hover" style="font-size: 12px;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" style="text-align: center;">Jenis Sarana Kesehatan</th>
                                            <th scope="col" style="text-align: center;">Jumlah</th>
                                            <th scope="col" style="text-align: center;">Nama Sarana Kesehatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button id="downloadKesehatanExcel" class="btn btn-info" style="padding: 5px 10px;font-size: 12px;">Download Table to Excel</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Agama" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Agama</h2>
                <p>Jumlah Tempat Ibadah</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/mosque (1).png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Masjid</a></h4>
                        <h3><?php echo $getmasjidbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/mosque.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Surau/Langgar/Musala</a></h4>
                        <h3><?php echo $getsuraubypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/church.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Gereja Kristen</a></h4>
                        <h3><?php echo $getkristenbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/katholik.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Gereja Katolik</a></h4>
                        <h3><?php echo $getkatolikbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <img  src="<?php echo base_url('assets')?>/dist/img/icons/chapel.png" alt="" class="p-3" width="50%">
                        </div>
                        <h4 class="title"><a href="">Kapel</a></h4>
                        <h3><?php echo $getkapelbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/pura.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Pura</a></h4>
                        <h3><?php echo $getpurabypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/monastery.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Wihara</a></h4>
                        <h3><?php echo $getwiharabypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/chinese.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Kelenteng</a></h4>
                        <h3><?php echo $getkelentengbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/pagoda.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Balai Basarah</a></h4>
                        <h3><?php echo $getbasarahbypekon; ?></h3>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img  src="<?php echo base_url('assets')?>/dist/img/icons/temple.png" alt="" class="p-3" width="50%"></div>
                        <h4 class="title"><a href="">Lainnya</a></h4>
                        <h3><?php echo $getlainnyabypekon; ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="Olahraga" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Olahraga dan Hiburan</h2>
                <p>Ketersediaan Fasilitas/Lapangan</p>
            </div>
              <!-- <div class="row justify-content-center align-items-center">
                <div class="col-6"> -->
                    <div class="card card-light shadow-sm rounded">
                        <!-- <div class="card-header bg-info text-white d-flex justify-content-center align-items-center">
                            <h3 class="card-title mb-0">Ketersediaan Fasilitas/Lapangan</h3>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="fasilitasTable" class="table table-bordered table-hover" style="font-size: 12px;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" style="text-align: center;">Jenis Olahraga</th>
                                            <th scope="col" style="text-align: center;">Fasilitas/Lapangan Olahraga</th>
                                            <th scope="col" style="text-align: center;">Kelompok Kegiatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sepak Bola</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bola Voli</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bulu Tangkis</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bola Basket</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tenis Lapangan</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tenis Meja</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Futsal</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Renang</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bela Diri (silat, karate, dll)</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Bilyard</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Pusat Kebugaran</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Lainnya</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button id="downloadOlahragaExcel" class="btn btn-info" style="padding: 5px 10px;font-size: 12px;">Download Table to Excel</button>
                            </div>
                        </div>
                    </div>

                <!-- </div> -->

                <!-- <div class="col-6 hero-img d-flex flex-column justify-content-center align-items-center">
                  <img src="<?php echo base_url('assets')?>/dist/img/sport.png" class="img-fluid animated bounce" alt="" style="width: 350px; height: auto;">
                </div>
              </div> -->
        </div>
    </section>

    <section id="Ekonomi" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Ekonomi</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="icon-box">
                        <h5>Jumlah bank yang beroperasi</h5>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; width: 100%; padding-right: 50px;">
                                <canvas id="bank" width="400" height="400"></canvas>
                                <button id="download-bank-chart" class="btn btn-info btn-sm" style="position: absolute; right: 0; top: 10px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Grafik">
                                    <i class="fa fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="icon-box">
                      <h5>Jumlah koperasi yang masih aktif</h5>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; width: 100%; padding-right: 50px;">
                                <canvas id="koperasi"  width="400" height="400"></canvas>
                                <button id="download-koperasi-chart" class="btn btn-info btn-sm" style="position: absolute; right: 0; top: 10px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Grafik">
                                    <i class="fa fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="icon-box">
                        <h5>Jumlah sarana penunjang ekonomi</h5>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; width: 100%; padding-right: 50px;">
                                <canvas id="sarpek" width="400" height="400"></canvas>
                                <button id="download-sarpek-chart" class="btn btn-info btn-sm" style="position: absolute; right: 0; top: 10px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Grafik">
                                    <i class="fa fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="icon-box">
                      <h5>Jumlah sarana dan prasarana ekonomi</h5>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; width: 100%; padding-right: 50px;">
                                <canvas id="sarprase"  width="400" height="400"></canvas>
                                <button id="download-sarprase-chart" class="btn btn-info btn-sm" style="position: absolute; right: 0; top: 10px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Grafik">
                                    <i class="fa fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Keamanan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Keamanan</h2>
            </div>

            <div class="icon-box">
              <div class="row">
                <div class="col-4 d-flex flex-column justify-content-center">
                  <h5>Jumlah anggota linmas/hansip</h5> 
                  <h4><?php echo $gethansipbypekon; ?></h4>
                </div>
                <div class="col-4 hero-img">
                  <img src="<?php echo base_url('assets')?>/dist/img/police.png" class="img" alt="" style="width: 400px; height: auto;">
                </div>
                <div class="col-4 d-flex flex-column justify-content-center">
                  <h5>Keberadaan pos polisi</h5> 
                  <h4><?php echo $getpolisibypekon; ?></h4>
                </div>
              </div>
            </div>
        </div>
    </section>

    <section id="Pemerintahan" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pemerintahan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 d-flex flex-column align-items-center">
                    <div class="icon-box-container d-flex flex-column align-items-center">
                        <div class="section-title">
                            <p>Jumlah aparatur pemerintahan</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 d-flex align-items-stretch" style="width: 100%; max-width: 1000px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Sekretariat Desa/Kelurahan (kaur keuangan, dll)</a></h4>
                                    <h3><?php echo $getaparaturbypekon['count_a']; ?></h3>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-stretch" style="width: 100%; max-width: 1000px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Pelaksana Teknis (kasi kesejahteraan, dll)</a></h4>
                                    <h3><?php echo $getaparaturbypekon['count_b']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 d-flex align-items-stretch" style="width: 100%; max-width: 1000px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Pelaksana Kewilayahan (Kadus, Ketua RT, dll.)</a></h4>
                                    <h3><?php echo $getaparaturbypekon['count_c']; ?></h3>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-stretch" style="width: 100%; max-width: 1000px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Pegawai desa lainnya (hansip, dll)</a></h4>
                                    <h3><?php echo $getaparaturbypekon['count_d']; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column align-items-center">
                    <div class="icon-box-container d-flex flex-column align-items-center">
                        <div class="section-title"><p>Pelaksanaan pemilihan kepala desa</p></div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" style="width: 100%; max-width: 300px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Tahun terakhir pelaksanaan</a></h4>
                                    <h3><?php echo $getthpilkadesbypekon; ?></h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" style="width: 100%; max-width: 300px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Jumlah calon</a></h4>
                                    <h3><?php echo $getcalonpilkadesbypekon; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex align-items-stretch" style="width: 100%; max-width: 1000px;" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box">
                                    <h4 class="title"><a href="">Perolehan suara pemenang</a></h4>
                                    <h3><?php echo $getsuarapilkadesbypekon; ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-6 d-flex flex-column justify-content-center">
                    <img src="<?php echo base_url('assets')?>/dist/img/selecting.png" class="img-fluid animated bounce" alt="" style="width: auto; height: auto;">
                </div> -->
            </div>

        </div>
    </section>

  </main><!-- End #main -->

</div><!-- ./wrapper -->
<footer class="main-footer">
    <strong>&copy; 2024 <a href="http://pringsewukab.bps.go.id/">BPS Kabupaten Pringsewu</a>.</strong>
    <!-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div> -->
</footer>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url('assets')?>/plugins/chart.js/Chart.js"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
        const labels = [
            'Tanah longsor', 'Banjir', 'Banjir bandang', 'Gempa bumi', 
            'Tsunami', 'Gelombang pasang laut', 'Angin puyuh/puting beliung/topan', 
            'Gunung meletus', 'Kebakaran hutan dan lahan', 'Kekeringan (lahan)', 'Abrasi'
        ];
        const backgroundColors = [
            'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
            'rgba(0, 200, 83, 1)', 'rgba(0, 150, 136, 1)', 'rgba(121, 85, 72, 1)',
            'rgba(233, 30, 99, 1)', 'rgba(63, 81, 181, 1)', 'rgba(76, 175, 80, 1)',
            'rgba(156, 39, 176, 1)', 'rgba(244, 67, 54, 1)', 'rgba(33, 150, 243, 1)',
            'rgba(255, 87, 34, 1)', 'rgba(255, 235, 59, 1)', 'rgba(0, 188, 212, 1)',
            'rgba(103, 58, 183, 1)', 'rgba(139, 195, 74, 1)', 'rgba(205, 220, 57, 1)',
            'rgba(255, 152, 0, 1)', 'rgba(96, 125, 139, 1)', 'rgba(255, 193, 7, 1)',
            'rgba(198, 40, 40, 1)', 'rgba(255, 23, 68, 1)', 'rgba(245, 124, 0, 1)',
            'rgba(255, 214, 0, 1)', 'rgba(124, 77, 255, 1)', 'rgba(0, 145, 234, 1)',
            'rgba(0, 191, 165, 1)', 'rgba(0, 105, 92, 1)', 'rgba(239, 83, 80, 1)'
        ];

        const borderColors = [
            'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
            'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)',
            'rgba(199, 199, 199, 1)', 'rgba(83, 102, 255, 1)', 'rgba(51, 204, 204, 1)',
            'rgba(255, 204, 204, 1)', 'rgba(255, 255, 128, 1)', 'rgba(204, 255, 204, 1)',
            'rgba(255, 153, 204, 1)', 'rgba(204, 204, 255, 1)', 'rgba(255, 204, 128, 1)',
            'rgba(255, 128, 128, 1)', 'rgba(128, 255, 128, 1)'
        ];

        const aparatur = <?= json_encode($getaparaturbypekon) ?>;

        // Extract values from the bencana object into an array
        const dataaparatur = [
            Number(aparatur.count_a), Number(aparatur.count_b), Number(aparatur.count_c), Number(aparatur.count_d)
        ];
        
        const bencana = <?= json_encode($getbencanabypekon) ?>;
        const bencanasekarang = <?= json_encode($getbencanasekarangbypekon) ?>;

        // Extract values from the bencana object into an array
        const data = [
            Number(bencana.count_a), Number(bencana.count_b), Number(bencana.count_c), Number(bencana.count_d),
            Number(bencana.count_e), Number(bencana.count_f), Number(bencana.count_g), Number(bencana.count_h),
            Number(bencana.count_i), Number(bencana.count_j), Number(bencana.count_k)
        ];

        const datasekarang = [
            Number(bencanasekarang.count_a), Number(bencanasekarang.count_b), Number(bencanasekarang.count_c), Number(bencanasekarang.count_d),
            Number(bencanasekarang.count_e), Number(bencanasekarang.count_f), Number(bencanasekarang.count_g), Number(bencanasekarang.count_h),
            Number(bencanasekarang.count_i), Number(bencanasekarang.count_j), Number(bencanasekarang.count_k)
        ];

        // Check if all values in the data array are zero
        const allZeros = Array.isArray(data) && data.every(value => value === 0);

        if (allZeros) {
            // Show the no data message and hide the chart container
            document.getElementById('no-data-message').style.display = 'block';
            document.querySelector('.chart-container').style.display = 'none';
        } else {
            // Show the chart container and hide the no data message
            document.getElementById('no-data-message').style.display = 'none';
            document.querySelector('.chart-container').style.display = 'block';

            // Initialize the chart if data is not all zeros
            const ctx_bencana = document.getElementById('bencana').getContext('2d');
            new Chart(ctx_bencana, {
                type: 'bar',
                data: {
                    labels: labels, // Replace with actual labels if needed
                    datasets: [{
                        label: 'Jumlah Kejadian Bencana',
                        data: data,
                        backgroundColor: backgroundColors, // Assuming you have defined backgroundColors
                        borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                        borderWidth: 0
                    }]
                }
            });
        }

        const allZerosNow = Array.isArray(datasekarang) && datasekarang.every(value => value === 0);

        if (allZerosNow) {
            // Show the no data message and hide the chart container
            document.getElementById('no-data-message1').style.display = 'block';
            document.querySelector('.chart-container1').style.display = 'none';
        } else {
            // Show the chart container and hide the no data message
            document.getElementById('no-data-message1').style.display = 'none';
            document.querySelector('.chart-container1').style.display = 'block';

            // Initialize the chart if data is not all zeros
            const ctx_bencana1 = document.getElementById('bencana1').getContext('2d');
            new Chart(ctx_bencana1, {
                type: 'bar',
                data: {
                    labels: labels, // Replace with actual labels if needed
                    datasets: [{
                        label: 'Jumlah Kejadian Bencana',
                        data: datasekarang,
                        backgroundColor: backgroundColors, // Assuming you have defined backgroundColors
                        borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                        borderWidth: 0
                    }]
                }
            });
        }
       
        const bank = <?= json_encode($getbankbypekon) ?>;
        const koperasi = <?= json_encode($getkoperasibypekon) ?>;
        const sarpek = <?= json_encode($getsarpekbypekon) ?>;
        const sarprase = <?= json_encode($getsarprasebypekon) ?>;
        
        // Define labels and data
        
        const label_kes = [
            'Rumah Sakit', 'Rumah Sakit Bersalin', 'Puskesmas dengan rawat inap', 'Puskesmas tanpa rawat inap', 
            'Puskesmas Pembantu', 'Poliklinik/balai pengobatan', 'Tempat praktik dokter', 
            'Rumah Bersalin', 'Tempat praktik bidan', 'Poskesdes (Pos Kesehatan Desa)', 'Polindes (Pondok Bersalin Desa)',
            'Apotek','Toko khusus obat/jamu'
        ];

        const label_pend = [
            'PAUD', 'TK', 'RA/BA', 'SD', 'MI', 'SMP', 'MTs', 'SMA', 'MA', 'SMK',
            'Akademi/Perguruan Tinggi', 'SDLB', 'SMPLB', 'SMALB', 'Pondok Pesantren', 'Madrasah Diniyah', 'Seminari/sejenisnya'
        ];

        const label_bank = [
            'Bank Umum Pemerintah', 'Bank Umum Swasta', 'Bank Perkreditan Rakyat (BPR)'
        ];

        const label_koperasi = [
            'KUD', 'Kopinkra/Usaha mikro', 'KSP/Kospin', 'Koperasi lainnya'
        ];

        const label_sarpek = [
            'Baitul Maal Wa Tamwil (BMT)', 'Anjungan Tunai Mandiri (ATM)', 'Agen Bank', 'Perusahaan Pembiayaan', 'Pedagang Valuta Asing',
            'Pergadaian', 'Agen Tiket/Travel/Biro Perjalanan', 'Bengkel Mobil/Motor', 'Salon Kecantikan'
        ];

        const label_sarprase = [
            'Kelompok pertokoan', 'Pasar dengan bangunan permanen', 'Pasar dengan bangunan semi permanen', 'Pasar tanpa bangunan',
            'Minimarket/swalayan/supermarket', 'Restoran/rumah makan', 'Warung/kedai makanan minuman', 'Hotel',
            'Penginapan: hostel/motel/losmen/wisma', 'Toko/warung kelontong'
        ];

        const label_olahraga = [
            'Sepak bola', 'Bola voli', 'Bulu tangkis', 'Bola basket', 'Tenis lapangan', 'Tenis meja', 'Futsal', 'Renang',
            'Bela diri', 'Bilyard', 'Pusat kebugaran', 'Lainnya'
        ];

        const databank = [
            bank.count_a, bank.count_b, bank.count_c
        ];

        const datakoperasi = [
            koperasi.count_a, koperasi.count_b, koperasi.count_c, koperasi.count_d
        ];

        const datasarpek = [
            sarpek.count_a, sarpek.count_b, sarpek.count_c, sarpek.count_d,
            sarpek.count_e, sarpek.count_f, sarpek.count_g, sarpek.count_h,
            sarpek.count_i
        ];

        const datasarprase = [
            sarprase.count_a, sarprase.count_b, sarprase.count_c, sarprase.count_d,
            sarprase.count_e, sarprase.count_f, sarprase.count_g, sarprase.count_h,
            sarprase.count_i, sarprase.count_j
        ];


        const sarkes = <?= json_encode($getsarkesbypekon) ?>;
        const namasarkes = <?= json_encode($getnamasarkesbypekon) ?>;
        const sarpend = <?= json_encode($getsarpendbypekon) ?>;
        const sarpendswasta = <?= json_encode($getsarpendswastabypekon) ?>;
        const jarak = <?= json_encode($getjaraksarpendbypekon) ?>;
        const kemudahan = <?= json_encode($getkemudahansarpendbypekon) ?>;

        const olahraga = <?= json_encode($getolahragabypekon) ?>;
        const kelolahraga = <?= json_encode($getkomunitasolahragabypekon) ?>;

        const datasarkes = [
            sarkes.count_a, sarkes.count_b, sarkes.count_c, sarkes.count_d,
            sarkes.count_e, sarkes.count_f, sarkes.count_g, sarkes.count_h,
            sarkes.count_i, sarkes.count_j, sarkes.count_k, sarkes.count_l, sarkes.count_m
        ];

        const datanamasarkes = [
            namasarkes.count_b, namasarkes.count_c, namasarkes.count_d,
            namasarkes.count_e, namasarkes.count_f, namasarkes.count_g, namasarkes.count_h,
            namasarkes.count_i, namasarkes.count_j, namasarkes.count_k, namasarkes.count_l, namasarkes.count_m, namasarkes.count_a
        ];

        const datasarpend = [
            sarpend.count_a, sarpend.count_b, sarpend.count_c, sarpend.count_d,
            sarpend.count_e, sarpend.count_f, sarpend.count_g, sarpend.count_h,
            sarpend.count_i, sarpend.count_j, sarpend.count_k, sarpend.count_l,
            sarpend.count_m, sarpend.count_n, sarpend.count_o
        ];

        const datasarpendswasta = [
            sarpendswasta.count_a, sarpendswasta.count_b, sarpendswasta.count_c, sarpendswasta.count_d,
            sarpendswasta.count_e, sarpendswasta.count_f, sarpendswasta.count_g, sarpendswasta.count_h,
            sarpendswasta.count_i, sarpendswasta.count_j, sarpendswasta.count_k, sarpendswasta.count_l,
            sarpendswasta.count_m, sarpendswasta.count_n, sarpendswasta.count_o, sarpendswasta.count_p,
            sarpendswasta.count_q
        ];

        const datajaraksarpend = [
            jarak.count_a, jarak.count_b, jarak.count_c, jarak.count_d,
            jarak.count_e, jarak.count_f, jarak.count_g, jarak.count_h,
            jarak.count_i, jarak.count_j, jarak.count_k
        ];

        const datakemudahansarpend = [
            kemudahan.count_a, kemudahan.count_b, kemudahan.count_c, kemudahan.count_d,
            kemudahan.count_e, kemudahan.count_f, kemudahan.count_g, kemudahan.count_h,
            kemudahan.count_i, kemudahan.count_j, kemudahan.count_k
        ];

        const dataolahraga = [
            olahraga.count_a, olahraga.count_b, olahraga.count_c, olahraga.count_d,
            olahraga.count_e, olahraga.count_f, olahraga.count_g, olahraga.count_h,
            olahraga.count_i, olahraga.count_j, olahraga.count_k, olahraga.count_l
        ];

        const datakelolahraga = [
            kelolahraga.count_a, kelolahraga.count_b, kelolahraga.count_c, kelolahraga.count_d,
            kelolahraga.count_e, kelolahraga.count_f, kelolahraga.count_g, kelolahraga.count_h,
            kelolahraga.count_i, kelolahraga.count_j, kelolahraga.count_k, kelolahraga.count_l
        ];

        const table = document.getElementById('fasilitasTable');
        const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        // Loop through the rows and assign the values from `dataolahraga`
        for (let i = 0; i < rows.length; i++) {
            rows[i].getElementsByTagName('td')[1].innerText = dataolahraga[i];
            rows[i].getElementsByTagName('td')[2].innerText = datakelolahraga[i];
        }

        const tablePend = document.getElementById('pendidikanTable');
        const rowsPend = tablePend.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        for (let i = 0; i < rowsPend.length; i++) {
            rowsPend[i].getElementsByTagName('td')[0].innerText = label_pend[i];
            rowsPend[i].getElementsByTagName('td')[1].innerText = datasarpend[i];
            rowsPend[i].getElementsByTagName('td')[2].innerText = datasarpendswasta[i];
            rowsPend[i].getElementsByTagName('td')[3].innerText = datajaraksarpend[i];
            rowsPend[i].getElementsByTagName('td')[4].innerText = datakemudahansarpend[i];
        }

        const tableKes = document.getElementById('kesehatanTable');
        const rowsKes = tableKes.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        for (let i = 0; i < rowsKes.length; i++) {
            rowsKes[i].getElementsByTagName('td')[0].innerText = label_kes[i];
            rowsKes[i].getElementsByTagName('td')[1].innerText = datasarkes[i];
            rowsKes[i].getElementsByTagName('td')[2].innerText = datanamasarkes[i];
        }

        const ctx_bank = document.getElementById('bank').getContext('2d');
        const bankChart = new Chart(ctx_bank, {
            type: 'bar',
            data: {
                labels: label_bank,
                datasets: [{
                    label: 'Jumlah bank',
                    data: databank,
                    backgroundColor: borderColors,
                    borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Hide grid lines for x-axis
                        },
                        ticks: {
                            display: true // Show x-axis labels
                        }
                    },
                    y: {
                        grid: {
                            display: false // Hide grid lines for y-axis
                        },
                            // Show y-axis labels
                        min: 0,
                        max: 5,
                        ticks: {
                            display: true,
                            stepSize: 1,
                            callback: function(value) {
                                return Number.isInteger(value) ? value : ''; // Display only integer values
                            }
                        }
                    }
                }
            }
        });

        const ctx_koperasi = document.getElementById('koperasi').getContext('2d');
        const koperasiChart = new Chart(ctx_koperasi, {
            type: 'bar',
            data: {
                labels: label_koperasi,
                datasets: [{
                    label: 'Jumlah koperasi',
                    data: datakoperasi,
                    backgroundColor: borderColors,
                    borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Hide grid lines for x-axis
                        },
                        ticks: {
                            display: true // Show x-axis labels
                        }
                    },
                    y: {
                        grid: {
                            display: false // Hide grid lines for y-axis
                        },
                        min: 0,
                        max: 5,
                        ticks: {
                            display: true,
                            stepSize: 1,
                            callback: function(value) {
                                return Number.isInteger(value) ? value : ''; // Display only integer values
                            }
                        }
                    }
                }
            }
        });

        const ctx_sarpek = document.getElementById('sarpek').getContext('2d');
        const sarpekChart = new Chart(ctx_sarpek, {
            type: 'bar',
            data: {
                labels: label_sarpek,
                datasets: [{
                    label: 'Jumlah sarpek',
                    data: datasarpek,
                    backgroundColor: backgroundColors,
                    borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'right',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Hide grid lines for x-axis
                        },
                        ticks: {
                            display: true // Show x-axis labels
                        }
                    },
                    y: {
                        grid: {
                            display: false // Hide grid lines for y-axis
                        },
                        min: 0,
                        max: 10,
                        ticks: {
                            display: true,
                            stepSize: 1,
                            callback: function(value) {
                                return Number.isInteger(value) ? value : ''; // Display only integer values
                            }
                        }
                    }
                }
            }
        });

        const ctx_sarprase = document.getElementById('sarprase').getContext('2d');
        const sarpraseChart = new Chart(ctx_sarprase, {
            type: 'bar',
            data: {
                labels: label_sarprase,
                datasets: [{
                    label: 'Jumlah sarprase',
                    data: datasarprase,
                    backgroundColor: backgroundColors,
                    borderColor: 'rgba(0, 0, 0, 0)', // Transparent border color
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'right',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // Hide grid lines for x-axis
                        },
                        ticks: {
                            display: true // Show x-axis labels
                        }
                    },
                    y: {
                        grid: {
                            display: false // Hide grid lines for y-axis
                        },
                        min: 0,
                        max: 100,
                        ticks: {
                            display: true,
                            stepSize: 1,
                            callback: function(value) {
                                return Number.isInteger(value) ? value : ''; // Display only integer values
                            }
                        }
                    }
                }
            }
        });
       
        document.getElementById('downloadPendExcel').addEventListener('click', function() {
            const rows = document.querySelectorAll('#pendidikanTable tbody tr');
            const data = [];

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowData = [];
                cells.forEach(cell => {
                    rowData.push(cell.innerText);
                });
                data.push(rowData);
            });

            // Send data to the server
            fetch('<?= base_url("Home/downloadPendTableToExcel") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => {
                if (response.ok) {
                    return response.blob();
                }
                throw new Error('Network response was not ok.');
            }).then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = 'data_fasilitas_pendidikan.xlsx';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            }).catch(error => console.error('Error downloading the file:', error));
        });


        document.getElementById('downloadKesehatanExcel').addEventListener('click', function() {
            const rows = document.querySelectorAll('#kesehatanTable tbody tr');
            const data = [];

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowData = [];
                cells.forEach(cell => {
                    rowData.push(cell.innerText);
                });
                data.push(rowData);
            });

            // Send data to the server
            fetch('<?= base_url("Home/downloadTableToExcel") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => {
                if (response.ok) {
                    return response.blob();
                }
                throw new Error('Network response was not ok.');
            }).then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = 'data_sarana_kesehatan.xlsx';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            }).catch(error => console.error('Error downloading the file:', error));
        });

        document.getElementById('downloadOlahragaExcel').addEventListener('click', function() {
            const rows = document.querySelectorAll('#fasilitasTable tbody tr');
            const data = [];

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowData = [];
                cells.forEach(cell => {
                    rowData.push(cell.innerText);
                });
                data.push(rowData);
            });

            // Send data to the server
            fetch('<?= base_url("Home/downloadOlahragaTableToExcel") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => {
                if (response.ok) {
                    return response.blob();
                }
                throw new Error('Network response was not ok.');
            }).then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = 'data_fasilitas_olahraga.xlsx';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            }).catch(error => console.error('Error downloading the file:', error));
        });

        document.getElementById('download-bank-chart').addEventListener('click', function() {
            const link = document.createElement('a');
            link.href = bankChart.toBase64Image();
            link.download = 'bank_chart.png';
            link.click();
        });

        document.getElementById('download-koperasi-chart').addEventListener('click', function() {
            const link = document.createElement('a');
            link.href = koperasiChart.toBase64Image();
            link.download = 'koperasi_chart.png';
            link.click();
        });

        document.getElementById('download-sarpek-chart').addEventListener('click', function() {
            const link = document.createElement('a');
            link.href = sarpekChart.toBase64Image();
            link.download = 'sarana_penunjang_ekonomi_chart.png';
            link.click();
        });

        document.getElementById('download-sarprase-chart').addEventListener('click', function() {
            const link = document.createElement('a');
            link.href = sarpraseChart.toBase64Image();
            link.download = 'sarana_prasarana_ekonomi_chart.png';
            link.click();
        });

        $(document).ready(function() {
            $('#wilayah').select2({
                placeholder: '--Pilih Pekon--', // Placeholder
                allowClear: true,
            });
        });

    </script>

</body>
</html>
