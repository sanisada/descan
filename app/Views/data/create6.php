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
        <form action="<?php echo base_url('Data/save6/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VII. SOSIAL BUDAYA</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Keberadaan warga yang menganut agama/kepercayaan di desa/kelurahan</h5>
                                <?php for ($i = 320; $i < 327; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                    </div>
                                <?php endfor?>
                                <div class="form-group">
                                    <label>Agama/kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan</label>
                                    <select name="R106A" class="form-control" style="width: 100%;">
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
                            </div>
                            <div class="col-md-6">
                                <h5>Jumlah tempat ibadah di desa/kelurahan</h5>
                                <div class="form-group">
                                    <?php for ($i = 328; $i < 338; $i++): ?>
                                    <div class="form-group">
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    </div>
                                    <?php endfor?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr/>
                                <div class="form-group">
                                    <label>1. Warga desa/kelurahan terdiri dari beberapa suku/etnis:</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804" value="1" <?php if ($data['R804A1'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" name="R804" value="2" <?php if ($data['R804A1'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h5>Banyaknya penyandang disabilitas di desa/kelurahan:</h5>
                                <div class="form-group">
                                    <?php for ($i = 340; $i < 350; $i++): ?>
                                    <div class="form-group">
                                        <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                    </div>
                                    <?php endfor?>
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
                                <?php for ($i = 352; $i < 364; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                </div>
                                <?php endfor?>
                                <?php for ($i = 364; $i < 399; $i++): 
                                    $j = $i + 2;
                                    if( $i == $j){
                                        continue;
                                    }
                                    $j++
                                    ?>
                                            <div class="form-group">
                                                <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                                <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                            </div>
                                <?php endfor?>
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
                                <div class="form-group">
                                    <label for="">Jumlah menara telepon seluler atau Base Transceiver Station (BTS)</label>
                                    <input type="text" name="R1005A" value="<?php echo $data['R1005A']?>" class="form-control">
                                </div>
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
    }

</script>