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
        <form action="<?php echo base_url('Data/save10/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">X. PERLINDUNGAN SOSIAL, PEMBANGUNAN DAN PEMBERDAYAAN MASYARAKAT</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Penggunaan Dana Desa pada tahun 2023</h5>
                                <label>a. Bantuan Langsung Tunai (Tiga bulan pertama)</label>
                                <div class="form-group">
                                    <label>Penyaluran dana desa dalam bentuk BLT tiga bulan pertama</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1501AK2" value="1" <?php if ($data['R1501AK2'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1501AK2" value="2" <?php if ($data['R1501AK2'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1501AK3" class="form-group" style="display:none;">
                                    <label for="">Berapa jumlah keluarga</label>
                                    <input type="text" name="R1501AK3" value="<?php echo $data['R1501AK3']?>" class="form-control">
                                </div>
                                <div id="R1501AK4" class="form-group" style="display:none;">
                                    <label for="">Nilai BLT (Tiga bulan pertama) setiap keluarga</label>
                                    <input type="text" name="R1501AK4" value="<?php echo $data['R1501AK4']?>" class="form-control">
                                </div>
                                <div id="R1501AK5" class="form-group" style="display:none;">
                                    <label for="">Persentase jumlah dana terhadap total dana desa yang diterima</label>
                                    <input type="text" name="R1501AK5" value="<?php echo $data['R1501AK5']?>" class="form-control">
                                </div>
                                <hr/>
                                <label>b. Bantuan Langsung Tunai (Tiga bulan kedua)</label>
                                <div class="form-group">
                                    <label>Penyaluran dana desa dalam bentuk BLT tiga bulan kedua</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change2(event)' name="R1501BK2" value="1" <?php if ($data['R1501BK2'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change2(event)' name="R1501BK2" value="2" <?php if ($data['R1501BK2'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1501BK3" class="form-group" style="display:none;">
                                    <label for="">Berapa jumlah keluarga</label>
                                    <input type="text" name="R1501BK3" value="<?php echo $data['R1501BK3']?>" class="form-control">
                                </div>
                                <div id="R1501BK4" class="form-group" style="display:none;">
                                    <label for="">Nilai BLT (Tiga bulan pertama) setiap keluarga</label>
                                    <input type="text" name="R1501BK4" value="<?php echo $data['R1501BK4']?>" class="form-control">
                                </div>
                                <div id="R1501BK5" class="form-group" style="display:none;">
                                    <label for="">Persentase jumlah dana terhadap total dana desa yang diterima</label>
                                    <input type="text" name="R1501BK5" value="<?php echo $data['R1501BK5']?>" class="form-control">
                                </div>
                                <hr/>
                                <label>c. Padat Karya Tunai Desa</label>
                                <div class="form-group">
                                    <label>Penyaluran dana desa dalam bentuk PKTD</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change3(event)' name="R1501CK2" value="1" <?php if ($data['R1501CK2'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change3(event)' name="R1501CK2" value="2" <?php if ($data['R1501CK2'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1501CK3" class="form-group" style="display:none;">
                                    <label for="">Berapa jumlah keluarga</label>
                                    <input type="text" name="R1501CK3" value="<?php echo $data['R1501CK3']?>" class="form-control">
                                </div>
                                <div id="R1501CK4" class="form-group" style="display:none;">
                                    <label for="">Nilai BLT (Tiga bulan pertama) setiap keluarga</label>
                                    <input type="text" name="R1501CK4" value="<?php echo $data['R1501CK4']?>" class="form-control">
                                </div>
                                <div id="R1501CK5" class="form-group" style="display:none;">
                                    <label for="">Persentase jumlah dana terhadap total dana desa yang diterima</label>
                                    <input type="text" name="R1501CK5" value="<?php echo $data['R1501CK5']?>" class="form-control">
                                </div>
                                
                                <hr/>
                                <h5>Keberadaan program kegiatan pembangunan masyarakat</h5>
                                <?php for ($i = 563; $i < 566; $i++): ?>
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
                                <?php endfor ?>
                                <hr/>
                                <h5>Keberadaan program kegiatan pemberdayaan masyarakat</h5>
                                <?php for ($i = 566; $i < 569; $i++): ?>
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
                                <?php endfor ?>
                            </div>
                            <div class="col-md-6">
                                <h5>Paket layanan terkait stunting di desa selama tahun 2023</h5>
                                <div class="form-group">
                                    <label>Kegiatan posyandu</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change4(event)' name="R1502_1" value="1" <?php if ($data['R1502_1'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change4(event)' name="R1502_1" value="2" <?php if ($data['R1502_1'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="posyandu" style="display:none;">
                                    <?php for ($i = 549; $i < 553; $i++): ?>
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
                                    <?php endfor ?>
                                </div>
                                <?php for ($i = 553; $i < 563; $i++): ?>
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
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create9/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function on_change1(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1501AK3').style.display = 'block';
        document.getElementById('R1501AK4').style.display = 'block';
        document.getElementById('R1501AK5').style.display = 'block';
        } else {
        document.getElementById('R1501AK3').style.display = 'none'; // Hide el
        document.getElementById('R1501AK4').style.display = 'none';
        document.getElementById('R1501AK5').style.display = 'none';
        }
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1501BK3').style.display = 'block';
        document.getElementById('R1501BK4').style.display = 'block';
        document.getElementById('R1501BK5').style.display = 'block';
        } else {
        document.getElementById('R1501BK3').style.display = 'none'; // Hide el
        document.getElementById('R1501BK4').style.display = 'none';
        document.getElementById('R1501BK5').style.display = 'none';
        }
    }

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1501CK3').style.display = 'block';
        document.getElementById('R1501CK4').style.display = 'block';
        document.getElementById('R1501CK5').style.display = 'block';
        } else {
        document.getElementById('R1501CK3').style.display = 'none'; // Hide el
        document.getElementById('R1501CK4').style.display = 'none';
        document.getElementById('R1501CK5').style.display = 'none';
        }
    }

    function on_change4(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('posyandu').style.display = 'block';
        } else {
        document.getElementById('posyandu').style.display = 'none'; // Hide el
        }
    }

</script>