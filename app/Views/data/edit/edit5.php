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
        <form action="<?php echo base_url('data/simpan5/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VI. PENDIDIKAN DAN KESEHATAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>601. Keberadaan sarana pendidikan menurut jenjang pendidikan di desa/kelurahan</h5>
                                </div>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th colspan="2">Jenis/jenjang pendidikan</th>
                                            <th colspan="2">Jika tidak ada lembaga pendidikan di desa/kelurahan, untuk mencapai sarana pendidikan terdekat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $interval = 4;
                                        $k = 603;
                                        for ($i = 201; $i < 258; $i += $interval): 
                                            if ($i == 253) {
                                                $interval = 1;
                                            } else if ($i >= 240 && $i < 253) {
                                                $interval = 2;
                                            }
                                        ?>
                                        <tr>
                                            <!-- Input Left -->
                                            <td>
                                                <?php if ($i == 253 || $i == 254): ?>
                                                    <!-- Kosongkan kolom input-left untuk $i == 253 -->
                                                <?php else: ?>
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="input-lefts-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInputs(<?php echo $i ?>, <?php echo $k ?>, <?php echo $k + 1 ?>)">
                                                <?php endif; ?>
                                                <!-- Input below Left -->
                                                <div id="input-below-left-<?php echo $k ?>" style="display: none; margin-top: 10px;">
                                                    <label for=""><?php echo $ques[$k]['ques_label'] ?></label>
                                                    <input type="text" id="input-lefts-below-<?php echo $k ?>" name="<?php echo $ques[$k]['dataKey']?>" value="<?php echo $data[$ques[$k]['dataKey']] ?>" class="form-control">
                                                </div>
                                            </td>

                                            <!-- Input Right -->
                                            <td>
                                                <?php if ($i == 253): ?>
                                                    <!-- Tampilkan input-left di kolom input-right untuk $i == 253 -->
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="input-rights-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInputs(<?php echo $i ?>, <?php echo $k ?>, <?php echo $k + 1 ?>)">
                                                <?php elseif ($i == 254): ?>
                                                    <!-- Tampilkan input-left di kolom input-right untuk $i == 255, di bawah $i == 253 -->
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="input-rights-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInputs(<?php echo $i ?>, <?php echo $k ?>, <?php echo $k + 1 ?>)">
                                                <?php else: ?>
                                                    <label for=""><?php echo $ques[$i+1]['ques_label'] ?></label>
                                                    <input type="number" id="input-rights-<?php echo $i ?>" name="<?php echo $ques[$i + 1]['dataKey']?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control" oninput="checkInputs(<?php echo $i ?>, <?php echo $k ?>, <?php echo $k + 1 ?>)">
                                                <?php endif; ?>
                                                <!-- Input below Right -->
                                                <div id="input-below-right-<?php echo $k + 1 ?>" style="display: none; margin-top: 10px;">
                                                    <label for=""><?php echo $ques[$k + 1]['ques_label'] ?></label>
                                                    <input type="text" id="input-rights-below-<?php echo $k + 1 ?>" name="<?php echo $ques[$k + 1]['dataKey']?>" value="<?php echo $data[$ques[$k + 1]['dataKey']] ?>" class="form-control">
                                                </div>
                                            </td>
                                            <td id="pendidikan-<?php echo $i ?>" class="pendidikan" style="display:none;">
                                                <?php if ($i < 244 || $i > 256): ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""><?php echo $ques[$i + 2]['ques_label'] ?></label>
                                                            <input type="number" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 2]['dataKey']] ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""><?php echo $ques[$i + 3]['ques_label'] ?></label>
                                                            <div style="margin-bottom:-9.5px;">
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 3]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i + 3]['dataKey']] == 1) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sangat mudah</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 3]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i + 3]['dataKey']] == 2) echo "checked"; ?>>
                                                                    <label class="form-check-label">Mudah</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 3]['dataKey'] ?>" value="3" <?php if ($data[$ques[$i + 3]['dataKey']] == 3) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sulit</label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="<?php echo $ques[$i + 3]['dataKey'] ?>" value="4" <?php if ($data[$ques[$i + 3]['dataKey']] == 4) echo "checked"; ?>>
                                                                    <label class="form-check-label">Sangat sulit</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                        </tr>
                                        <?php 
                                            if ($i >= 244 && $i < 253) {
                                                $interval = 2;
                                            } elseif ($i == 253) {
                                                $interval = 1;
                                            } else {
                                                $interval = 4;
                                            }

                                            // Increment $k to match the required mapping
                                            $intervalK = 2;
                                            
                                            if ($k >= 631) {
                                                $intervalK = 1;
                                            }
                                            $k += $intervalK;
                                        ?>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                                <hr/>
                                <h5>602. </h5>
                                <?php for ($i = 256; $i < 259; $i++): ?>
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
                                <?php endfor?>
                                <hr/>
                                <h5>603. Keberadaan sarana/prasarana keterampilan di desa/kelurahan, sebutkan namanya</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 259; $i < 263; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 263; $i < 266; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>604. Keberadaan sarana kesehatan di desa/kelurahan</h5>
                                    <table class="table table-bordered">
                                        <thead style="text-align:center;vertical-align: middle;">
                                            <tr>
                                                <th style="width: 33%;">Jumlah sarana kesehatan</th>
                                                <th style="width: 67%;">Sebutkan namanya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 266; $i < 279; $i ++): ?>
                                            <tr>
                                                <td class="col-4">
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="jumlah-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkInput(<?php echo $i ?>)">
                                                </td>
                                                <td class="col-8" id="name-<?php echo $i ?>" style="display: none;">
                                                    <label for=""><?php echo $ques[$i + 370]['ques_label'] ?></label>
                                                    <input type="text" id="nama-<?php echo $i ?>" name="<?php echo $ques[$i + 370]['dataKey']?>" value="<?php echo $data[$ques[$i + 370]['dataKey']] ?>" class="form-control">
                                                </td>
                                            </tr>
                                            <?php endfor ?>
                                        </tbody>
                                    </table>
                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 266; $i < 273; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 273; $i < 279; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                    </div> -->
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>605. Jumlah Upaya Kesehatan Bersumberdaya Masyarakat (UKBM) selama <b>setahun terakhir</b></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 279; $i < 282; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($i = 282; $i < 284; $i++): ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                            <?php endfor?>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>606. Tenaga kesehatan yang tinggal/menetap di desa/kelurahan</h5>
                                    <div class="row">
                                        <?php for ($i = 284; $i < 294; $i += 2): ?>
                                            <div class="col-md-12 input-pair">
                                                <div class="form-group">
                                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                                    <input type="number" id="input-<?php echo $i ?>" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" oninput="checkValue(<?php echo $i ?>)">
                                                </div>
                                                <div class="form-group" id="right-input-<?php echo $i + 1 ?>" style="display: none;">
                                                    <label for=""><?php echo $ques[$i + 1]['ques_label'] ?></label>
                                                    <input type="text" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                                </div>
                                            </div>
                                        <?php endfor ?>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label>607. Keberadaan Bidan Di Desa (BDD)</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="1" <?php if ($data['R707'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="2" <?php if ($data['R707'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <?php for ($i = 295; $i < 298; $i++): ?>
                                    <div class="form-group">
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    </div>
                                    <?php endfor?>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir</h5>
                                </div>
                                <table class="table table-bordered">
                                    <thead style="text-align:center;vertical-align: middle;">
                                        <tr>
                                            <th>Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir<br/>
                                                <small>(KLB adalah timbulnya atau meningkatnya kejadian kesakitan atau kematian yang bermakna secara epidemiologis pada suatu daerah dalam kurun waktu tertentu, ditetapkan oleh pemerintah)</small>
                                            </th>
                                            <th style="text-align:center;vertical-align: middle;">Kejadian</th>
                                            <th style="text-align:center;vertical-align: middle;">Jumlah penderita</th>
                                            <th style="text-align:center;vertical-align: middle;">Jumlah penderita yang meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 298; $i < 328; $i+= 3): ?>
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
                                            <td id="jumlah-penderita-<?php echo $i ?>" class="penderita" style="display:none;">
                                                <input type="number" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 1]['dataKey']] ?>" class="form-control">
                                            </td>
                                            <td id="jumlah-meninggal-<?php echo $i ?>" class="meninggal" style="display:none;">
                                                <input type="number" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 2]['dataKey']] ?>" class="form-control">
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
                <a href="<?php echo base_url('data/edit4/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>

