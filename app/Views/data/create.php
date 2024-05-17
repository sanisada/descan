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
    <!-- Default box -->
    <form action="" method="POST">
        <div class="card mt-3">
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
                            <input type="text" name="kec" class="form-control" id="" value="" placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label>Desa</label>
                            <input type="text" name="desa" class="form-control" id="" value="" placeholder="Masukkan Desa">
                        </div>
                        <div class="form-group">
                            <label>SK pembentukan/pengesahan desa/kelurahan</label>
                            <select class="form-control" name="sk" style="width: 100%;">
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
        <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Perubahan Data</button>
<!-- 
        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i>Simpan Perubahan Data</button>
            </div>
        </div> -->
    </form>
</section>