<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tambah Data Potensi Desa</h3>
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
        <form action="<?php echo base_url('Data/save3/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">IV. PERUMAHAN DAN LINGKUNGAN HIDUP</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php for ($i = 45; $i < 47; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                </div>
                                <?php endfor?>
                                <div class="form-group">
                                    <label>Keberadaan Tempat Penampungan Sementara (TPS)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R504C" value="1" <?php if ($data['R504C'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, digunakan</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R504C" value="2" <?php if ($data['R504C'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak digunakan</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R504C" value="3" <?php if ($data['R504C'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R504C1" class="form-group" style="display:none;">
                                    <label for="">Nama TPS</label>
                                    <input type="text" name="R504C1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Wilayah desa/kelurahan dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET) / Saluran Udara Tegangan Tinggi (SUTT) / Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R509A" value="1" <?php if ($data['R509A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R509A" value="2" <?php if ($data['R509A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R509B" class="form-group"  style="display:none;">
                                    <label>Keberadaan permukiman di bawah SUTET/SUTT/SUTTAS:</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R509B" value="1" <?php if ($data['R509B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R509B" value="2" <?php if ($data['R509B'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R509C" class="form-group" style="display:none;">
                                    <hr/>
                                    <h6>Jika ada permukiman di bawah SUTET/SUTT/SUTTAS:</h6>
                                    <label for="">Jumlah lokasi</label>
                                    <input type="text" name="R509C1" value="<?php echo $data['R509C1']  ?>" class="form-control">
                                    <label for="">Tuliskan alamatnya</label>
                                    <input type="text" name="R509C1A" class="form-control">
                                    <?php for ($i = 54; $i < 56; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung</h5>
                                    <label>Keberadaan sungai, saluran irigasi, danau/waduk/situ/bendungan, embung di desa/kelurahan <i>(beri tanda cek jika ada)</i></label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                        <?php for ($i = 56; $i < 60; $i++): ?>
                                            <div style="margin-bottom:-9.5px;">
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($ques[$i]['dataKey'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label"><?php echo $ques[$i]['ques_label']?></label>
                                                </div>
                                            </div>
                                        <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <?php for ($j = 56; $j < 60; $j++): ?>
                                    <div class="form-group">
                                        <label for="">Penggunaan <?php echo $ques[$j]['ques_label']?> <i>(beri tanda cek jika ada)</i></label>
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <div class="col-12">
                                                    <input class="form-check-input margin-left:4px;" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label margin-left:4px;">Mandi/cuci</label><br/>
                                                    <input class="form-check-input margin-left:4px;" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label margin-left:4px;">Sumber air minum/masak</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Bahan baku air minum</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Pengairan/irigasi lahan pertanian</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Pengairan/irigasi lahan pertanian</label>
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Pariwisata (komersial)</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Perikanan</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Transportasi</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Pembangkit listrik</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Industri/pabrik</label><br/>
                                                    <input class="form-check-input" type="checkbox" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data['R509AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Lainnya</label><br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor?>
                                <div id="R511A" class="form-group">
                                    <label>Keberadaan permukiman di bantaran sungai :</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change5(event)' type="radio" name="R511A" value="1" <?php if ($data['R511A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change5(event)' type="radio" name="R511A" value="2" <?php if ($data['R511A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R511B" class="form-group" style="display:none;">
                                    <hr/>
                                    <h6>Jika ada permukiman di bantaran sungai:</h6>
                                    <label for="">Jumlah lokasi</label>
                                    <input type="text" name="R511B1" value="<?php echo $data['R511B1']  ?>" class="form-control">
                                    <label for="">Tuliskan alamatnya</label>
                                    <input type="text" name="R511BA" class="form-control">
                                    <?php for ($i = 99; $i < 101; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <div id="R511A" class="form-group">
                                    <label>Keberadaan permukiman kumuh :</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R511A" value="1" <?php if ($data['R511A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R511A" value="2" <?php if ($data['R511A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R511B" class="form-group" style="display:none;">
                                    <hr/>
                                    <h6>Jika ada permukiman kumuh:</h6>
                                    <label for="">Jumlah lokasi</label>
                                    <input type="text" name="R511B1" value="<?php echo $data['R511B1']  ?>" class="form-control">
                                    <?php for ($i = 100; $i < 102; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <div id="R516" class="form-group">
                                    <label>Keberadaan dan keaktifan komunitas/kelompok lingkungan hidup (meliputi gerakan lingkungan berkelanjutan, sadar lingkungan, siaga bencana)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R516" value="1" <?php if ($data['R516'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R516" value="2" <?php if ($data['R516'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R516" value="3" <?php if ($data['R516'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R516A" class="form-group" style="display:none;">
                                    <label for="">Nama komunitas/kelompok lingkungan hidup</label>
                                    <input type="text" name="R516A" value="" class="form-control">
                                </div>
                                <div id="R518" class="form-group">
                                    <label>Keberadaan lokasi penggalian Golongan C (misalnya batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll) di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change8(event)' type="radio" name="R518" value="1" <?php if ($data['R518'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change8(event)' type="radio" name="R518" value="2" <?php if ($data['R518'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R518A" class="form-group" style="display:none;">
                                    <label for="">Sebutkan lokasi dan nama galiannya</label>
                                    <input type="text" name="R518A" value="" class="form-control">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create2/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
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
        document.getElementById('R504C1').style.display = 'block';
        } else {
        document.getElementById('R504C1').style.display = 'none'; // Hide el
        }
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R509B').style.display = 'block';
        } else {
        document.getElementById('R509B').style.display = 'none'; // Hide el
        }
    }

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R509C').style.display = 'block';
        } else {
        document.getElementById('R509C').style.display = 'none'; // Hide el
        }
    }

    function on_change5(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R511B').style.display = 'block';
        } else {
        document.getElementById('R511B').style.display = 'none'; // Hide el
        }
    }

    function on_change6(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R513B').style.display = 'block';
        } else {
        document.getElementById('R513B').style.display = 'none'; // Hide el
        }
    }

    function on_change7(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R516A').style.display = 'block';
        } else {
        document.getElementById('R516A').style.display = 'none'; // Hide el
        }
    }

    function on_change8(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R518A').style.display = 'block';
        } else {
        document.getElementById('R518A').style.display = 'none'; // Hide el
        }
    }
</script>