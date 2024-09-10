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
        <form action="<?php echo base_url('data/save1/').$data['data_id'] ?>" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #042165;">
                            <h3 class="card-title text-white">I. KETERANGAN TEMPAT</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">101. Provinsi</label>
                                <input type="text" name="prov" class="form-control" id="" value="Lampung" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">102. Kabupaten</label>
                                <input type="text" name="kab" class="form-control" id="" value="Pringsewu" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="">103. Kecamatan</label>
                                <select id="kec" class="form-control" name="R103" required>
                                    <?php echo "<option hidden>--Pilih Kecamatan--</option>" . PHP_EOL; foreach ($kecamatan as $key => $kec) {
                                        echo '<option value="' . $kec['kode_kec'] . '"';
                                        if ($data['R103'] == $kec['kode_kec']) echo "selected";
                                        echo '>' . $kec['kecamatan'] . '</option>' . PHP_EOL;
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>104. Pekon/Kelurahan</label>
                                <select id="desa" class="form-control" name="R104" required>
                                    <option value="">Pilih Desa</option>
                                    <?php foreach ($desa as $row) : ?>
                                        <?php $selected = $data['R104'] && $data['R104'] == $row['kode_desa'] ? 'selected' : ''; ?>
                                        <option value="<?= $row['kode_desa'] ?>" <?= $selected ?>><?= $row['desa'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>105. SK pembentukan/pengesahan desa/kelurahan</label>
                                <select name="R105" class="form-control" style="width: 100%;" required>
                                    <option hidden>--Pilih SK--</option>
                                    <option value="1" <?php if ($data['R105'] == 1) echo "selected"; ?>>Permendagri/Kepmendagri</option>
                                    <option value="2" <?php if ($data['R105'] == 2) echo "selected"; ?>>Perda Provinsi</option>
                                    <option value="3" <?php if ($data['R105'] == 3) echo "selected"; ?>>Perda Kabupaten</option>
                                    <option value="4" <?php if ($data['R105'] == 4) echo "selected"; ?>>SK Gubernur/Bupati</option>
                                    <option value="5" <?php if ($data['R105'] == 5) echo "selected"; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #042165;">
                            <h3 class="card-title text-white">II. KETERANGAN UMUM</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>201. Daftar RT/RW di Desa/Kelurahan</label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 form_sec_outer_task border">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>No.</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Nama RT/RW</label>
                                                </div>
                                            </div>
                                            <?php if (!empty($sls) && is_array($sls)): ?>
                                                <?php foreach ($sls as $index => $slsItem): ?>
                                                    <div id="<?= $index ?>" class="col-md-12 p-0">
                                                        <div class="col-md-12 form_field_outer p-0">
                                                            <div class="row form_field_outer_row">
                                                                <input type="hidden" name="sls[<?= $index ?>][sls_id]" value="<?= esc($slsItem['sls_id']) ?>">
                                                                <input type="hidden" name="sls[<?= $index ?>][data_id]" value="<?= esc($slsItem['data_id']) ?>">
                                                                <div class="form-group col-md-5">
                                                                    <input type="text" class="form-control w_90" name="sls[<?= $index ?>][kode_sls]" id="kode_sls_<?= $index ?>" value="<?= esc($slsItem['kode_sls']) ?>" placeholder="Masukkan Nomor Urut" required />
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control w_90" name="sls[<?= $index ?>][nama_sls]" id="nama_sls_<?= $index ?>" value="<?= esc($slsItem['nama_sls']) ?>" placeholder="Masukkan Nama RT/RW" required />
                                                                </div>
                                                                <div class="form-group col-md-1">
                                                                    <a href="<?php echo base_url('data/deleteSls/' . $slsItem['sls_id']) ?>/<?= ($slsItem['data_id']) ?>" class="removeInput btn btn-sm btn-danger" type="button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                                        <i class="fas fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            <?php else: ?>
                                                <p></p>
                                            <?php endif ?>
                                            <div class="inputContainer" name="inputContainer">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <button id="addInput" class="addInput btn btn-sm btn-info mr-2"><i class="fas fa-plus add_icon"></i> Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i = 6;?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                    <input type="number" step="any" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" required>
                                </div>
                            <?php ?>
                            <label>203. Koordinat lokasi kegiatan pemerintahan desa/kelurahan<br/>
                            &ensp; 1. Koordinat
                            </label>
                            <?php $i = 8;?>
                                <div class="form-group">
                                &ensp; &ensp; <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                    <input type="number" step="any" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" required>
                                </div>
                            <?php ?>
                            <div class="form-group">
                                <!-- <label>Garis Lintang</label> -->
                                <div style="margin-bottom:-9.5px;">
                                &ensp; &ensp; <div class="form-check-inline">
                                    <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R203B1_LA0" value="1" <?php if ($data['R203B1_LA0'] == 1) echo "checked"; ?>>
                                        <label class="form-check-label">Lintang Utara (LU)</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" oninput='on_change1(event)' type="radio" name="R203B1_LA0" value="2" <?php if ($data['R203B1_LA0'] == 2) echo "checked"; ?>>
                                        <label class="form-check-label">Lintang Selatan (LS)</label>
                                    </div>
                                </div>
                            </div>
                            <?php $i = 10;?>
                                <div class="form-group">
                                &ensp;&ensp;  <label for=""><?php echo $ques[$i]['ques_label'] ?></label>
                                    <input type="number" step="any" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" required>
                                </div>
                            <?php ?>
                            <?php $i = 11;?>
                                <div class="form-group">
                                &ensp; <label for="">2. <?php echo $ques[$i]['ques_label'] ?></label>
                                    <input type="number" step="any" name="<?php echo $ques[$i]['dataKey'] ?>" value="<?php echo $data[$ques[$i]['dataKey']] ?>" class="form-control" required>
                                </div>
                            <?php ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button id="simpan" type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#kec').on('change', function(){
            var kode_kec = $(this).val();
            if(kode_kec){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url('data/getDesa'); ?>',
                    data: {kode_kec: kode_kec},
                    dataType: 'json',
                    success: function(data){
                        $('#desa').html('<option value="">Pilih Desa</option>');
                        $.each(data, function(key, value){
                            $('#desa').append('<option value="'+value.kode_desa+'">'+value.desa+'</option>');
                        });
                    }
                });
            }else{
                $('#desa').html('<option value="">Pilih Desa</option>');
            }
        });
    });

    $(document).ready(function() {
        var max_fields = 100; //maximum input boxes allowed
        var wrapper = $(".inputContainer"); //Fields wrapper
        var add_button = $(".addInput"); //Add button ID
        var x = 0; //initial text box count

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div id="row'+x+'" class="col-md-12 p-0"><div class="col-md-12 form_field_outer p-0"><div class="row form_field_outer_row"><div class="form-group col-md-5"><input type="text" class="form-control w_90" name="new_sls['+x+'][kode_sls]" id="kd" placeholder="Masukkan Nomor Urut" required /></div><div class="form-group col-md-6"><input type="text" class="form-control w_90" name="new_sls['+x+'][nama_sls]" id="nm" placeholder="Masukkan Nama RT/RW" required /></div><div class="form-group col-md-1"><button id="'+x+'" class="removeInput btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></div></div></div></div>'); //add input box
            }
        });

        $(document).on('click', '.removeInput', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        }); 
    });
</script>
