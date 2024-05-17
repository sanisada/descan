<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Dashboard</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Penduduk pada 1 Januari 2024</h3>
                    </div>
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-male"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pria</span>
                                    <span class="info-box-number">
                                        
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-female"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Wanita</span>
                                    <span class="info-box-number">
                                        
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Penduduk</span>
                                    <span class="info-box-number">
                                        
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                    <!-- End Info boxes -->
                </div>
            </div>
    </div>
        

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Penduduk Bekerja per Lapangan Usaha</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="Bpnt" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Keluarga Pengguna Listrik</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="Pkh" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Sarana Pendidikan Menurut Jenjang Pendidikan</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="Bst" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Sarana Kesehatan</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="Blt" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah warga yang memeluk agama/kepercayaan</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="rekomPB" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

    </div>
</section>

<script src="<?php echo base_url('assets')?>/plugins/newChart.js"></script>
