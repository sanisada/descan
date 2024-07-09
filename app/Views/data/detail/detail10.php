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
        <form action="<?php echo base_url('data/save10/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">XI. KETERANGAN APARATUR PEMERINTAHAN DESA/KELURAHAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Keberadaan kepala desa/lurah dan sekretaris desa/sekretaris lurah</h5>
                                <table class="table table-bordered">
                                    <thead style="text-align:center; vertical-align: middle;">
                                        <tr>
                                            <th>Pemerintah desa/kelurahan</th>
                                            <th>Keberadaan</th>
                                            <th>Nama</th>
                                            <th>Umur (tahun)</th>
                                            <th>Jenis kelamin</th>
                                            <th>Pendidikan tertinggi terakhir yang ditamatkan</th>
                                            <th>Tahun mulai menjabat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-row="1">
                                            <td><label>a. Kepala desa/lurah</label></td>
                                            <td style="text-align:center; vertical-align: middle;">
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R1601AK2" value="1" oninput='onRadioChange(event, 1)' <?php if ($data['R1601AK2'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R1601AK2" value="2" oninput='onRadioChange(event, 1)' <?php if ($data['R1601AK2'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="text" name="R1601AK2_1" value="<?php echo $data['R1601AK2_1'] ?>" class="form-control">
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="number" name="R1601AK3" value="<?php echo $data['R1601AK3'] ?>" class="form-control">
                                            </td>
                                            <td class="extra-column hidden">
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
                                            </td>
                                            <td class="extra-column hidden">
                                            <select name="R1601AK5" class="form-control" style="width: 100%;" disabled="true">
                                                <option hidden>--Pilih Pendidikan--</option>
                                                <option value="1" <?php if ($data['R1601AK5'] == 1) echo "selected"; ?>>Tidak pernah sekolah</option>
                                                <option value="2" <?php if ($data['R1601AK5'] == 2) echo "selected"; ?>>Tidak tamat SD/Sederajat</option>
                                                <option value="3" <?php if ($data['R1601AK5'] == 3) echo "selected"; ?>>Tamat SD/Sederajat</option>
                                                <option value="4" <?php if ($data['R1601AK5'] == 4) echo "selected"; ?>>SMP/Sederajat</option>
                                                <option value="5" <?php if ($data['R1601AK5'] == 5) echo "selected"; ?>>SMU/Sederajat</option>
                                                <option value="6" <?php if ($data['R1601AK5'] == 6) echo "selected"; ?>>Akademi/DIII</option>
                                                <option value="7" <?php if ($data['R1601AK5'] == 7) echo "selected"; ?>>Diploma IV/S1</option>
                                                <option value="8" <?php if ($data['R1601AK5'] == 8) echo "selected"; ?>>S2</option>
                                                <option value="9" <?php if ($data['R1601AK5'] == 9) echo "selected"; ?>>S3</option>
                                            </select>
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="number" name="R1601AK6" value="<?php echo $data['R1601AK6'] ?>" class="form-control">
                                            </td>
                                        </tr>
                                        <tr data-row="2">
                                            <td><label>b. Sekretaris Desa/Sekretaris Kelurahan</label></td>
                                            <td style="text-align:center; vertical-align: middle;">
                                                <div style="margin-bottom:-9.5px;">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R1601BK2" value="1" oninput='onRadioChange(event, 2)' <?php if ($data['R1601BK2'] == 1) echo "checked"; ?>>
                                                        <label class="form-check-label">Ada</label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input" type="radio" name="R1601BK2" value="2" oninput='onRadioChange(event, 2)' <?php if ($data['R1601BK2'] == 2) echo "checked"; ?>>
                                                        <label class="form-check-label">Tidak ada</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="text" name="R1601BK2_1" value="<?php echo $data['R1601BK2_1'] ?>" class="form-control">
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="number" name="R1601BK3" value="<?php echo $data['R1601BK3'] ?>" class="form-control">
                                            </td>
                                            <td class="extra-column hidden">
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
                                            </td>
                                            <td class="extra-column hidden">
                                            <select name="R1601BK5" class="form-control" style="width: 100%;" disabled="true">
                                                <option hidden>--Pilih Pendidikan--</option>
                                                <option value="1" <?php if ($data['R1601BK5'] == 1) echo "selected"; ?>>Tidak pernah sekolah</option>
                                                <option value="2" <?php if ($data['R1601BK5'] == 2) echo "selected"; ?>>Tidak tamat SD/Sederajat</option>
                                                <option value="3" <?php if ($data['R1601BK5'] == 3) echo "selected"; ?>>Tamat SD/Sederajat</option>
                                                <option value="4" <?php if ($data['R1601BK5'] == 4) echo "selected"; ?>>SMP/Sederajat</option>
                                                <option value="5" <?php if ($data['R1601BK5'] == 5) echo "selected"; ?>>SMU/Sederajat</option>
                                                <option value="6" <?php if ($data['R1601BK5'] == 6) echo "selected"; ?>>Akademi/DIII</option>
                                                <option value="7" <?php if ($data['R1601BK5'] == 7) echo "selected"; ?>>Diploma IV/S1</option>
                                                <option value="8" <?php if ($data['R1601BK5'] == 8) echo "selected"; ?>>S2</option>
                                                <option value="9" <?php if ($data['R1601BK5'] == 9) echo "selected"; ?>>S3</option>
                                            </select>
                                            </td>
                                            <td class="extra-column hidden">
                                                <input type="number" name="R1601BK6" value="<?php echo $data['R1601BK6'] ?>" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr/>
                                <h5>Jumlah aparatur pemerintahan</h5>
                                <div class="row">
                                    <?php for ($i = 590; $i < 597; $i += 2): ?>
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
                                <div class="col-md-6">
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
                                        <input type="number" name="R1604B" value="<?php echo $data['R1604B']?>" class="form-control">
                                        <label for="">c. Jumlah calon pemilihan kepala desa</label>
                                        <input type="number" name="R1604C" value="<?php echo $data['R1604C']?>" class="form-control">
                                        <label for="">d. Persentase perolehan suara pemenang pemilihan kepala desa</label>
                                        <input type="number" name="R1604D" value="<?php echo $data['R1604D']?>" class="form-control">
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
            <a href="<?php echo base_url('data/detail9/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary"><i class="fas fa-arrow-left"></i>&ensp;Sebelumnya</button></a>
            <a href="<?php echo base_url('data_podes')?>"><button type="button" name="next" class="btn btn-md btn-info float-md-right">Selesai</button></a>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function onRadioChange(event, rowNumber) {
        const value = event.target.value;
        const row = document.querySelector(`tr[data-row="${rowNumber}"]`);
        const extraColumns = row.querySelectorAll('.extra-column');

        if (value == "1") { // Jika "Ada" dipilih
            extraColumns.forEach(column => column.classList.remove('hidden'));
        } else { // Jika "Tidak ada" dipilih
            extraColumns.forEach(column => column.classList.add('hidden'));
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi tampilan kolom berdasarkan nilai yang sudah ada saat memuat halaman
        document.querySelectorAll('tr[data-row]').forEach(row => {
            const radioAda = row.querySelector('input[type="radio"][value="1"]');
            if (radioAda.checked) {
                onRadioChange({ target: radioAda }, row.getAttribute('data-row'));
            }
        });
    });

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

    function on_change3(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1604').style.display = 'block';
        } else {
        document.getElementById('R1604').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1604', selectedOption);
    }

    window.onload = function() {
        let inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.type === 'radio' || input.type === 'checkbox') {
                input.disabled = true;
            } else {
                input.readOnly = true;
            }
        });

        // Jalankan fungsi checkValue pada awal saat halaman dimuat untuk memastikan kondisi awal
        <?php for ($i = 590; $i < 597; $i += 2): ?>
            checkValue(<?php echo $i ?>);
        <?php endfor ?>

        var selectedOption = window.localStorage.getItem('R1604');

        if (selectedOption === '1') {
        document.getElementById('R1604').style.display = 'block';
        } else {
        document.getElementById('R1604').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('R1604', selectedOption);
    }
</script>

<style>
    .hidden {
        display: none;
    }
    .input-pair {
        display: flex;
        align-items: center;
        gap: 20px; /* Adjust the gap between left and right inputs as needed */
    }
    .input-pair .form-group {
        flex: 1;
    }
</style>