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
        <form action="<?php echo base_url('data/save4/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">V. BENCANA ALAM DAN MITIGASI BENCANA ALAM</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Kejadian/bencana alam (mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat) yang terjadi pada tahun 2023 dan 2024 (Januari-April)</h5>
                                <label>Kejadian/Bencana Alam<i> (beri tanda cek jika ada)</i></label>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th rowspan="2" style="text-align:center;vertical-align: middle;">Kejadian/Bencana Alam</th>
                                            <th rowspan="2" style="text-align:center;vertical-align: middle;">Kejadian</th>
                                            <th colspan="3" style="text-align:center;vertical-align: middle;">Tahun 2023</th>
                                            <th colspan="3" style="text-align:center;vertical-align: middle;">Tahun 2024</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;vertical-align: middle;">Banyaknya kejadian</th>
                                            <th style="text-align:center;vertical-align: middle;">Korban meninggal</th>
                                            <th style="text-align:center;vertical-align: middle;">Keberadaan korban</th>
                                            <th style="text-align:center;vertical-align: middle;">Banyaknya kejadian</th>
                                            <th style="text-align:center;vertical-align: middle;">Korban meninggal</th>
                                            <th style="text-align:center;vertical-align: middle;">Keberadaan korban</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 114; $i < 186; $i += 7): ?>
                                            <tr>
                                                <td>
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                </td>
                                                <td>
                                                    <div style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Ada</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input id="input-radio-tidak-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, false)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Tidak ada</label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td id="2023-1-<?php echo $i ?>" class="penderita" style="display: none;">
                                                    <input type="number" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                                </td>
                                                <td id="2023-2-<?php echo $i ?>" class="meninggal" style="display: none;">
                                                    <input type="number" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 2]['dataKey']] ?>" class="form-control">
                                                </td>
                                                <td id="2023-3-<?php echo $i ?>" class="meninggal" style="display: none;">
                                                    <div class="form-check">
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-A" name="<?php echo $ques[$i+3]['dataKey']?>[]" value="A" <?php if (in_array('A', explode(',', $data[$ques[$i+3]['dataKey']]))) echo "checked"; ?>>Korban hilang<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-B" name="<?php echo $ques[$i+3]['dataKey']?>[]" value="B" <?php if (in_array('B', explode(',', $data[$ques[$i+3]['dataKey']]))) echo "checked"; ?>>Korban terluka/sakit<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-C" name="<?php echo $ques[$i+3]['dataKey']?>[]" value="C" <?php if (in_array('C', explode(',', $data[$ques[$i+3]['dataKey']]))) echo "checked"; ?>>Korban mengungsi<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-D" name="<?php echo $ques[$i+3]['dataKey']?>[]" value="D" <?php if (in_array('D', explode(',', $data[$ques[$i+3]['dataKey']]))) echo "checked"; ?>>Tidak ada korban hilang/terluka/sakit/mengungsi
                                                    </div>
                                                </td>
                                                <td id="2024-1-<?php echo $i ?>" class="penderita" style="display: none;">
                                                    <input type="number" name="<?php echo $ques[$i + 4]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 4]['dataKey']] ?>" class="form-control">
                                                </td>
                                                <td id="2024-2-<?php echo $i ?>" class="meninggal" style="display: none;">
                                                    <input type="number" name="<?php echo $ques[$i + 5]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 5]['dataKey']] ?>" class="form-control">
                                                </td>
                                                <td id="2024-3-<?php echo $i ?>" class="meninggal" style="display: none;">
                                                    <div class="form-check">
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-A" name="<?php echo $ques[$i+6]['dataKey']?>[]" value="A" <?php if (in_array('A', explode(',', $data[$ques[$i+6]['dataKey']]))) echo "checked"; ?>>Korban hilang<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-B" name="<?php echo $ques[$i+6]['dataKey']?>[]" value="B" <?php if (in_array('B', explode(',', $data[$ques[$i+6]['dataKey']]))) echo "checked"; ?>>Korban terluka/sakit<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-C" name="<?php echo $ques[$i+6]['dataKey']?>[]" value="C" <?php if (in_array('C', explode(',', $data[$ques[$i+6]['dataKey']]))) echo "checked"; ?>>Korban mengungsi<br>
                                                        <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $i; ?>-D" name="<?php echo $ques[$i+6]['dataKey']?>[]" value="D" <?php if (in_array('D', explode(',', $data[$ques[$i+6]['dataKey']]))) echo "checked"; ?>>Tidak ada korban hilang/terluka/sakit/mengungsi
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                                <hr/>
                                <div class="form-group">
                                    <h5>Fasilitas/upaya antisipasi/mitigasi bencana alam yang ada di desa/kelurahan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>a. Sistem peringatan dini bencana alam</label>
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604A" value="1" <?php if ($data['R604A'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604A" value="2" <?php if ($data['R604A'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>b. Sistem peringatan dini khusus tsunami</label>
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604B" value="1" <?php if ($data['R604B'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604B" value="2" <?php if ($data['R604B'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604B" value="3" <?php if ($data['R604B'] == 3) echo "checked"; ?>>
                                                        <label class="form-check-label">Bukan wilayah potensi tsunami</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>c. Perlengkapan keselamatan (perahu karet, tenda, masker, dll)</label>
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604C" value="1" <?php if ($data['R604C'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604C" value="2" <?php if ($data['R604C'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>d. Rambu-rambu dan jalur evakuasi bencana</label>
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604D" value="1" <?php if ($data['R604D'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604D" value="2" <?php if ($data['R604D'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>e. Pembuatan, perawatan, atau normalisasi: sungai, kanal, tanggul, parit, drainase, waduk, pantai, dll.</label>
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604E" value="1" <?php if ($data['R604E'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R604E" value="2" <?php if ($data['R604E'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Apakah Desa/RT/RW di bawahnya termasuk dalam:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 196; $i < 199; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
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
                                            </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 199; $i < 201; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
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
                                            </div>
                                        <?php endfor?>
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
                <a href="<?php echo base_url('data/create3/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>

<script>
    function onRadioChange(index, showColumns) {
        var tahun2023_1 = document.getElementById('2023-1-' + index);
        var tahun2023_2 = document.getElementById('2023-2-' + index);
        var tahun2023_3 = document.getElementById('2023-3-' + index);
        var tahun2024_1 = document.getElementById('2024-1-' + index);
        var tahun2024_2 = document.getElementById('2024-2-' + index);
        var tahun2024_3 = document.getElementById('2024-3-' + index);

        if (showColumns) {
            tahun2023_1.style.display = 'table-cell';
            tahun2023_2.style.display = 'table-cell';
            tahun2023_3.style.display = 'table-cell';
            tahun2024_1.style.display = 'table-cell';
            tahun2024_2.style.display = 'table-cell';
            tahun2024_3.style.display = 'table-cell';
        } else {
            tahun2023_1.style.display = 'none';
            tahun2023_2.style.display = 'none';
            tahun2023_3.style.display = 'none';
            tahun2024_1.style.display = 'none';
            tahun2024_2.style.display = 'none';
            tahun2024_3.style.display = 'none';
        }
    }

    window.onload = function() {
        <?php for ($i = 114; $i < 186; $i += 7): ?>
            var isAdaChecked = document.getElementById('input-radio-ada-<?php echo $i ?>').checked;
            var isTidakAdaChecked = document.getElementById('input-radio-tidak-<?php echo $i ?>').checked;
            if (isAdaChecked) {
                onRadioChange(<?php echo $i ?>, true);
            } else if (isTidakAdaChecked) {
                onRadioChange(<?php echo $i ?>, false);
            }
        <?php endfor ?>
    };
</script>