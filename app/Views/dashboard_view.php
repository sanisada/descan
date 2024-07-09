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
                <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-male"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Laki-laki</span>
                                <span class="info-box-number">
                                    <?php echo $laki; ?>
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
                                <span class="info-box-text">Perempuan</span>
                                <span class="info-box-number">
                                    <?php echo $pr; ?>
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
                                    <?php echo $total; ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
                </div>
                <!-- /.card-body -->
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
                            <canvas id="bekerja" width="400" height="400"></canvas>
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
                            <canvas id="listrik" width="400" height="400"></canvas>
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
                            <canvas id="pendidikan" width="400" height="400"></canvas>
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
                            <canvas id="kesehatan" width="400" height="400"></canvas>
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
                            <canvas id="agama" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url('assets')?>/plugins/chart.js/Chart.js"></script>
<script>
    const populationData = <?= json_encode($pekerjaan) ?>;
        // Pisahkan label dan data
        const labels = ['Pertanian, kehutanan, dan perikanan', 'Pertambangan dan penggalian', 'Industri pengolahan', 'Pengadaan listrik, gas, uap/air panas, dan udara dingin', 'Treatment air, treatment air limbah, Treatment dan pemulihan material sampah, dan aktivitas remediasi', 'Konstruksi', 'Perdagangan besar dan eceran, reparasi dan perawatan mobil dan sepeda motor', 'Pengangkutan dan pergudangan', 'Penyediaan akomodasi dan penyediaan makan minum', 'Informasi dan komunikasi', 'Aktivitas keuangan & asuransi', 'Real estat', 'Aktivitas profesional, ilmiah, dan teknis', 'Aktivitas penyewaan dan sewa guna tanpa hak opsi, ketenagakerjaan, agen perjalanan, dan penunjang usaha lainnya', 'Administrasi pemerintahan, pertahanan, dan jaminan sosial wajib', 'Pendidikan', 'Aktivitas kesehatan manusia dan aktivitas sosial', 'Kesenian, hiburan, dan rekreasi', 'Aktivitas jasa lainnya', 'Aktivitas keluarga sebagai pemberi kerja', 'Aktivitas badan internasional dan badan ekstra internasional lainnya'];
        const data = [
            populationData.R403A1,
            populationData.R403A2,
            populationData.R403A3,
            populationData.R403A4,
            populationData.R403A5,
            populationData.R403A6,
            populationData.R403A7,
            populationData.R403A8,
            populationData.R403A9,
            populationData.R403A10,
            populationData.R403A11,
            populationData.R403A12,
            populationData.R403A13,
            populationData.R403A14,
            populationData.R403A15,
            populationData.R403A16,
            populationData.R403A17,
            populationData.R403A18,
            populationData.R403A19,
            populationData.R403A20,
            populationData.R403A21
        ];
        
        const backgroundColors = [
            'rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)', 'rgba(153, 102, 255, 0.5)', 'rgba(255, 159, 64, 0.5)',
            'rgba(75, 192, 192, 0.7)', 'rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)', 'rgba(153, 102, 255, 0.7)', 'rgba(255, 159, 64, 0.7)',
            'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'
        ];

        const borderColors = [
            'rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)',
            'rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)', 'rgba(153, 102, 255, 0.5)', 'rgba(255, 159, 64, 0.5)',
            'rgba(75, 192, 192, 0.7)', 'rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)', 'rgba(153, 102, 255, 0.7)', 'rgba(255, 159, 64, 0.7)',
            'rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'
        ];

        window.onload = function() {
            // Buat chart
            const ctx = document.getElementById('bekerja');
            const populationChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: '',
                        data: data,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }],
                    hoverOffset: 4
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                                display: true,
                                position: 'bottom',
                            }
                        }
                }
            });
        } 
</script>

