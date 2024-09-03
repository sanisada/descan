<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tambah Data Potensi Pekon Tahun <?php echo $data['Tahun']?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_prospera">Data Potensi Pekon</a></li>
                    <li class="breadcrumb-item active">Tambah Data Potensi Pekon</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <form action="<?php echo base_url('data/save6/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VII. SOSIAL BUDAYA</h3>
                    </div>
                    <div class="card-body">
                        <h5>701. Jumlah warga yang menganut agama/kepercayaan di desa/kelurahan</h5>
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
                            <h5>702. Agama/kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan</h5>
                            <select name="R702" class="form-control" style="width: 100%;">
                                <option hidden></option>
                                    <option value="1" <?php if ($data['R702'] == 1) echo "selected"; ?>>Islam</option>
                                    <option value="2" <?php if ($data['R702'] == 2) echo "selected"; ?>>Kristen</option>
                                    <option value="3" <?php if ($data['R702'] == 3) echo "selected"; ?>>Katolik</option>
                                    <option value="4" <?php if ($data['R702'] == 4) echo "selected"; ?>>Buddha</option>
                                    <option value="5" <?php if ($data['R702'] == 5) echo "selected"; ?>>Hindu</option>
                                    <option value="6" <?php if ($data['R702'] == 6) echo "selected"; ?>>Konghucu</option>
                                    <option value="7" <?php if ($data['R702'] == 7) echo "selected"; ?>>Aliran penghayat kepercayaan</option>
                            </select>
                        </div>
                        <h5>703. Jumlah tempat ibadah di desa/kelurahan</h5>
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
                                    <label>704. a. Warga desa/kelurahan terdiri dari beberapa suku/etnis:</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R704A" value="1" <?php if ($data['R704A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R704A" value="2" <?php if ($data['R704A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>b. Warga desa/kelurahan berkomunikasi sehari–hari menggunakan beberapa bahasa</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R704B" value="1" <?php if ($data['R704B'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R704B" value="2" <?php if ($data['R704B'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>705. Banyaknya penyandang disabilitas di desa/kelurahan:</h5>
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
                                    <label>707. Ruang publik terbuka yang peruntukan utamanya sebagai tempat bagi warga desa/kelurahan untuk bersantai/bermain tanpa perlu membayar</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="1" <?php if ($data['R707'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, dikelola</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="2" <?php if ($data['R707'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Ada, tidak dikelola</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R707" value="3" <?php if ($data['R707'] == 3) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R707S" class="form-group" style="display:none;">
                                    <label for="">Sebutkan namanya</label>
                                    <input type="text" name="R707S" value="<?php echo $data['R707S']?>" class="form-control">
                                </div>
                                <hr/>
                                <h5>708. Jumlah jenis-jenis lembaga kemasyarakatan di desa/kelurahan:</h5>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php for ($i = 360; $i < 366; $i += 2): ?>
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
                                        <div class="col-md-6">
                                            <?php for ($i = 366; $i < 372; $i += 2): ?>
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
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VIII. OLAHRAGA DAN HIBURAN</h3>
                    </div>
                    <div class="card-body">
                        <h5>801. Ketersediaan fasilitas/lapangan dan kelompok kegiatan olahraga di desa/kelurahan</h5>
                        <table class="table table-bordered">
                            <!-- Table header -->
                            <thead style="text-align:center;vertical-align: middle;">
                                <tr>
                                    <th>Jenis olahraga</th>
                                    <th>Fasilitas/lapangan olahraga</th>
                                    <th>Kelompok kegiatan</th>
                                    <th>Alamat fasilitas/lapangan olahraga</th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                                <?php for ($i = 372; $i < 408; $i+= 3): ?>
                                <tr>
                                    <!-- Sport Type -->
                                    <td>
                                        <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                    </td>
                                    <!-- Facility Status -->
                                    <td>
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i]['dataKey']] == 1) echo "checked"; ?>>
                                                <label class="form-check-label" for="input-radio-ada-<?php echo $i ?>-1">Ada baik</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i]['dataKey']] == 2) echo "checked"; ?>>
                                                <label class="form-check-label" for="input-radio-ada-<?php echo $i ?>-2">Ada, rusak sedang</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-ada-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, true)' type="radio" name="<?php echo $ques[$i]['dataKey'] ?>" value="3" <?php if ($data[$ques[$i]['dataKey']] == 3) echo "checked"; ?>>
                                                <label class="form-check-label" for="input-radio-ada-<?php echo $i ?>-3">Ada, rusak parah</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-radio-tidak-<?php echo $i ?>" class="form-check-input" onchange='onRadioChange(<?php echo $i ?>, false)' type="radio" name="<?php echo $ques[$i]['dataKey'] ?>" value="4" <?php if ($data[$ques[$i]['dataKey']] == 4) echo "checked"; ?>>
                                                <label class="form-check-label" for="input-radio-ada-<?php echo $i ?>-4">Tidak ada</label>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Activity Group -->
                                    <td id="kelompok-<?php echo $i ?>" class="kelompok">
                                        <div style="margin-bottom:-9.5px;">
                                            <div class="form-check-inline">
                                                <input id="input-ada-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="1" <?php if ($data[$ques[$i + 1]['dataKey']] == 1) echo "checked"; ?>>
                                                <label class="form-check-label">Ada</label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input id="input-tidak-<?php echo $i ?>" class="form-check-input" type="radio" name="<?php echo $ques[$i + 1]['dataKey'] ?>" value="2" <?php if ($data[$ques[$i + 1]['dataKey']] == 2) echo "checked"; ?>>
                                                <label class="form-check-label">Tidak ada</label>
                                            </div>
                                        </div> 
                                    </td>
                                    <!-- Facility Address -->
                                    <td id="alamat-<?php echo $i ?>" class="alamat" style="display:none;">
                                    <!-- <label for=""><?php echo $ques[$i]['dataKey'] ?></label> -->
                                        <input type="text" name="<?php echo $ques[$i + 2]['dataKey'] ?>" value="<?php echo $data[$ques[$i + 2]['dataKey']] ?>" class="form-control">
                                    </td>
                                </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>

                        <hr/>
                        <div class="form-group">
                            <label>802. Keberadaan pub/diskotek/tempat karaoke yang masih berfungsi di desa/kelurahan</label>
                            <div style="margin-bottom:-9.5px;">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="R802" value="1" <?php if ($data['R802'] == 1) echo "checked"; ?>>
                                    <label class="form-check-label">Ya</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="R802" value="2" <?php if ($data['R802'] == 2) echo "checked"; ?>>
                                    <label class="form-check-label">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">803. Jumlah menara telepon seluler atau Base Transceiver Station (BTS)</label>
                                <input id="R803" type="number" name="R803" value="<?php echo $data['R803']?>" class="form-control" oninput="checkInput()">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="R803S" class="form-group" style="display:none;">
                                <label for="">Sebutkan alamatnya</label>
                                <input type="text" name="R803S" value="<?php echo $data['R803S']?>" class="form-control">
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
        document.getElementById('R707S').style.display = 'block';
        } else {
        document.getElementById('R707S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('inputsR707S', selectedOption);
    }

    function checkInput() {
        // Ambil nilai dari input kiri
        var leftInput = document.getElementById('R803').value;
        // Jika nilai lebih besar dari 1, tampilkan input kanan, jika tidak, sembunyikan
        if (leftInput > 0) {
            document.getElementById('R803S').style.display = 'block';
        } else {
            document.getElementById('R803S').style.display = 'none';
        }
        window.localStorage.setItem('R803S', leftInput);
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
        // Try to find the element with the ID 'alamat-' + index
        var alamatElement = document.getElementById('alamat-' + index);
        console.log("Checking: " + isFacility);
        // Check if the element exists before trying to access its properties
        if (alamatElement) {
            console.log("Checking inputs for index: " + index);

            if (isFacility) {
                var selectedRadio = document.getElementById('input-radio-ada-' + index);
                console.log("Checking inputs for: " + selectedRadio);

                if (selectedRadio) {
                    var radioValue = selectedRadio.value;
                    console.log("radioValue: " + radioValue);


                    if (radioValue == '1' || radioValue == '2' || radioValue == '3') {
                        alamatElement.style.display = 'table-cell';
                    } else {
                        alamatElement.style.display = 'none';
                    }
                } else {
                    alamatElement.style.display = 'none';
                }
            } else {
                alamatElement.style.display = 'none';
            }
        } else {
            console.error('Element with ID "alamat-' + index + '" not found.');
        }
    }


    window.onload = function() {
        var selectedOption = window.localStorage.getItem('inputsR707S');
        var R803S = window.localStorage.getItem('R803S');

        if (selectedOption === '1' || selectedOption === '2') {
        document.getElementById('R707S').style.display = 'block';
        } else {
        document.getElementById('R707S').style.display = 'none'; // Hide el
        }
        window.localStorage.setItem('inputsR707S', selectedOption);

        // Jalankan fungsi checkValue pada awal saat halaman dimuat untuk memastikan kondisi awal
        <?php for ($i = 360; $i < 372; $i += 2): ?>
            checkValue(<?php echo $i ?>);
        <?php endfor ?>

        if (R803S > 0) {
            document.getElementById('R803S').style.display = 'block';  
        } else {
            document.getElementById('R803S').style.display = 'none';
        }
        window.localStorage.setItem('R803S', R803S);

        <?php for ($i = 372; $i < 408; $i+= 3): ?>
            var selectedRadio = document.querySelector('input[name="<?php echo $ques[$i]['dataKey'] ?>"]:checked');

            if (selectedRadio) {
                var isAdaChecked = selectedRadio.value;
                    if (isAdaChecked != 4) {
                    onRadioChange(<?php echo $i ?>, true);
                } else {
                    onRadioChange(<?php echo $i ?>, false);
                }
            }
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