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
        <form action="<?php echo base_url('Data/save1/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">I. KETERANGAN TEMPAT</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <input type="text" name="prov" class="form-control" id="" value="Lampung" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Kabupaten</label>
                                    <input type="text" name="kab" class="form-control" id="" value="Pringsewu" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <select id="kec" class="form-control" name="R103" required>
                                        <?php echo "<option hidden>--Pilih Kecamatan--</option>". PHP_EOL;
                                                foreach($kecamatan as $key => $kec) : {
                                                echo '<option value="' . $kec['kode_kec'] . '"';
                                                if ($data['R103'] == $kec['kode_kec']) echo "selected";
                                                echo '>' . $kec['kecamatan'] . '</option>' . PHP_EOL;}
                                        ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <select id="desa" class="form-control" name="R104" required>
                                        <option value="">Pilih Desa</option>
                                        <?php foreach ($desa as $row) : ?>
                                            <?php $selected = $data['R104'] && $data['R104'] == $row['kode_desa'] ? 'selected' : ''; ?>
                                            <option value="<?= $row['kode_desa'] ?>" <?= $selected ?>><?= $row['desa'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SK pembentukan/pengesahan desa/kelurahan</label>
                                    <select name="R106A" class="form-control" style="width: 100%;">
                                        <option hidden>--Pilih SK--</option>
                                            <option value="1" <?php if ($data['R106A'] == 1) echo "selected"; ?>>Permendagri/Kepmendagri</option>
                                            <option value="2" <?php if ($data['R106A'] == 2) echo "selected"; ?>>Perda Provinsi</option>
                                            <option value="3" <?php if ($data['R106A'] == 3) echo "selected"; ?>>Perda Kabupaten</option>
                                            <option value="4" <?php if ($data['R106A'] == 4) echo "selected"; ?>>SK Gubernur/Bupati</option>
                                            <option value="5" <?php if ($data['R106A'] == 5) echo "selected"; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Daftar SLS terkecil di desa</label>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 form_sec_outer_task border ">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label >Kode SLS/Non SLS</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label> Nama  SLS/Non SLS </label>
                                                    </div>
                                                </div>
                                                <!-- <?php if (!empty($sls) && is_array($sls)): ?>
                                                    <?php foreach ($sls as $index => $slsItem): ?>
                                                    <div class="col-md-12 p-0">
                                                        <div class="col-md-12 form_field_outer p-0">
                                                            <div class="row form_field_outer_row">
                                                                <div class="form-group col-md-5">
                                                                    <input type="text" class="form-control w_90" id="kd" placeholder="Masukkan Kode SLS/Non SLS" name="sls[][nama_sls]" id="nama_sls" value="<?php echo $sls[$index]['kode_sls'] ?>">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control w_90" id="nm" placeholder="Masukkan Nama SLS/Non SLS" name="sls[][nama_sls]" id="nama_sls" value="<?php echo $sls[$index]['nama_sls'] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <?php endforeach ?>
                                                <?php else: ?>
                                                    <p>Tidak ada data SLS.</p>
                                                <?php endif?>                           -->
                                                <!-- <div class="row">
                                                    <div class="col-md-5">
                                                        <label >Kode SLS/Non SLS</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label> Nama  SLS/Non SLS </label>
                                                    </div>
                                                </div> -->
                                                <div class="inputContainer" name="inputContainer">
                                                    <!-- <div class="col-md-12 p-0">
                                                    <div class="col-md-12 form_field_outer p-0">
                                                        <div class="row form_field_outer_row">
                                                        <div class="form-group col-md-5">
                                                            <input type="text" class="form-control w_90" name="kode_sls" id="kd" placeholder="Masukkan Kode SLS/Non SLS" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control w_90" name="nama_sls" id="nm" placeholder="Masukkan Nama SLS/Non SLS" />
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <a href="<?php echo base_url('Data/delete/') ?>">
                                                        <button id="addInput" class="addInput btn btn-sm btn-info mr-2"><i class="fas fa-plus add_icon"></i> Tambah</button></a>
                                                    <!-- <button type="submit" value="saveSLS" class="btn btn-sm btn-primary float-md-right"><i class="fas fa-save"></i> Simpan</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php for ($i = 6; $i < 12; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo $data[$ques[$i]['dataKey']]  ?>" class="form-control">
                                </div>
                                <?php endfor?>
                                <?php?>
                            </div>
                        </div>
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
                    url: '<?php echo base_url('Data/getDesa'); ?>',
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
        var max_fields      = 100; //maximum input boxes allowed
        var wrapper         = $(".inputContainer"); //Fields wrapper
        var add_button      = $(".addInput"); //Add button ID
        var i=0; 

        var x = 0; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div id="row'+x+'" class="col-md-12 p-0"><div class="col-md-12 form_field_outer p-0"><div class="row form_field_outer_row"><div class="form-group col-md-5"><input type="text" class="form-control w_90" name="sls['+x+'][kode_sls]" id="kd" placeholder="Masukkan Kode SLS/Non SLS" /></div><div class="form-group col-md-6"><input type="text" class="form-control w_90" name="sls['+x+'][nama_sls]" id="nm" placeholder="Masukkan Nama SLS/Non SLS" /></div><div class="form-group col-md-1"><button id="'+x+'" class="removeInput btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></div></div></div></div>'); //add input box
            }
        });

        $(document).on('click', '.removeInput', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 
    });
    
</script>