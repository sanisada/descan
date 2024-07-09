<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Data Potensi Desa Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_podes">Data Potensi Desa</a></li>
                    <li class="breadcrumb-item active">Edit Data Potensi Desa</li>
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
                        <h3 class="card-title text-white">VIII. KEAMANAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Tindak kejahatan yang terjadi di desa/kelurahan selama setahun terakhir</h5>
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
                                <div class="form-group">
                                    <label>Jumlah anggota linmas/hansip di desa/kelurahan</label>
                                    <input type="number" name="R1305" value="<?php echo $data['R1305']?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keberadaan pos polisi (termasuk kantor polisi) di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1306A" value="1" <?php if ($data['R1306A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1306A" value="2" <?php if ($data['R1306A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1306A2" class="form-group" style="display:none;">
                                    <label for="">Sebutkan alamatnya</label>
                                    <input type="text" name="R1306A2" value="<?php echo $data['R1306A2']?>" class="form-control">
                                </div>
                                <h5>Jumlah korban bunuh diri dan pembunuhan selama setahun terakhir di desa/kelurahan:</h5>
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
                        <h3 class="card-title text-white">IX. KEUANGAN DAN ASET DESA</h3>
                    </div>
                    <div class="card-body">
                        <h5>Kepemilikan badan usaha dan aset desa</h5>
                        <div class="form-group col-md-6">
                            <label>Jumlah unit usaha BUMDes</label>
                            <input type="number" name="R1403A" value="<?php echo $data['R1403A']?>" class="form-control">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keberadaan pendamping lokal desa</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1406" value="1" <?php if ($data['R1406'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1406" value="2" <?php if ($data['R1406'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change2(event)' type="radio" name="R1406" value="3" <?php if ($data['R1406'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R1406A" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R14061" value="<?php echo $data['R14061']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keberadaan Pembangunan Manusia (KPM)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1407A" value="1" <?php if ($data['R1407A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1407A" value="2" <?php if ($data['R1407A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak aktif</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change3(event)' type="radio" name="R1407A" value="3" <?php if ($data['R1407A'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R1407A1" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R1407A1" value="<?php echo $data['R1407A1']?>"class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="R1407B" class="form-group" style="display:none;">
                                    <label for="">Jika ada, apakah ada KPM yang mendapatkan pembinaan dari pemerintah kabupaten/kota?</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1407B" value="1" <?php if ($data['R1407B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1407B" value="2" <?php if ($data['R1407B'] == 2) echo "checked"; ?>>
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
        document.getElementById('R1306A2').style.display = 'block';
        } else {
        document.getElementById('R1306A2').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1306A2', selectedOption);
    }

    function on_change2(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1406A').style.display = 'block';
        } else {
        document.getElementById('R1406A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1406A', selectedOption);
    }

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R1407A1').style.display = 'block';
        document.getElementById('R1407B').style.display = 'block';
        } else {
        document.getElementById('R1407A1').style.display = 'none'; // Hide el
        document.getElementById('R1407B').style.display = 'none';
        }
        window.localStorage.setItem('R1407A1', selectedOption);
        window.localStorage.setItem('R1407B', selectedOption);
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
        var selectedOption = window.localStorage.getItem('R1306A2');
        var selectedOption1 = window.localStorage.getItem('R1406A');
        var selectedOption2 = window.localStorage.getItem('R1407A1');

        if (selectedOption === '1') {
        document.getElementById('R1306A2').style.display = 'block';
        } else {
        document.getElementById('R1306A2').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1306A2', selectedOption);

        if (selectedOption1 === '1' || selectedOption1 === '2') {
        document.getElementById('R1406A').style.display = 'block';
        } else {
        document.getElementById('R1406A').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1406A', selectedOption1);

        if (selectedOption2 === '1' || selectedOption2 === '2') {
            document.getElementById('R1407A1').style.display = 'block';
            document.getElementById('R1407B').style.display = 'block';
        } else {
            document.getElementById('R1407A1').style.display = 'none'; // Hide el
            document.getElementById('R1407B').style.display = 'none';
        }
        window.localStorage.setItem('R1407A1', selectedOption);
        window.localStorage.setItem('R1407B', selectedOption);

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