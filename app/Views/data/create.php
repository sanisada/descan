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
                                    <select class="form-control" name="R103" required>
                                        <?php echo "<option hidden>--Pilih Kecamatan--</option>". PHP_EOL;
                                                foreach($kecamatan as $key => $kec) : {
                                                echo '<option value="' . $kec['kode_kec'] . '">' . $kec['kecamatan'] . '</option>' . PHP_EOL;}
                                        ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <select class="form-control" name="R104" required>
                                            <?php echo "<option hidden>--Pilih Desa--</option>". PHP_EOL;
                                                    foreach($desa as $key => $desa) : {
                                                    echo '<option value="' . $desa['kode_desa'] . '">' . $desa['desa'] . '</option>' . PHP_EOL;}
                                            ?>
                                            <?php endforeach ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>SK pembentukan/pengesahan desa/kelurahan</label>
                                    <select name="R106A" class="form-control" style="width: 100%;">
                                        <option hidden>--Pilih SK--</option>
                                            <option value="1">Permendagri/Kepmendagri</option>
                                            <option value="2">Perda Provinsi</option>
                                            <option value="3">Perda Kabupaten</option>
                                            <option value="4">SK Gubernur/Bupati</option>
                                            <option value="5">Lainnya</option>
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
                                                    <div class="col-md-1">
                                                        <label>No</label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Kode SLS/Non SLS</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label> Nama  SLS/Non SLS </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 p-0">
                                                <div class="col-md-12 form_field_outer p-0">
                                                    <div class="row form_field_outer_row">
                                                    <div class="form-group col-md-1">
                                                        <input type="text" class="form-control w_90" name="no" id="no" value="1" disabled/>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <input type="text" class="form-control w_90" name="kd" id="kd" placeholder="Masukkan Kode SLS/Non SLS" />
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="text" class="form-control w_90" name="nm" id="nm" placeholder="Masukkan Nama SLS/Non SLS" />
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row ml-0 mt-3">
                                                <div class="col-md-12">
                                                    <button class="btn btn-sm btn-primary mr-2"><i class="fas fa-plus add_icon"></i> Tambah</button>
                                                    <button class="btn btn-sm btn-success float-right"><i class="fas fa-save"></i> Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php for ($i = 6; $i < 12; $i++): ?>
                                <div class="form-group">
                                    <label for=""><?php echo $ques[$i]['ques_label']?></label>
                                    <input type="text" name="<?php echo $ques[$i]['dataKey']?>" class="form-control">
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
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>