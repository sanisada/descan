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
        <form action="<?php echo base_url('Data/save9/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">IX. KEUANGAN DAN ASET DESA</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Kepemilikan badan usaha dan aset desa</h5>
                                <div class="form-group">
                                    <label>Jumlah unit usaha BUMDes</label>
                                    <input type="text" name="<?php echo $data['R1403A']?>" value="<?php echo $data['R1403A']?>" class="form-control">
                                </div>
                                <?php for ($i = 518; $i < 526; $i++): ?>
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
                                <?php for ($i = 526; $i < 528; $i++): ?>
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
                                <div class="form-group">
                                    <label>Jumlah peraturan desa tahun 2023</label>
                                    <input type="text" name="<?php echo $data['R1404C']?>" value="<?php echo $data['R1404C']?>" class="form-control">
                                </div>
                                <?php for ($i = 530; $i < 532; $i++): ?>
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
                                <div class="form-group">
                                    <label>Keberadaan pendamping lokal desa</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R1406" value="1" <?php if ($data['R1406'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R1406" value="2" <?php if ($data['R1406'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R1406" value="3" <?php if ($data['R1406'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1406A" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1406A" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keberadaan Pembangunan Manusian (KPM)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1407A" value="1" <?php if ($data['R1407A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1407A" value="2" <?php if ($data['R1407A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1407A" value="3" <?php if ($data['R1407A'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1407A1" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1406A" class="form-control">
                                </div>
                                <div id="R1407B" class="form-group" style="display:none;">
                                    <label for="">Jika ada, apakah ada KPM yang mendapatkan pembinaan dari pemerintah kabupaten/kota?</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1407B" value="1" <?php if ($data['R1407B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1407B" value="2" <?php if ($data['R1407B'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create8/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function on_change1(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1406A').style.display = 'block';
        } else {
        document.getElementById('R1406A').style.display = 'none'; // Hide el
        }
    }


    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1407A1').style.display = 'block';
        document.getElementById('R1407B').style.display = 'block';
        } else {
        document.getElementById('R1407A1').style.display = 'none';
        document.getElementById('R1407B').style.display = 'none'; // Hide el
        }
    }
</script>