<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tambah Data Potensi Desa Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_podes">Data Potensi Desa</a></li>
                    <li class="breadcrumb-item active">Tambah Data Potensi Desa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <form action="<?php echo base_url('Data/save5/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VI. PENDIDIKAN DAN KESEHATAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Keberadaan sarana pendidikan menurut jenjang pendidikan di desa/kelurahan</h5>
                                </div>

                                <hr/>
                                <?php for ($i = 256; $i < 259; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor?>
                                <hr/>
                                <h5>Keberadaan sarana/prasarana keterampilan di desa/kelurahan, sebutkan namanya</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 259; $i < 263; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 263; $i < 266; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Keberadaan sarana kesehatan di desa/kelurahan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 266; $i < 273; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 273; $i < 279; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Jumlah Upaya Kesehatan Bersumberdaya Masyarakat (UKBM) selama <b>setahun terakhir</b></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 279; $i < 282; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 282; $i < 284; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Tenaga kesehatan yang tinggal/menetap di desa/kelurahan</h5>
                                    <div class="row">
                                        <?php for ($i = 284; $i < 294; $i += 2): ?>
                                            <div class="col-md-12 input-pair">
                                                <div class="form-group">
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="input-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkValue(<?php echo $i ?>)">
                                                </div>
                                                <div class="form-group" id="right-input-<?php echo $i + 1 ?>" style="display: none;">
                                                    <label for=""><?php echo $ques[$i + 1]['ques_label'] ?></label>
                                                    <input type="text" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <?php endfor ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Keberadaan Bidan Di Desa (BDD)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="1" <?php if ($data['R707'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="3" <?php if ($data['R707'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php for ($i = 295; $i < 298; $i++): ?>
                                    <div class="form-group">
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    </div>
                                    <?php endfor?>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir</h5>
                                </div>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create4/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>

<script>
    function checkValue(index) {
        // Ambil nilai dari input kiri
        var leftInput = document.getElementById('input-' + index).value;

        // Ambil elemen input kanan
        var rightInput = document.getElementById('right-input-' + (index + 1));

        // Jika nilai lebih besar dari 1, tampilkan input kanan, jika tidak, sembunyikan
        if (leftInput > 0) {
            rightInput.style.display = 'block';
        } else {
            rightInput.style.display = 'none';
        }
    }

    // Jalankan fungsi checkValue pada awal saat halaman dimuat untuk memastikan kondisi awal
    <?php for ($i = 284; $i < 294; $i += 2): ?>
        checkValue(<?php echo $i ?>);
    <?php endfor ?>
</script>

<style>
    .input-pair {
        display: flex;
        align-items: center;
        gap: 20px; /* Adjust the gap between left and right inputs as needed */
    }
    .input-pair .form-group {
        flex: 1;
    }
</style>