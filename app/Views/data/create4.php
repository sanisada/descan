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
        <form action="<?php echo base_url('Data/save4/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">V. BENCANA ALAM DAN MITIGASI BENCANA ALAM</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:25px;">
                                    <h5>Kejadian/bencana alam (mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat) yang terjadi pada tahun 2023 dan 2024 (Januari-April)</h5>
                                    <label>Kejadian/Bencana Alam<i> (beri tanda cek jika ada)</i></label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?php $interval = 7; for ($i = 114; $i < 150; $i += $interval): ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" oninput="toggleUsage(<?php echo $i; ?>)" type="checkbox" id="checkbox-<?php echo $i; ?>" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label"><?php echo $ques[$i]['ques_label']?></label>
                                                    </div>
                                                <?php endfor?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php $interval = 7; for ($i = 156; $i < 186; $i += $interval): ?>
                                                    <div class="form-check">
                                                            <input class="form-check-input" oninput="toggleUsage(<?php echo $i; ?>)" type="checkbox" id="checkbox-<?php echo $i; ?>" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label"><?php echo $ques[$i]['ques_label']?></label>
                                                    </div>
                                                <?php endfor?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $initialI = 114; $interval = 7; 
                                    for ($i = $initialI; $i < 186; $i += $interval): ?>
                                        <div class="form-group" id="usage-<?php echo $i; ?>" style="display: none;">
                                            <hr/>
                                            <h5><?php echo $ques[$i]['ques_label']?></h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php $startJ = $i + 1; $finishJ = $i + 2; for ($j = $startJ; $j < $finishJ; $j++): ?>
                                                        <label for=""><?php echo $ques[$j]['ques_label']?></label>
                                                        <input type="number" oninput="toggleInputs(<?php echo $i; ?>)" name="<?php echo $ques[$j]['dataKey']?>" id="input-<?php echo $j-1; ?>" value="<?php echo $data[$ques[$j]['dataKey']]  ?>" class="form-control">
                                                    <?php endfor?>
                                                    <div class="form-group" id="input-group-<?php echo $i; ?>" style="display: none;">
                                                        <label for=""><?php echo $ques[$j]['ques_label']?></label>
                                                        <input type="number" name="<?php echo $ques[$j]['dataKey']?>" value="<?php echo $data[$ques[$j]['dataKey']]  ?>" class="form-control">
                                                        <div class="form-group">
                                                            <label><?php echo $ques[$j+1]['ques_label']?></label>
                                                            <div class="form-check">
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-A" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="A" <?php if (in_array('A', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban hilang
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-B" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="B" <?php if (in_array('B', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban terluka/sakit
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-C" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="C" <?php if (in_array('C', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban mengungsi
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-D" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="D" <?php if (in_array('D', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Tidak ada korban hilang/terluka/sakit/mengungsi
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php $startJ = $i + 4; $finishJ = $i + 5; for ($j = $startJ; $j < $finishJ; $j++): ?>
                                                        <label for=""><?php echo $ques[$j]['ques_label']?></label>
                                                        <input type="number" oninput="toggleInputs1(<?php echo $i; ?>)" name="<?php echo $ques[$j]['dataKey']?>" id="inputs-<?php echo $j-4; ?>" value="<?php echo $data[$ques[$j]['dataKey']]  ?>" class="form-control">
                                                    <?php endfor?>
                                                    <div class="form-group" id="input-groups-<?php echo $i; ?>" style="display: none;">
                                                        <label for=""><?php echo $ques[$j]['ques_label']?></label>
                                                        <input type="number" name="<?php echo $ques[$j]['dataKey']?>" value="<?php echo $data[$ques[$j]['dataKey']]  ?>" class="form-control">
                                                        <div class="form-group">
                                                            <label><?php echo $ques[$j+1]['ques_label']?></label>
                                                            <div class="form-check">
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-A" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="A" <?php if (in_array('A', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban hilang
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-B" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="B" <?php if (in_array('B', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban terluka/sakit
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-C" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="C" <?php if (in_array('C', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Korban mengungsi
                                                                <input style="margin: 5px;" type="checkbox" id="checkbox-<?php echo $finishJ; ?>-D" name="<?php echo $ques[$j+1]['dataKey']?>[]" value="D" <?php if (in_array('D', explode(',', $data[$ques[$j+1]['dataKey']]))) echo "checked"; ?>>Tidak ada korban hilang/terluka/sakit/mengungsi
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <?php endfor?>
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
    function toggleUsage(index) {
        var checkbox = document.getElementById('checkbox-' + index);
        var usageDiv = document.getElementById('usage-' + index);
        if (checkbox.checked) {
            usageDiv.style.display = 'block';
        } else {
            usageDiv.style.display = 'none';
        }
    }

    function toggleInputs(index) {
        var input = document.getElementById('input-' + index);
        var inputGroup = document.getElementById('input-group-' + index);
        if (input.value > 0) {
            inputGroup.style.display = 'block';
        } else {
            inputGroup.style.display = 'none';
        }
        window.localStorage.setItem('input', input);
    }
    
    function toggleInputs1(index) {
        var inputs = document.getElementById('inputs-' + index);
        var inputGroups = document.getElementById('input-groups-' + index);
        if (inputs.value > 0) {
            inputGroups.style.display = 'block';
        } else {
            inputGroups.style.display = 'none';
        }
        window.localStorage.setItem('inputs', inputs);
    }

    // Initialize the display state based on the initial checkbox states
    document.addEventListener("DOMContentLoaded", function() {
        <?php for ($i = $initialI; $i < 186; $i += $interval): ?>
            toggleUsage(<?php echo $i; ?>);
            toggleInputs(<?php echo $i; ?>);
            toggleInputs1(<?php echo $i; ?>);
        <?php endfor ?>
    });

</script>