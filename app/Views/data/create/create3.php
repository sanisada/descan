<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tambah Data Potensi Pekon Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_prospera">Data Potensi Pekon</a></li>
                    <li class="breadcrumb-item active">Tambah Data Potensi Pekon</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <form action="<?php echo base_url('data/save3/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">IV. PERUMAHAN DAN LINGKUNGAN HIDUP</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 47; $i < 49; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[49]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[49]['dataKey']?>" value="<?php echo $data['R401B']  ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>402. Keberadaan Tempat Penampungan Sementara (TPS)</label>
                                            <div style="margin-bottom:-9.5px;">
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R402" value="1" <?php if ($data['R402'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Ada, digunakan</label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R402" value="2" <?php if ($data['R402'] == 2) echo "checked"; ?>>
                                                    <label class="form-check-label">Ada, tidak digunakan</label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R402" value="3" <?php if ($data['R402'] == 3) echo "checked"; ?>>
                                                    <label class="form-check-label">Tidak ada</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="R402S" class="form-group" style="display:none;">
                                            <label for="">Nama TPS</label>
                                            <input type="text" name="R402S" class="form-control" value="<?php echo $data['R402S']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label>403. a. Wilayah desa/kelurahan dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET) / Saluran Udara Tegangan Tinggi (SUTT) / Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403A" value="1" <?php if ($data['R403A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R403A" value="2" <?php if ($data['R403A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R403B" class="form-group"  style="display:none;">
                                    <label>b. Keberadaan permukiman di bawah SUTET/SUTT/SUTTAS:</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R403B" value="1" <?php if ($data['R403B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R403B" value="2" <?php if ($data['R403B'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R403C" class="form-group" style="display:none;">
                                    <hr/>
                                    <label>c. Jika ada permukiman di bawah SUTET/SUTT/SUTTAS:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for=""><?php echo $ques[54]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[54]['dataKey']?>" value="<?php echo $data[$ques[54]['dataKey']]  ?>" class="form-control">
                                            <label for=""><?php echo $ques[55]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[55]['dataKey']?>" value="<?php echo $data[$ques[55]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 56; $i < 58; $i++): ?>
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <!-- <div class="form-group">
                                    <h5>404. Penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung</h5>
                                    <table class="table table-bordered">
                                        <thead style="text-align:center;vertical-align: middle;">
                                            <tr>
                                                <th>Jenis penggunaan</th>
                                                <th>Sungai</th>
                                                <th>Saluran irigasi</th>
                                                <th>Danau/waduk/situ/bendungan</th>
                                                <th>Embung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label>Keberadaan</label>
                                                </td>
                                                <?php for ($i = 58; $i < 62; $i++): ?>
                                                    <td style="text-align:center;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ada</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak ada</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Penggunaan<br>
                                                    &emsp;1. Mandi/cuci</label>
                                                </td>
                                                <?php for ($i = 62; $i < 66; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;2. Sumber air minum/masak</label>
                                                </td>
                                                <?php for ($i = 66; $i < 70; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;3. Bahan baku air minum</label>
                                                </td>
                                                <?php for ($i = 70; $i < 74; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;4. Pengairan/irigasi lahan pertanian</label>
                                                </td>
                                                <?php for ($i = 74; $i < 78; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;5. Pariwisata (komersial)</label>
                                                </td>
                                                <?php for ($i = 78; $i < 82; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;6. Perikanan</label>
                                                </td>
                                                <?php for ($i = 82; $i < 86; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;7. Transportasi</label>
                                                </td>
                                                <?php for ($i = 86; $i < 89; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;8. Pembangkit listrik</label>
                                                </td>
                                                <?php for ($i = 90; $i < 94; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;9. Industri/pabrik</label>
                                                </td>
                                                <td style="text-align:center;vertical-align: middle;">
                                                    <div style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[94]['dataKey']?>" value="1" <?php if ($data[$ques[94]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[94]['dataKey']?>" value="2" <?php if ($data[$ques[94]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Tidak</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>&emsp;</td>
                                                <?php for ($i = 96; $i < 98; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;10. Lainnya</label>
                                                </td>
                                                <td style="text-align:center;vertical-align: middle;">
                                                    <div style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[98]['dataKey']?>" value="1" <?php if ($data[$ques[98]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[98]['dataKey']?>" value="2" <?php if ($data[$ques[98]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Tidak</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>&emsp;</td>
                                                <?php for ($i = 100; $i < 102; $i++): ?>
                                                    <td style="text-align:center;vertical-align: middle;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                                <div class="form-group">
                                    <h5>404. Penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung</h5>
                                    <table class="table table-bordered">
                                        <thead style="text-align:center;vertical-align: middle;">
                                            <tr>
                                                <th>Jenis penggunaan</th>
                                                <th>Sungai</th>
                                                <th>Saluran irigasi</th>
                                                <th>Danau/waduk/situ/bendungan</th>
                                                <th>Embung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label>Keberadaan</label></td>
                                                <?php for ($i = 58; $i < 62; $i++): ?>
                                                    <td style="text-align:center;">
                                                        <div style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?> onclick="toggleUsageInput(<?php echo $i - 58; ?>, true)">
                                                                <label class="form-check-label">Ada</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?> onclick="toggleUsageInput(<?php echo $i - 58; ?>, false)">
                                                                <label class="form-check-label">Tidak ada</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr class="usage-row">
                                                <td><label>Penggunaan<br>&emsp;1. Mandi/cuci</label></td>
                                                <?php for ($i = 62; $i < 66; $i++): ?>
                                                    <td id="usage-column-<?php echo $i - 62; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input" style="margin-bottom:-9.5px;">
                                                        <!-- <label for=""><?php echo $ques[$i]['ques_label']?></label> -->
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr class="usage-row">
                                                <td><label>&emsp;2. Sumber air minum/masak</label></td>
                                                <?php for ($i = 66; $i < 70; $i++): ?>
                                                    <td id="usage-column1-<?php echo $i - 66; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input1" style="margin-bottom:-9.5px;">
                                                        <!-- <label for=""><?php echo $ques[$i]['ques_label']?></label> -->
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;3. Bahan baku air minum</label>
                                                </td>
                                                <?php for ($i = 70; $i < 74; $i++): ?>
                                                    <td id="usage-column2-<?php echo $i - 70; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input2" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;4. Pengairan/irigasi lahan pertanian</label>
                                                </td>
                                                <?php for ($i = 74; $i < 78; $i++): ?>
                                                    <td id="usage-column3-<?php echo $i - 74; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input3" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;5. Pariwisata (komersial)</label>
                                                </td>
                                                <?php for ($i = 78; $i < 82; $i++): ?>
                                                    <td id="usage-column4-<?php echo $i - 78; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input4" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;6. Perikanan</label>
                                                </td>
                                                <?php for ($i = 82; $i < 86; $i++): ?>
                                                    <td id="usage-column5-<?php echo $i - 82; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input5" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;7. Transportasi</label>
                                                </td>
                                                <?php for ($i = 86; $i < 89; $i++): ?>
                                                    <td id="usage-column6-<?php echo $i - 86; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input6" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;8. Pembangkit listrik</label>
                                                </td>
                                                <?php for ($i = 90; $i < 94; $i++): ?>
                                                    <td id="usage-column7-<?php echo $i - 90; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input7" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;9. Industri/pabrik</label>
                                                </td>
                                                <td id="usage-column8-<?php echo $i - 94; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input8" style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[94]['dataKey']?>" value="1" <?php if ($data[$ques[94]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[94]['dataKey']?>" value="2" <?php if ($data[$ques[94]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Tidak</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>&emsp;</td>
                                                <?php for ($i = 96; $i < 98; $i++): ?>
                                                    <td id="usage-column8-<?php echo $i - 94; ?>" style="text-align:center;vertical-align: middle;">
                                                    <div class="usage-input8" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>
                                                    &emsp;10. Lainnya</label>
                                                </td>
                                                <td id="usage-column9-<?php echo $i - 98; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input9" style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[98]['dataKey']?>" value="1" <?php if ($data[$ques[98]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Ya</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[98]['dataKey']?>" value="2" <?php if ($data[$ques[98]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Tidak</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>&emsp;</td>
                                                <?php for ($i = 100; $i < 102; $i++): ?>
                                                    <td id="usage-column9-<?php echo $i - 98; ?>" style="text-align:center;vertical-align: middle;">
                                                        <div class="usage-input9" style="margin-bottom:-9.5px;">
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                                <label class="form-check-label">Ya</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                                <label class="form-check-label">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php endfor ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="R405A" class="form-group">
                                    <label>405. a. Keberadaan permukiman di bantaran sungai</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change5(event)' type="radio" name="R405A" value="1" <?php if ($data['R405A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change5(event)' type="radio" name="R405A" value="2" <?php if ($data['R405A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R405B" class="form-group" style="display:none;">
                                    <hr/>
                                    <h6>Jika ada permukiman di bantaran sungai:</h6>
                                    <?php for ($i = 103; $i < 106; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <div id="R406A" class="form-group">
                                    <label>406. a. Keberadaan permukiman kumuh</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R406A" value="1" <?php if ($data['R406A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R406A" value="2" <?php if ($data['R406A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R406B" class="form-group">
                                    <hr/>
                                    <h6>b. Jika ada permukiman kumuh:</h6>
                                    <?php for ($i = 107; $i < 110; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <div id="R407" class="form-group">
                                    <label>407. Keberadaan dan keaktifan komunitas/kelompok lingkungan hidup (meliputi gerakan lingkungan berkelanjutan, sadar lingkungan, siaga bencana)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R407" value="1" <?php if ($data['R407'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R407" value="2" <?php if ($data['R407'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change7(event)' type="radio" name="R407" value="3" <?php if ($data['R407'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R407S" class="form-group" style="display:none;">
                                    <label for="">Nama komunitas/kelompok lingkungan hidup</label>
                                    <input type="text" name="R407S" value="<?php echo $data['R407S']  ?>" class="form-control">
                                </div>
                                <div id="R408" class="form-group">
                                    <label>408. Keberadaan lokasi penggalian Golongan C (misalnya batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll) di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change8(event)' type="radio" name="R408" value="1" <?php if ($data['R408'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change8(event)' type="radio" name="R408" value="2" <?php if ($data['R408'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R408A" class="form-group" style="display:none;">
                                    <label for="">Sebutkan lokasi dan nama galiannya</label>
                                    <input type="text" name="R408A" value="<?php echo $data['R408A']  ?>" class="form-control">
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
        document.getElementById('R402S').style.display = 'block';
        } else {
        document.getElementById('R402S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var', selectedOption);
    }

    function on_change2(el){
        var selectedOption1 = el.target.value;
        if (selectedOption1 === '1') {
        document.getElementById('R403B').style.display = 'block';
        } else {
        document.getElementById('R403B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var1', selectedOption1);
    }

    function on_change3(el){
        var selectedOption2 = el.target.value;
        if (selectedOption1 === '1' &&  selectedOption2 === '1') {
        document.getElementById('R403C').style.display = 'block';
        } else {
        document.getElementById('R403C').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var2', selectedOption2);
    }

    function on_change5(el){
        var selectedOption3 = el.target.value;
        if (selectedOption3 === '1') {
        document.getElementById('R405B').style.display = 'block';
        } else {
        document.getElementById('R405B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var3', selectedOption3);
    }

    function on_change6(el){
        var selectedOption4 = el.target.value;
        if (selectedOption4 === '1') {
        document.getElementById('R406B').style.display = 'block';
        } else {
        document.getElementById('R406B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var4', selectedOption4);
    }

    function on_change7(el){
        var selectedOption5 = el.target.value;
        if (selectedOption5 === '1' || selectedOption5 === '2') {
        document.getElementById('R407S').style.display = 'block';
        } else {
        document.getElementById('R407S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var5', selectedOption5);
    }

    function on_change8(el){
        var selectedOption6 = el.target.value;
        if (selectedOption6 === '1') {
        document.getElementById('R408A').style.display = 'block';
        } else {
        document.getElementById('R408A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var6', selectedOption6);
    }

    window.onload = function() {
        var selectedOption = window.localStorage.getItem('var');
        var selectedOption1 = window.localStorage.getItem('var1');
        var selectedOption2 = window.localStorage.getItem('var2');
        var selectedOption3 = window.localStorage.getItem('var3');
        var selectedOption4 = window.localStorage.getItem('var4');
        var selectedOption5 = window.localStorage.getItem('var5');
        var selectedOption6 = window.localStorage.getItem('var6');

        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R402S').style.display = 'block';
        } else {
        document.getElementById('R402S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var', selectedOption);

        if (selectedOption1 === '1') {
        document.getElementById('R403B').style.display = 'block';
        } else {
        document.getElementById('R403B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var1', selectedOption1);

        if (selectedOption1 === '1' &&  selectedOption2 === '1') {
        document.getElementById('R403C').style.display = 'block';
        } else {
        document.getElementById('R403C').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var2', selectedOption2);

        if (selectedOption3 === '1') {
        document.getElementById('R405B').style.display = 'block';
        } else {
        document.getElementById('R405B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var3', selectedOption3);

        if (selectedOption4 === '1') {
        document.getElementById('R406B').style.display = 'block';
        } else {
        document.getElementById('R406B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var4', selectedOption4);

        if (selectedOption5 === '1' || selectedOption5 === '2') {
        document.getElementById('R407S').style.display = 'block';
        } else {
        document.getElementById('R407S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var5', selectedOption5);

        if (selectedOption6 === '1') {
        document.getElementById('R408A').style.display = 'block';
        } else {
        document.getElementById('R408A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var6', selectedOption6);
    }

    function onRadioChange(rowIndex, isVisible) {
        var rowClassName = ".row-" + rowIndex;
        var displayValue = isVisible ? "table-row" : "none";
        document.querySelectorAll(rowClassName).forEach(function(row) {
            row.style.display = displayValue;
        });
    }

    // Initialize the display state based on the initial checkbox states
    // document.addEventListener("DOMContentLoaded", function() {
    //     <?php for ($i = 58; $i < 62; $i++): ?>
    //         var isChecked = document.querySelector('input[name="<?php echo $ques[$i]['dataKey']?>"]:checked');
    //             onRadioChange(i, isChecked && isChecked.value === "1");
    //     <?php endfor; ?>
    // });

    function toggleUsageInput(index, show) {
        // Mengontrol visibilitas input dalam setiap kolom penggunaan
        const usageInput = document.querySelector(`#usage-column-${index} .usage-input`);
        const usageInput1 = document.querySelector(`#usage-column1-${index} .usage-input1`);
        const usageInput2 = document.querySelector(`#usage-column2-${index} .usage-input2`);
        const usageInput3 = document.querySelector(`#usage-column3-${index} .usage-input3`);
        const usageInput4 = document.querySelector(`#usage-column4-${index} .usage-input4`);
        const usageInput5 = document.querySelector(`#usage-column5-${index} .usage-input5`);
        const usageInput6 = document.querySelector(`#usage-column6-${index} .usage-input6`);
        const usageInput7 = document.querySelector(`#usage-column7-${index} .usage-input7`);
        const usageInput8 = document.querySelector(`#usage-column8-${index} .usage-input8`);
        const usageInput9 = document.querySelector(`#usage-column9-${index} .usage-input9`);

        if (usageInput) {
            usageInput.style.display = show ? '' : 'none';
        }
        if (usageInput1) {
            usageInput1.style.display = show ? '' : 'none';
        }
        if (usageInput2) {
            usageInput2.style.display = show ? '' : 'none';
        }
        if (usageInput3) {
            usageInput3.style.display = show ? '' : 'none';
        }
        if (usageInput4) {
            usageInput4.style.display = show ? '' : 'none';
        }
        if (usageInput5) {
            usageInput5.style.display = show ? '' : 'none';
        }
        if (usageInput6) {
            usageInput6.style.display = show ? '' : 'none';
        }
        if (usageInput7) {
            usageInput7.style.display = show ? '' : 'none';
        }
        if (usageInput8) {
            usageInput8.style.display = show ? '' : 'none';
        }
        if (usageInput9) {
            usageInput9.style.display = show ? '' : 'none';
        }
    }

    // Inisialisasi untuk menyembunyikan input saat halaman dimuat jika "Tidak ada" dipilih
    document.addEventListener('DOMContentLoaded', () => {
        <?php for ($i = 58; $i < 62; $i++): ?>
            toggleUsageInput(<?php echo $i - 58; ?>, <?php echo ($data[$ques[$i]['dataKey']] == 1) ? 'true' : 'false'; ?>);
        <?php endfor; ?>
    });
</script>