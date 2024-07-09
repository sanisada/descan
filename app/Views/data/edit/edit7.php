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
        <form action="<?php echo base_url('data/simpan7/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VII. PENGGUNAAN LAHAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Luas lahan menurut jenis penggunaan lahan: (1 km2 = 100 ha)</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 410; $i < 412; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 412; $i < 414; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VIII. EKONOMI</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja) menurut jenis produk :</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 414; $i < 422; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 422; $i < 430; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $ques[430]['ques_label']?></label>
                                    <input type="number" name="<?php echo $ques[430]['dataKey']?>" value="<?php echo ($data[$ques[430]['dataKey']])?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keberadaan produk barang unggulan/utama di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1203A" value="1" <?php if ($data['R1203A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R1203A" value="2" <?php if ($data['R1203A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Jumlah bank yang beroperasi di desa/kelurahan</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 432; $i < 434; $i++): ?>
                                        <div class="form-group">
                                            <label><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $ques[435]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[435]['dataKey']?>" value="<?php echo ($data[$ques[435]['dataKey']])?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Jumlah koperasi di desa/kelurahan yang masih aktif</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 435; $i < 437; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 437; $i < 439; $i++): ?>
                                            <div class="form-group">
                                                <label><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                            </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Keberadaan sarana penunjang ekonomi di desa/kelurahan</h5>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th>Jumlah sarana penunjang ekonomi</th>
                                            <th>Jika tidak ada sarana penunjang ekonomi, untuk mencapai sarana penunjang ekonomi terdekat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $interval = 3; 
                                        for ($i = 439; $i < 466; $i += $interval): 
                                        ?>
                                        <tr>
                                            <td>
                                                <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                <input type="number" id="input-lefts-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInputs(<?php echo $i ?>)">
                                            </td>
                                            <td id="ekonomi-<?php echo $i ?>" class="ekonomi" style="display:none;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""><?php echo $ques[$i + 1]['ques_label'] ?></label>
                                                            <input type="number" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""><?php echo $ques[$i + 2]['ques_label'] ?></label>
                                                            <div style="margin-bottom:-9.5px;">
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i + 2]['dataKey']] == 1) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sangat mudah</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i + 2]['dataKey']] == 2) echo "checked"; ?>>
                                                                    <label class="form-check-label">Mudah</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="3" <?php if ($data[$ques[$i + 2]['dataKey']] == 3) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sulit</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i +2]['dataKey'] ?>" value="4" <?php if ($data[$ques[$i + 2]['dataKey']] == 4) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sangat sulit</label>
                                                                </div>
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
                                <h5>Jumlah sarana dan prasarana ekonomi di desa/kelurahan</h5>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th rowspan="2" style="text-align:center;vertical-align: middle;">Jenis sarana dan prasarana ekonomi</th>
                                            <th rowspan="2" style="text-align:center;vertical-align: middle;">Jumlah</th>
                                            <th colspan="2" style="text-align:center;vertical-align: middle;">Jika tidak ada sarana ekonomi, untuk mencapai sarana ekonomi terdekat</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;vertical-align: middle;">Jarak (km)</th>
                                            <th style="text-align:center;vertical-align: middle;">Kemudahan untuk mencapai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $interval = 3; for ($i = 466; $i < 496; $i += $interval): ?>
                                        <tr>
                                            <td>
                                                <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                            </td>
                                            <td>
                                                <input type="number" id="input-sarana-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInputs1(<?php echo $i ?>)">
                                            </td>
                                            <td id="ekonomis-1-<?php echo $i ?>" class="ekonomis" style="display:none;">
                                                <div class="form-group">
                                                    <input type="number" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                                </div>
                                            </td>
                                            <td id="ekonomis-2-<?php echo $i ?>" class="ekonomis" style="display:none;">
                                                <div class="form-group">
                                                    <div style="margin-bottom:-9.5px;">
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i + 2]['dataKey']] == 1) echo "checked"; ?>>
                                                            <label class="form-check-label">Sangat mudah</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i + 2]['dataKey']] == 2) echo "checked"; ?>>
                                                            <label class="form-check-label">Mudah</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="3" <?php if ($data[$ques[$i + 2]['dataKey']] == 3) echo "checked"; ?>>
                                                            <label class="form-check-label">Sulit</label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <input class="form-check-input" type="radio" name="<?php echo $ques[$i +2]['dataKey'] ?>" value="4" <?php if ($data[$ques[$i + 2]['dataKey']] == 4) echo "checked"; ?>>
                                                            <label class="form-check-label">Sangat sulit</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/edit6/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
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
        document.getElementById('R807A1').style.display = 'block';
        } else {
        document.getElementById('R807A1').style.display = 'none'; // Hide el
        }
    }

    function checkInputs(index) {
        var leftInput = document.getElementById('input-lefts-' + index).value;
        var ekonomi = document.getElementById('ekonomi-' + index);

        if (leftInput === '0' || leftInput === 0) {
            ekonomi.style.display = 'table-cell';
        } else {
            ekonomi.style.display = 'none';
        }
    }

    function checkInputs1(index) {
        var leftInputs = document.getElementById('input-sarana-' + index).value;
        var ekonomi1 = document.getElementById('ekonomis-1-' + index);
        var ekonomi2 = document.getElementById('ekonomis-2-' + index);

        if (leftInputs === '0' || leftInputs === 0) {
            ekonomi1.style.display = 'table-cell';
            ekonomi2.style.display = 'table-cell';
        } else {
            ekonomi1.style.display = 'none';
            ekonomi2.style.display = 'none';
        }
    }

    window.onload = function() {
        <?php for ($i = 439; $i < 466; $i += 3): ?>
        checkInputs(<?php echo $i ?>);
        <?php endfor ?>

        <?php for ($i = 466; $i < 496; $i += 3): ?>
        checkInputs1(<?php echo $i ?>);
        <?php endfor ?>
    };

</script>