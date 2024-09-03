<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Detail Data Potensi Pekon Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_prospera">Data Potensi Pekon</a></li>
                    <li class="breadcrumb-item active">Detail Data Potensi Pekon</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">III. KEPENDUDUKAN DAN KETENAGAKERJAAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>301. Penduduk dan keluarga pada 1 Januari <?php echo $data['Tahun']?>:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                    <?php for ($i = 13; $i < 15; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>"  value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                    <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 15; $i < 17; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>"  value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                </div>                                
                                <hr/>
                                <h5>302. a. Jumlah warga desa/kelurahan yang sedang bekerja sebagai Pekerja Migran Indonesia/TKI di luar negeri pada 1 Januari <?php echo $data['Tahun']?>:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><?php echo $ques[18]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[18]['dataKey']?>"  value="<?php echo $data[$ques[18]['dataKey']]  ?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[19]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[19]['dataKey']?>"  value="<?php echo $data[$ques[19]['dataKey']]  ?>" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <hr/>
                                <div class="form-group">
                                    <h5>b. Keberadaan Warga Negara Asing (WNA) di desa/kelurahan pada 1 Januari <?php echo $data['Tahun']?></h5>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R302B" value="1" <?php if ($data['R302B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R302B" value="2" <?php if ($data['R302B'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R302B1" style="display:none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[18]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[18]['dataKey']?>"  value="<?php echo $data[$ques[18]['dataKey']]  ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[19]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[19]['dataKey']?>"  value="<?php echo $data[$ques[19]['dataKey']]  ?>" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                </div> 
                                <hr/>
                                <div class="form-group mt-20">
                                    <h5>303. Jumlah penduduk bekerja per lapangan usaha</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 24; $i < 35; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 35; $i < 45; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>304. a. Jenis sub sektor utama sebagian besar penduduk desa/kelurahan:</label>
                                            <div style="margin-bottom:-9.5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="1" <?php if ($data['R304A'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">1. Tanaman Pangan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="2" <?php if ($data['R304A'] == 2) echo "checked"; ?>>
                                                    <label class="form-check-label">2. Tanaman Holtikultura</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="3" <?php if ($data['R304A'] == 3) echo "checked"; ?>>
                                                    <label class="form-check-label">3. Tanaman Perkebunan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="4" <?php if ($data['R304A'] == 4) echo "checked"; ?>>
                                                    <label class="form-check-label">4. Peternakan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="5" <?php if ($data['R304A'] == 5) echo "checked"; ?>>
                                                    <label class="form-check-label">5. Perikanan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="6" <?php if ($data['R304A'] == 6) echo "checked"; ?>>
                                                    <label class="form-check-label">6. Kehutanan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R304A" value="7" <?php if ($data['R304A'] == 7) echo "checked"; ?>>
                                                    <label class="form-check-label">7. Jasa Pertanian</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="R304B" style="display:none;">
                                        <label>b. Komoditas utama dari sub sektor utama sebagian besar penduduk desa/kelurahan</label>
                                            <input type="text" name="R304B" value="<?php echo $data['R304B']  ?>" class="form-control">
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
                <a href="<?php echo base_url('data/detail/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary"><i class="fas fa-arrow-left"></i>&ensp;Sebelumnya</button></a>
                <a href="<?php echo base_url('data/detail3/'.$data['data_id'])?>"><button type="button" name="next" class="btn btn-md btn-info float-md-right">Selanjutnya&ensp;<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
    </div>
</section>

<script>
    window.onload = function() {
        var selectedOption = window.localStorage.getItem('ms');
        var selectedOption1 = window.localStorage.getItem('R304B');
        if (selectedOption === '1') {
        document.getElementById('R302B1').style.display = 'block';
        } else {
        document.getElementById('R302B1').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('ms', selectedOption);

        if (selectedOption1 !== '7') {
        document.getElementById('R304B').style.display = 'block';
        } else {
        document.getElementById('R304B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R304B', selectedOption1);

        let inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type === 'radio' || input.type === 'checkbox') {
                input.disabled = true;
            } else {
                input.readOnly = true;
            }
        });
    
    }
</script>