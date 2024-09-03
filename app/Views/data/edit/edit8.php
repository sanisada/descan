<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Data Potensi Pekon Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_prospera">Data Potensi Pekon</a></li>
                    <li class="breadcrumb-item active">Edit Data Potensi Pekon</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <form action="<?php echo base_url('data/simpan8/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">xI. KEAMANAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>1101. Tindak kejahatan yang terjadi di desa/kelurahan selama setahun terakhir</h5>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th>Jenis tindak kejahatan</th>
                                            <th>Kejadian</th>
                                            <th>Kecenderungan tindak kejahatan dibanding setahun yang lalu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $interval = 2; 
                                        for ($i = 496; $i < 518; $i += $interval): 
                                        ?>
                                        <tr>
                                            <td>
                                                <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                            </td>
                                            <td style="text-align:center;vertical-align: middle;">
                                                <div class="form-group">
                                                    <div style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input id="kejadian-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?> onchange='onRadioChange(<?php echo $i ?>, true)' >
                                                            <label class="form-check-label">Ada</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input id="kejadian-tidak-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?> onchange='onRadioChange(<?php echo $i ?>, false)' >
                                                            <label class="form-check-label">Tidak ada</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="text-align:center;vertical-align: middle;" id="kejadiann-<?php echo $i ?>" class="ekonomi">
                                            <div class="form-group">
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i + 1]['dataKey']] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Menurun</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i + 1]['dataKey']] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Sama saja</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="3" <?php if ($data[$ques[$i + 1]['dataKey']] == 3) echo "checked"; ?>>
                                                        <label class="form-check-label">Meningkat</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                                <hr/>
                                <div class="form-group">
                                    <label>1102. Jumlah anggota linmas/hansip di desa/kelurahan</label>
                                    <input type="number" name="R1102" value="<?php echo $data['R1102']?>" class="form-control">
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label>1103. Keberadaan pos polisi (termasuk kantor polisi) di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1103" value="1" <?php if ($data['R1103'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1103" value="2" <?php if ($data['R1103'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1103S" class="form-group" style="display:none;">
                                    <label for="">Sebutkan alamatnya</label>
                                    <input type="text" name="R1103S" value="<?php echo $data['R1103S']?>" class="form-control">
                                </div>
                                <hr/>
                                <label>1104. Jumlah korban bunuh diri dan pembunuhan selama setahun terakhir di desa/kelurahan:</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="text-align:center;vertical-align: middle;">Korban</th>
                                            <th colspan="2" style="text-align:center;vertical-align: middle;">Jenis kelamin</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;vertical-align: middle;">Laki-laki</th>
                                            <th style="text-align:center;vertical-align: middle;">Perempuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label>Bunuh diri (termasuk percobaan bunuh diri)</label></td>
                                            <td>
                                                <input type="number" name="<?php echo $ques[521]['dataKey']?>" value="<?php echo ($data[$ques[521]['dataKey']])?>" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" name="<?php echo $ques[522]['dataKey']?>" value="<?php echo ($data[$ques[522]['dataKey']])?>" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Pembunuhan</label></td>
                                            <td>
                                                <input type="number" name="<?php echo $ques[523]['dataKey']?>" value="<?php echo ($data[$ques[523]['dataKey']])?>" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" name="<?php echo $ques[524]['dataKey']?>" value="<?php echo ($data[$ques[524]['dataKey']])?>" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">XII. KEUANGAN DAN ASET DESA</h3>
                    </div>
                    <div class="card-body">
                        <h5>1201. Kepemilikan badan usaha dan aset desa</h5>
                        <div class="form-group col-md-6">
                            <label>a. Jumlah unit usaha BUMDes</label>
                            <input type="number" name="R1201A" value="<?php echo $data['R1201A']?>" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php for ($i = 526; $i < 530; $i++): ?>
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
                                <?php for ($i = 530; $i < 534; $i++): ?>
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
                        <hr/>
                        <h5>1202. </h5>
                        <div class="row">
                            <?php for ($i = 534; $i < 536; $i++): ?>
                                <div class="col-md-6">
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
                                </div>
                            <?php endfor ?>
                            <?php for ($i = 536; $i < 538; $i++): ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]?>" class="form-control">
                                    </div>
                                </div>
                            <?php endfor ?>
                            
                        </div>
                        <hr/>
                            <div class="row">
                            <?php for ($i = 538; $i < 540; $i++): ?>
                                <div class="col-md-6">
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
                                </div>
                            <?php endfor ?>
                            </div>
                            <hr/>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>1204. Keberadaan pendamping lokal desa</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1204" value="1" <?php if ($data['R1204'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1204" value="2" <?php if ($data['R1204'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1204" value="3" <?php if ($data['R1204'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R1204S" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1204S" value="<?php echo $data['R1204S']?>" class="form-control">
                                </div>
                            </div>
                            </div>
                            <hr/>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>1205. Keberadaan Pembangunan Manusia (KPM)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1205A" value="1" <?php if ($data['R1205A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1205A" value="2" <?php if ($data['R1205A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1205A" value="3" <?php if ($data['R1205A'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R1205AS" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1205AS" value="<?php echo $data['R1205AS']?>"class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="R1205B" class="form-group" style="display:none;">
                                    <label for="">Jika ada, apakah ada KPM yang mendapatkan pembinaan dari pemerintah kabupaten/kota?</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1205B" value="1" <?php if ($data['R1205B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1205B" value="2" <?php if ($data['R1205B'] == 2) echo "checked"; ?>>
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

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/edit7/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
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
        document.getElementById('R1103S').style.display = 'block';
        } else {
        document.getElementById('R1103S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1103S', selectedOption);
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1204S').style.display = 'block';
        } else {
        document.getElementById('R1204S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1204S', selectedOption);
    }

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1205AS').style.display = 'block';
        document.getElementById('R1205B').style.display = 'block';
        } else {
        document.getElementById('R1205AS').style.display = 'none'; // Hide el
        document.getElementById('R1205B').style.display = 'none';
        }
        window.localStorage.setItem('R1205AS', selectedOption);
        window.localStorage.setItem('R1205B', selectedOptionB);
    }

    function onRadioChange(index, isAda) {
        // Ambil elemen berdasarkan index
        var kejadiann = document.getElementById('kejadiann-' + index);

        // Tampilkan atau sembunyikan elemen berdasarkan nilai radio
        if (isAda) {
            kejadiann.style.display = 'table-cell';
        } else {
            kejadiann.style.display = 'none';
        }
    }

    window.onload = function() {
        var selectedOption = window.localStorage.getItem('R1103S');
        var selectedOption1 = window.localStorage.getItem('R1204S');
        var selectedOption2 = window.localStorage.getItem('R1205AS');
        var selectedOptionB = window.localStorage.getItem('R1205B');

        if (selectedOption === '1') {
        document.getElementById('R1103S').style.display = 'block';
        } else {
        document.getElementById('R1103S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1103S', selectedOption);

        if (selectedOption1 === '1' || selectedOption1 === '2') {
        document.getElementById('R1204S').style.display = 'block';
        } else {
        document.getElementById('R1204S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1204S', selectedOption1);

        if (selectedOption2 === '1' || selectedOption2 === '2') {
            document.getElementById('R1205AS').style.display = 'block';
            document.getElementById('R1205B').style.display = 'block';
        } else {
            document.getElementById('R1205AS').style.display = 'none'; // Hide el
            document.getElementById('R1205B').style.display = 'none';
        }
        window.localStorage.setItem('R1205AS', selectedOption);
        window.localStorage.setItem('R1205B', selectedOptionB);

        <?php for ($i = 496; $i < 518; $i += 2): ?>
            var isAdaChecked = document.getElementById('kejadian-<?php echo $i ?>').checked;
            var isTidakAdaChecked = document.getElementById('kejadian-tidak-<?php echo $i ?>').checked;
            if (isAdaChecked) {
                onRadioChange(<?php echo $i ?>, true);
            } else if (isTidakAdaChecked) {
                onRadioChange(<?php echo $i ?>, false);
            }
        <?php endfor ?>
    }
</script>