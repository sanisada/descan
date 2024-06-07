<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Tambah Data Potensi Desa</h3>
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
                                <div class="form-group">
                                    <h5>Kejadian/bencana alam (mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat) yang terjadi pada tahun 2023 dan 2024 (Januari-April)</h5>
                                    <label>Kejadian/Bencana Alam<i> (beri tanda cek jika ada)</i></label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601AK2" value="1" <?php if ($data['R601AK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Tanah Longsor</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601BK2" value="1" <?php if ($data['R601BK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Banjir</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601CK2" value="1" <?php if ($data['R601CK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Banjir bandang</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601DK2" value="1" <?php if ($data['R601DK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Gempa bumi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601EK2" value="1" <?php if ($data['R601EK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Tsunami</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601FK2" value="1" <?php if ($data['R601FK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Gelombang pasang laut</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601GK2" value="1" <?php if ($data['R601GK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Angin puyuh/puting beliung/topan</label>
                                                    </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601HK2" value="1" <?php if ($data['R601HK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Gunung meletus</label>
                                                    </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601IK2" value="1" <?php if ($data['R601IK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Kebakaran hutan dan lahan</label>
                                                    </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601JK2" value="1" <?php if ($data['R601JK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Kekeringan (lahan)</label>
                                                    </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="R601KK2" value="1" <?php if ($data['R601KK2'] == 1) echo "checked"; ?>>
                                                    <label class="form-check-label">Abrasi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <h5>Fasilitas/upaya antisipasi/mitigasi bencana alam yang ada di desa/kelurahan</h5>
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
                                <hr/>
                                <h5>Apakah Desa/SLS di bawahnya termasuk dalam:</h5>
                                <?php for ($i = 188; $i < 193; $i++): ?>
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

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('data/create3/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>