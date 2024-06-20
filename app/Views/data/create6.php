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
        <form action="<?php echo base_url('Data/save6/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VII. SOSIAL BUDAYA</h3>
                    </div>
                    <div class="card-body">
                        <h5>Jumlah warga yang menganut agama/kepercayaan di desa/kelurahan</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <?php for ($i = 328; $i < 332; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                    </div>
                                <?php endfor?>
                            </div>
                            <div class="col-md-6">
                                <?php for ($i = 332; $i < 335; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                    </div>
                                <?php endfor?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Agama/kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan</label>
                            <select name="R802" class="form-control" style="width: 100%;">
                                <option hidden></option>
                                    <option value="1" <?php if ($data['R802'] == 1) echo "selected"; ?>>Islam</option>
                                    <option value="2" <?php if ($data['R802'] == 2) echo "selected"; ?>>Kristen</option>
                                    <option value="3" <?php if ($data['R802'] == 3) echo "selected"; ?>>Katolik</option>
                                    <option value="4" <?php if ($data['R802'] == 4) echo "selected"; ?>>Buddha</option>
                                    <option value="5" <?php if ($data['R802'] == 5) echo "selected"; ?>>Hindu</option>
                                    <option value="6" <?php if ($data['R802'] == 6) echo "selected"; ?>>Konghucu</option>
                                    <option value="7" <?php if ($data['R802'] == 7) echo "selected"; ?>>Aliran penghayat kepercayaan</option>
                            </select>
                        </div>
                        <h5>Jumlah tempat ibadah di desa/kelurahan</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <?php for ($i = 336; $i < 341; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                </div>
                                <?php endfor?>
                            </div>
                            <div class="col-md-6">
                                <?php for ($i = 341; $i < 346; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                </div>
                                <?php endfor?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr/>
                                <div class="form-group">
                                    <label>Warga desa/kelurahan terdiri dari beberapa suku/etnis:</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804A1" value="1" <?php if ($data['R804A1'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804A1" value="2" <?php if ($data['R804A1'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Warga desa/kelurahan berkomunikasi sehari–hari menggunakan beberapa bahasa</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804B1" value="1" <?php if ($data['R804B1'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804B1" value="2" <?php if ($data['R804B1'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Banyaknya penyandang disabilitas di desa/kelurahan:</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php for ($i = 348; $i < 353; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php for ($i = 353; $i < 357; $i++): ?>
                                        <div class="form-group">
                                            <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                            <input type="number" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                        </div>
                                        <?php endfor?>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[357]['ques_label']?></label>
                                    <input type="number" name="<?php echo $ques[357]['dataKey']?>" value="<?php echo $data[$ques[357]['dataKey']]  ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ruang publik terbuka yang peruntukan utamanya sebagai tempat bagi warga desa/kelurahan untuk bersantai/bermain tanpa perlu membayar</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R807A" value="1" <?php if ($data['R807A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, dikelola</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R807A" value="2" <?php if ($data['R807A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak dikelola</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R807A" value="3" <?php if ($data['R807A'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R807A1" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R807A1" value="<?php echo $data['R807A1']?>" class="form-control">
                                </div>
                                <hr/>
                                <h5>Jenis-jenis lembaga kemasyarakatan di desa/kelurahan:</h5>
                                <div class="form-group">
                                    <div class="row">
                                        <?php for ($i = 360; $i < 372; $i += 2): ?>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VIII. OLAHRAGA DAN HIBURAN</h3>
                    </div>
                    <div class="card-body">
                        <h5>Ketersediaan fasilitas/lapangan dan kelompok kegiatan olahraga di desa/kelurahan</h5>
                        <table class="table table-bordered">
                            <thead style="text-align:center;vertical-align: middle;">
                                <tr>
                                    <th style="text-align:center;vertical-align: middle;">Jenis olahraga</th>
                                    <th style="text-align:center;vertical-align: middle;">Fasilitas/lapangan olahraga</th>
                                    <th style="text-align:center;vertical-align: middle;">Kelompok kegiatan</th>
                                    <th style="text-align:center;vertical-align: middle;">Alamat fasilitas/lapangan olahraga</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 372; $i < 408; $i+= 3): ?>
                                <tr>
                                    <td>
                                        <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                    </td>
                                    <td>
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada baik</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Ada, rusak sedang</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="3" <?php if ($data[$ques[$i]['dataKey']] == 3) echo "checked"; ?>>
                                                <label class="form-check-label">Ada, rusak parah</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-tidak-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, false)' type="radio" name="<?php echo $ques[$i]['dataKey']?>" value="4" <?php if ($data[$ques[$i]['dataKey']] == 4) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td id="kelompok-<?php echo $i ?>" class="kelompok">
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input id="input-ada-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey']?>" value="1" <?php if ($data[$ques[$i + 1]['dataKey']] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada baik</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-tidak-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey']?>" value="2" <?php if ($data[$ques[$i + 1]['dataKey']] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div> 
                                    </td>
                                    <td id="alamat-<?php echo $i ?>" class="alamat" style="display:none;">
                                        <input type="text" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 2]['dataKey']] ?>" class="form-control">
                                    </td>
                                </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                        <hr/>
                        <div class="form-group">
                            <label>Keberadaan pub/diskotek/tempat karaoke yang masih berfungsi di desa/kelurahan</label>
                            <div style="margin-bottom:-9.5px;">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="R902A" value="1" <?php if ($data['R902A'] == 1) echo "checked"; ?>>
                                    <label class="form-check-label">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="R902A" value="2" <?php if ($data['R902A'] == 2) echo "checked"; ?>>
                                    <label class="form-check-label">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Jumlah menara telepon seluler atau Base Transceiver Station (BTS)</label>
                                <input id="R1005A" type="number" name="R1005A" value="<?php echo $data['R1005A']?>" class="form-control" oninput="checkInput()">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R1005A1" class="form-group" style="display:none;">
                                <label for="">Sebutkan alamatnya</label>
                                <input type="text" name="R1005A1" value="<?php echo $data['R1005A1']?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create5/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
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
        window.localStorage.setItem('inputsR807A1', selectedOption);
    }

    function checkInput() {
        // Ambil nilai dari input kiri
        var leftInput = document.getElementById('R1005A').value;
        // Jika nilai lebih besar dari 1, tampilkan input kanan, jika tidak, sembunyikan
        if (leftInput > 0) {
            document.getElementById('R1005A1').style.display = 'block';
        } else {
            document.getElementById('R1005A1').style.display = 'none';
        }
        window.localStorage.setItem('R1005A', leftInput);
    }

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

    function onRadioChange(index, isFacility) {
        // Ambil elemen berdasarkan index
        var alamatElement = document.getElementById('alamat-' + index);

        // Tampilkan atau sembunyikan elemen berdasarkan nilai radio
        if (isFacility) {
            var radioValue = document.querySelector('input[name="<?php echo $ques[$i]['dataKey']?>"]:checked').value;
            if (radioValue == 1 || radioValue == 2 || radioValue == 3) {
                alamatElement.style.display = 'table-cell';
            } else {
                alamatElement.style.display = 'none';
            }
        } else {
            alamatElement.style.display = 'none';
        }
    }

    window.onload = function() {
        var selectedOption = window.localStorage.getItem('inputsR807A1');
        var R1005A = window.localStorage.getItem('R1005A');


        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R807A1').style.display = 'block';
        } else {
        document.getElementById('R807A1').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('inputsR807A1', selectedOption);

        // Jalankan fungsi checkValue pada awal saat halaman dimuat untuk memastikan kondisi awal
        <?php for ($i = 360; $i < 372; $i += 2): ?>
            checkValue(<?php echo $i ?>);
        <?php endfor ?>

        if (R1005A > 0) {
            document.getElementById('R1005A1').style.display = 'block';
        } else {
            document.getElementById('R1005A1').style.display = 'none';
        }
        window.localStorage.setItem('R1005A', R1005A);

        <?php for ($i = 372; $i < 408; $i+= 3): ?>
            onRadioChange(<?php echo $i ?>, true);
        <?php endfor ?>
    }

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