<script>
    function checkValue(index) {
        // Ambil nilai dari input kiri
        var leftInput = document.getElementById('input-' + index).value;

        // Ambil elemen input kanan
        var rightInput = document.getElementById('right-input-' + (index + 1));

        // Jika nilai lebih besar dari 1, tampilkan input kanan, jika tidak, sembunyikan
        if (leftInput > 0) {
            rightInput.style.display = 'block';
        } else {
            rightInput.style.display = 'none';
        }
    }

    // function checkInputs(index) {
    //     var leftInput = document.getElementById('input-lefts-' + index) ? document.getElementById('input-lefts-' + index).value : 0;
    //     var rightInput = document.getElementById('input-rights-' + index) ? document.getElementById('input-rights-' + index).value : 0;
    //     var pendidikan = document.getElementById('pendidikan-' + index);

    //     if ((index < 247 || index > 256) && leftInput == 0 && rightInput == 0) {
    //         pendidikan.style.display = 'table-cell';
    //     } else {
    //         pendidikan.style.display = 'none';
    //     }
    // }
    function checkInputs(index, kLeft, kRight) {
        // Get the main input elements
        var leftInput = document.getElementById('input-lefts-' + index);
        var rightInput = document.getElementById('input-rights-' + index);

        // Get the below input elements corresponding to the main inputs
        var leftBelowInput = document.getElementById('input-below-left-' + kLeft);
        var rightBelowInput = document.getElementById('input-below-right-' + kRight);
        var pendidikan = document.getElementById('pendidikan-' + index);

        // console.log("Checking inputs for index: " + index);
        // console.log("Left Input Value: ", leftInput ? leftInput.value : "N/A");
        // console.log("Right Input Value: ", rightInput ? rightInput.value : "N/A");

        // Handle the pendidikan row display
        if ((index < 247 || index > 256) && ((!leftInput.value && !rightInput.value) || (leftInput.value == 0 && rightInput.value == 0))) {
            pendidikan.style.display = 'table-cell';
            // console.log("Pendidikan row shown for index: " + index);
        } else {
            pendidikan.style.display = 'none';
            // console.log("Pendidikan row hidden for index: " + index);
        }

        // Show/hide the leftBelowInput based on the leftInput's value
        if (leftInput && leftBelowInput) {
            if (leftInput.value > 0) {
                leftBelowInput.style.display = 'block';
            } else {
                leftBelowInput.style.display = 'none';
            }
        }

        // Show/hide the rightBelowInput based on the rightInput's value
        if (rightInput && rightBelowInput) {
            if (rightInput.value > 0) {
                rightBelowInput.style.display = 'block';
            } else {
                rightBelowInput.style.display = 'none';
            }
        }
    }

    // Jalankan fungsi checkInputs pada awal saat halaman dimuat untuk memastikan kondisi awal
    window.onload = function() {
        // Jalankan fungsi checkValue pada awal saat halaman dimuat untuk memastikan kondisi awal
        <?php for ($i = 284; $i < 294; $i += 2): ?>
            checkValue(<?php echo $i ?>);
        <?php endfor ?>

        <?php
            $k = 603; // Inisialisasi variabel $k sebelum loop 

            for ($i = 201; $i < 257; $i += 4) :
                if ($k >= 631) {
                    $intervalK = 1; // Jika $k >= 631, set intervalK menjadi 1
                } else {
                    $intervalK = 2; // Jika tidak, set intervalK menjadi 2
                } ?>
                checkInputs(<?php echo $i ?>, <?php echo $k ?>, <?php echo $k + 1 ?>); // Panggil fungsi checkInputs dengan $i, $k, dan $k + 1
                <?php $k += $intervalK; // Tingkatkan $k berdasarkan interval
         endfor ?>

        <?php for ($i = 298; $i < 328; $i += 3): ?>
            var isAdaChecked = document.getElementById('input-radio-ada-<?php echo $i ?>').checked;
            var isTidakAdaChecked = document.getElementById('input-radio-tidak-<?php echo $i ?>').checked;
            if (isAdaChecked) {
                onRadioChange(<?php echo $i ?>, true);
            } else if (isTidakAdaChecked) {
                onRadioChange(<?php echo $i ?>, false);
            }
        <?php endfor ?>
    };

    function onRadioChange(index, isAda) {
        // Ambil elemen berdasarkan index
        var penderita = document.getElementById('jumlah-penderita-' + index);
        var meninggal = document.getElementById('jumlah-meninggal-' + index);

        // Tampilkan atau sembunyikan elemen berdasarkan nilai radio
        if (isAda) {
            penderita.style.display = 'table-cell';
            meninggal.style.display = 'table-cell';
        } else {
            penderita.style.display = 'none';
            meninggal.style.display = 'none';
        }
    }

    function checkInput(index) {
        var jumlahInput = document.getElementById('jumlah-' + index);
        var nameCell = document.getElementById('name-' + index);

        if (jumlahInput.value > 0) {
            nameCell.style.display = 'table-cell';
        } else {
            nameCell.style.display = 'none';
        }
    }

    // Initialize the display state based on existing values
    document.addEventListener('DOMContentLoaded', function() {
        <?php for ($i = 266; $i < 279; $i ++): ?>
            checkInput(<?php echo $i; ?>);
        <?php endfor; ?>
    });
</script>


<style>
    .input-pair {
        display: flex;
        align-items: center;
        gap: 20px; /* Adjust the gap between left and right inputs as needed */
    }
    .input-pair .form-group {
        flex: 1;
    }
</style>