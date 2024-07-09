<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Detail Data Potensi Desa Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_podes">Data Potensi Desa</a></li>
                    <li class="breadcrumb-item active">Detail Data Potensi Desa</li>
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
                                            <input type="number" name="<?php echo $ques[49]['dataKey']?>" value="<?php echo $data['R501B']  ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
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
                                    </div>
                                    <div class="col-md-6">
                                        <div id="R504C1" class="form-group" style="display:none;">
                                            <label for="">Nama TPS</label>
                                            <input type="text" name="R504C1" class="form-control" value="<?php echo $data['R504C1']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 54; $i < 56; $i++): ?>
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 56; $i < 58; $i++): ?>
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung</h5>
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
                                </div>
                                <div id="R511A" class="form-group">
                                    <label>Keberadaan permukiman di bantaran sungai</label>
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
                                    <?php for ($i = 103; $i < 106; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    <?php endfor?>
                                </div>
                                <div id="R513A" class="form-group">
                                    <label>Keberadaan permukiman kumuh</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R513A" value="1" <?php if ($data['R513A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change6(event)' type="radio" name="R513A" value="2" <?php if ($data['R513A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R513B" class="form-group">
                                    <hr/>
                                    <h6>Jika ada permukiman kumuh:</h6>
                                    <?php for ($i = 107; $i < 110; $i++): ?>
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
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
                                    <input type="text" name="R516A" value="<?php echo $data['R516A']  ?>" class="form-control">
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
                                    <input type="text" name="R518A" value="<?php echo $data['R518A']  ?>" class="form-control">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/detail2/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary"><i class="fas fa-arrow-left"></i>&ensp;Sebelumnya</button></a>
                <a href="<?php echo base_url('data/detail4/'.$data['data_id'])?>"><button type="button" name="next" class="btn btn-md btn-info float-md-right">Selanjutnya&ensp;<i class="fas fa-arrow-right"></i></button></a>
            </div>
        </div>
        </form>
    </div>
</section>

<script>
   
    window.onload = function() {
        let inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type === 'radio' || input.type === 'checkbox') {
                input.disabled = true;
            } else {
                input.readOnly = true;
            }
        });

        var selectedOption = window.localStorage.getItem('var');
        var selectedOption1 = window.localStorage.getItem('var1');
        var selectedOption2 = window.localStorage.getItem('var2');
        var selectedOption3 = window.localStorage.getItem('var3');
        var selectedOption4 = window.localStorage.getItem('var4');
        var selectedOption5 = window.localStorage.getItem('var5');
        var selectedOption6 = window.localStorage.getItem('var6');

        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R504C1').style.display = 'block';
        } else {
        document.getElementById('R504C1').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var', selectedOption);

        if (selectedOption1 === '1') {
        document.getElementById('R509B').style.display = 'block';
        } else {
        document.getElementById('R509B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var1', selectedOption1);

        if (selectedOption2 === '1') {
        document.getElementById('R509C').style.display = 'block';
        } else {
        document.getElementById('R509C').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var2', selectedOption2);

        if (selectedOption3 === '1') {
        document.getElementById('R511B').style.display = 'block';
        } else {
        document.getElementById('R511B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var3', selectedOption3);

        if (selectedOption4 === '1') {
        document.getElementById('R513B').style.display = 'block';
        } else {
        document.getElementById('R513B').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var4', selectedOption4);

        if (selectedOption5 === '1' || selectedOption5 === '2') {
        document.getElementById('R516A').style.display = 'block';
        } else {
        document.getElementById('R516A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var5', selectedOption5);

        if (selectedOption6 === '1') {
        document.getElementById('R518A').style.display = 'block';
        } else {
        document.getElementById('R518A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('var6', selectedOption6);
    }


    // Initialize the display state based on the initial checkbox states
    document.addEventListener("DOMContentLoaded", function() {
        <?php for ($i = 58; $i < 62; $i++): ?>
            var isChecked = document.querySelector('input[name="<?php echo $ques[$i]['dataKey']?>"]:checked');
                onRadioChange(i, isChecked && isChecked.value === "1");
        <?php endfor; ?>
    });
</script>