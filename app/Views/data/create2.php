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
        <form action="<?php echo base_url('Data/save2/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">III. KEPENDUDUKAN DAN KETENAGAKERJAAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Penduduk dan keluarga pada 1 Januari 2024:</h5>
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
                                <h5>Jumlah warga desa/kelurahan yang sedang bekerja sebagai Pekerja Migran Indonesia/TKI di luar negeri pada 1 Januari 2024:</h5>
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
                                    <label>Keberadaan Warga Negara Asing (WNA) di desa/kelurahan pada 1 Januari 2024</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R402E" value="1" <?php if ($data['R402E'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R402E" value="2" <?php if ($data['R402E'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R402E1" style="display:none;">
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
                                    <h5>Jumlah penduduk bekerja per lapangan usaha</h5>
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
                                            <label>Jenis sub sektor utama sebagian besar penduduk desa/kelurahan:</label>
                                            <div style="margin-bottom:-9.5px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="1" <?php if ($data['R403B1'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">1. Tanaman Pangan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="2" <?php if ($data['R403B1'] == 2) echo "checked"; ?>>
                                                    <label class="form-check-label">2. Tanaman Holtikultura</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="3" <?php if ($data['R403B1'] == 3) echo "checked"; ?>>
                                                    <label class="form-check-label">3. Tanaman Perkebunan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="4" <?php if ($data['R403B1'] == 4) echo "checked"; ?>>
                                                    <label class="form-check-label">4. Peternakan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="5" <?php if ($data['R403B1'] == 5) echo "checked"; ?>>
                                                    <label class="form-check-label">5. Perikanan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="6" <?php if ($data['R403B1'] == 6) echo "checked"; ?>>
                                                    <label class="form-check-label">6. Kehutanan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403B1" value="7" <?php if ($data['R403B1'] == 7) echo "checked"; ?>>
                                                    <label class="form-check-label">7. Jasa Pertanian</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" id="R403B2" style="display:none;">
                                        <label>Komoditas utama dari sub sektor utama sebagian besar penduduk desa/kelurahan</label>
                                            <input type="text" name="R403B2" value="<?php echo $data['R403B2']  ?>" class="form-control">
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
                <a href="<?php echo base_url('data/create/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
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
        document.getElementById('R402E1').style.display = 'block';
        } else {
        document.getElementById('R402E1').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('ms', selectedOption);
    }

    window.onload = function() {
        var selectedOption = window.localStorage.getItem('ms');
        var selectedOption1 = window.localStorage.getItem('R403');
        if (selectedOption === '1') {
        document.getElementById('R402E1').style.display = 'block';
        } else {
        document.getElementById('R402E1').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('ms', selectedOption);

        if (selectedOption1 !== '7') {
        document.getElementById('R403B2').style.display = 'block';
        } else {
        document.getElementById('R403B2').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R403', selectedOption1);
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption !== '7') {
        document.getElementById('R403B2').style.display = 'block';
        } else {
        document.getElementById('R403B2').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R403', selectedOption);
    }

    $('input[type="checkbox"]').change(function() {
    if ($(this).is(':checked')){
        $('input[type="radio"]').prop('checked', false);
    }
    });

</script>