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
        <form action="<?php echo base_url('data/simpan9/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">X. PERLINDUNGAN SOSIAL, PEMBANGUNAN DAN PEMBERDAYAAN MASYARAKAT</h3>
                    </div>
                    <div class="card-body">
                        <h5>Penggunaan Dana Desa pada tahun 2023</h5>
                        <table class="table table-bordered">
                            <thead style="text-align:center; vertical-align: middle;">
                                <tr>
                                    <th>Jenis bantuan/kegiatan</th>
                                    <th>Penyaluran Dana Desa dalam bentuk:</th>
                                    <th>Berapa jumlah keluarga</th>
                                    <th>Nilai bantuan setiap per Keluarga (Rupiah)</th>
                                    <th>Persentase jumlah dana terhadap total Dana Desa yang diterima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-row="1">
                                    <td><label>a. Bantuan Langsung Tunai (Tiga bulan pertama)</label></td>
                                    <td style="text-align:center; vertical-align: middle;">
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501AK2" value="1" oninput='onRadioChange(event, 1)' <?php if ($data['R1501AK2'] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501AK2" value="2" oninput='onRadioChange(event, 1)' <?php if ($data['R1501AK2'] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501AK3" value="<?php echo $data['R1501AK3'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501AK4" value="<?php echo $data['R1501AK4'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501AK5" value="<?php echo $data['R1501AK5'] ?>" class="form-control">
                                    </td>
                                </tr>
                                <tr data-row="2">
                                    <td><label>b. Bantuan Langsung Tunai (Tiga bulan kedua)</label></td>
                                    <td style="text-align:center; vertical-align: middle;">
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501BK2" value="1" oninput='onRadioChange(event, 2)' <?php if ($data['R1501BK2'] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501BK2" value="2" oninput='onRadioChange(event, 2)' <?php if ($data['R1501BK2'] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501BK3" value="<?php echo $data['R1501BK3'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501BK4" value="<?php echo $data['R1501BK4'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501BK5" value="<?php echo $data['R1501BK5'] ?>" class="form-control">
                                    </td>
                                </tr>
                                <tr data-row="3">
                                    <td><label>c. Padat Karya Tunai Desa</label></td>
                                    <td style="text-align:center; vertical-align: middle;">
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501CK2" value="1" oninput='onRadioChange(event, 3)' <?php if ($data['R1501CK2'] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input class="form-check-input" type="radio" name="R1501CK2" value="2" oninput='onRadioChange(event, 3)' <?php if ($data['R1501CK2'] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501CK3" value="<?php echo $data['R1501CK3'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501CK4" value="<?php echo $data['R1501CK4'] ?>" class="form-control">
                                    </td>
                                    <td class="extra-column hidden">
                                        <input type="number" name="R1501CK5" value="<?php echo $data['R1501CK5'] ?>" class="form-control">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr/>
                        <h5>Paket layanan terkait stunting di desa selama tahun 2023</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kegiatan posyandu</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change(event)' name="R1502_1" value="1" <?php if ($data['R1502_1'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change(event)' name="R1502_1" value="2" <?php if ($data['R1502_1'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="posyandu" style="display:none;">
                                    <?php for ($i = 558; $i < 562; $i++): ?>
                                        <div class="form-group">
                                        &emsp;&emsp;<label><?php echo $ques[$i]['ques_label']?></label>
                                        <div style="margin-bottom:-9.5px;">
                                        &emsp;&emsp;&emsp;<div class="form-check-inline">
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
                                <?php for ($i = 562; $i < 567; $i++): ?>
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
                                <?php for ($i = 567; $i < 572; $i++): ?>
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
                            <div class="col-md-6">
                                <h5>Keberadaan program kegiatan pembangunan masyarakat</h5>
                                <?php for ($i = 572; $i < 575; $i++): ?>
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
                                <h5>Keberadaan program kegiatan pemberdayaan masyarakat</h5>
                                <?php for ($i = 575; $i < 578; $i++): ?>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/edit8/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function on_change(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('posyandu').style.display = 'block';
        } else {
        document.getElementById('posyandu').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('posyandu', selectedOption);
    }

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

    window.onload = function() {
        var selectedOption = window.localStorage.getItem('posyandu');

        if (selectedOption === '1') {
        document.getElementById('posyandu').style.display = 'block';
        } else {
        document.getElementById('posyandu').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('posyandu', selectedOption);
    }

</script>

<style>
    .hidden {
        display: none;
    }
</style>