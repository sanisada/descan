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
        <form action="<?php echo base_url('Data/save11/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">XI. KETERANGAN APARATUR PEMERINTAHAN DESA/KELURAHAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Keberadaan kepala desa/lurah dan sekretaris desa/sekretaris lurah</h5>
                                <label>a. Kepala desa/lurah</label>
                                <div class="form-group"> 
                                    <label>Keberadaan Kepala Desa/Lurah</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1601AK2" value="1" <?php if ($data['R1601AK2'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1601AK2" value="2" <?php if ($data['R1601AK2'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601AK2_1" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1601AK2_1" value="<?php echo $data['R1601AK2_1']?>" class="form-control">
                                </div>
                                <div id="R1601AK3" class="form-group" style="display:none;">
                                    <label for="">Umur Sekretaris Desa/Sekretaris Kelurahan</label>
                                    <input type="text" name="R1601AK3" value="<?php echo $data['R1601AK3']?>" class="form-control">
                                </div>
                                <div id="R1601AK4" class="form-group" style="display:none;">
                                    <label for="">Jenis kelamin Kepala Desa/Lurah</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1601AK4" value="1" <?php if ($data['R1601AK4'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1601AK4" value="2" <?php if ($data['R1601AK4'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601AK5" class="form-group" style="display:none;">
                                    <label for="">Pendidikan tertinggi terakhir yang ditamatkan Kepala Desa/Lurah</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="1" <?php if ($data['R1601AK5'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Tidak pernah sekolah</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="2" <?php if ($data['R1601AK5'] == 2) echo "checked"; ?>>
                                                    <label class="form-check-label">Tidak tamat SD/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="3" <?php if ($data['R1601AK5'] == 3) echo "checked"; ?>>
                                                    <label class="form-check-label">Tamat SD/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="4" <?php if ($data['R1601AK5'] == 4) echo "checked"; ?>>
                                                    <label class="form-check-label">SMP/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="5" <?php if ($data['R1601AK5'] == 5) echo "checked"; ?>>
                                                    <label class="form-check-label">SMU/Sederajat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="6" <?php if ($data['R1601AK5'] == 6) echo "checked"; ?>>
                                                    <label class="form-check-label">Akademi/DIII</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="7" <?php if ($data['R1601AK5'] == 7) echo "checked"; ?>>
                                                    <label class="form-check-label">Diploma IV/S1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="8" <?php if ($data['R1601AK5'] == 8) echo "checked"; ?>>
                                                    <label class="form-check-label">S2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601AK5" value="9" <?php if ($data['R1601AK5'] == 9) echo "checked"; ?>>
                                                    <label class="form-check-label">S3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601AK6" class="form-group" style="display:none;">
                                    <label for="">Tahun Kepala Desa/Lurah mulai menjabat</label>
                                    <input type="text" name="R1601AK6" value="<?php echo $data['R1601AK6']?>" class="form-control">
                                </div>
                                <label>b. Sekretaris Desa/Sekretaris Kelurahan</label>
                                <div class="form-group"> 
                                    <label>Keberadaan Sekretaris Desa/Sekretaris Kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change2(event)' name="R1601BK2" value="1" <?php if ($data['R1601BK2'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change2(event)' name="R1601BK2" value="2" <?php if ($data['R1601BK2'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601BK2_1" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1601BK2_1" value="<?php echo $data['R1601BK2_1']?>" class="form-control">
                                </div>
                                <div id="R1601BK3" class="form-group" style="display:none;">
                                    <label for="">Umur Sekretaris Desa/Sekretaris Kelurahan</label>
                                    <input type="text" name="R1601BK3" value="<?php echo $data['R1601BK3']?>" class="form-control">
                                </div>
                                <div id="R1601BK4" class="form-group" style="display:none;">
                                    <label for="">Jenis kelamin Sekretaris Desa/Sekretaris Kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1601BK4" value="1" <?php if ($data['R1601BK4'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1601BK4" value="2" <?php if ($data['R1601BK4'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601BK5" class="form-group" style="display:none;">
                                    <label for="">Pendidikan tertinggi terakhir yang ditamatkan Sekretaris Desa/Sekretaris Kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="1" <?php if ($data['R1601BK5'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Tidak pernah sekolah</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="2" <?php if ($data['R1601BK5'] == 2) echo "checked"; ?>>
                                                    <label class="form-check-label">Tidak tamat SD/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="3" <?php if ($data['R1601BK5'] == 3) echo "checked"; ?>>
                                                    <label class="form-check-label">Tamat SD/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="4" <?php if ($data['R1601BK5'] == 4) echo "checked"; ?>>
                                                    <label class="form-check-label">SMP/Sederajat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="5" <?php if ($data['R1601BK5'] == 5) echo "checked"; ?>>
                                                    <label class="form-check-label">SMU/Sederajat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="6" <?php if ($data['R1601BK5'] == 6) echo "checked"; ?>>
                                                    <label class="form-check-label">Akademi/DIII</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="7" <?php if ($data['R1601BK5'] == 7) echo "checked"; ?>>
                                                    <label class="form-check-label">Diploma IV/S1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="8" <?php if ($data['R1601BK5'] == 8) echo "checked"; ?>>
                                                    <label class="form-check-label">S2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="R1601BK5" value="9" <?php if ($data['R1601BK5'] == 9) echo "checked"; ?>>
                                                    <label class="form-check-label">S3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1601BK6" class="form-group" style="display:none;">
                                    <label for="">Tahun Sekretaris Desa/Sekretaris Kelurahan mulai menjabat</label>
                                    <input type="text" name="R1601BK6" value="<?php echo $data['R1601BK6']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Jumlah aparatur pemerintahan</h5>
                                <?php for ($i = 581; $i < 589; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                    </div>
                                <?php endfor ?>
                                <div class="form-group"> 
                                <label>Badan Permusyawaratan Desa/Lembaga Musyawarah Kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1603A" value="1" <?php if ($data['R1603A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1603A" value="2" <?php if ($data['R1603A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <label>a. Desa sudah menjalankan pemilihan kepala desa secara serentak</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change3(event)' name="R1604A" value="1" <?php if ($data['R1604A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change3(event)' name="R1604A" value="2" <?php if ($data['R1604A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1604" class="form-group" style="display:none;">
                                    <label for="">b. Tahun terakhir pelaksanaan pemilihan kepala desa</label>
                                    <input type="text" name="R1604B" value="<?php echo $data['R1604B']?>" class="form-control">
                                    <label for="">c. Jumlah calon pemilihan kepala desa</label>
                                    <input type="text" name="R1604C" value="<?php echo $data['R1604C']?>" class="form-control">
                                    <label for="">d. Persentase perolehan suara pemenang pemilihan kepala desa</label>
                                    <input type="text" name="R1604D" value="<?php echo $data['R1604D']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create10/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function on_change1(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
            document.getElementById('R1601AK2_1').style.display = 'block';
            document.getElementById('R1601AK3').style.display = 'block';
            document.getElementById('R1601AK4').style.display = 'block';
            document.getElementById('R1601AK5').style.display = 'block';
            document.getElementById('R1601AK6').style.display = 'block';
        } else {
            document.getElementById('R1601AK2_1').style.display = 'none';
            document.getElementById('R1601AK3').style.display = 'none'; // Hide el
            document.getElementById('R1601AK4').style.display = 'none';
            document.getElementById('R1601AK5').style.display = 'none';
            document.getElementById('R1601AK6').style.display = 'none';
        }
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
            document.getElementById('R1601BK2_1').style.display = 'block';
            document.getElementById('R1601BK3').style.display = 'block';
            document.getElementById('R1601BK4').style.display = 'block';
            document.getElementById('R1601BK5').style.display = 'block';
            document.getElementById('R1601BK6').style.display = 'block';
        } else {
            document.getElementById('R1601BK2_1').style.display = 'none';
            document.getElementById('R1601BK3').style.display = 'none'; // Hide el
            document.getElementById('R1601BK4').style.display = 'none';
            document.getElementById('R1601BK5').style.display = 'none';
            document.getElementById('R1601BK6').style.display = 'none';
        }
    }

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1604').style.display = 'block';
        } else {
        document.getElementById('R1604').style.display = 'none'; 
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