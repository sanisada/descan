<body>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Data Potensi Desa</h3>
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
                            <input type="text" name="kec" class="form-control" id="" value="Pagelaran" placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label>Desa</label>
                            <input type="text" name="desa" class="form-control" id="" value="Panutan" placeholder="Masukkan Desa">
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

        <div class="card mt-3">
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
                                            <button class="btn btn-block btn-primary"><i class="fas fa-plus add_icon"></i> Tambah</button>
                                            <button class="btn btn-block btn-success"><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Luas Wilayah Desa</label>
                            <input type="text" name="kab" class="form-control" id="" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Koordinat lokasi kegiatan pemerintahan</label>
                            <input type="text" name="kec" class="form-control" id="" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Perubahan Data</button>
    </form>
</section>

<script type="text/javascript">
$(document).ready(function(){
    $("body").on("click",".add_new_frm_field_btn", function (){ 
      console.log("clicked");
      var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
      $(".form_field_outer").append(`
          <div class="row form_field_outer_row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control w_90" name="mobileb_no[]" id="mobileb_no_${index}" placeholder="Enter mobiel no." />
              </div>
              <div class="form-group col-md-4">
                <select name="no_type[]" id="no_type_${index}" class="form-control" >
                  <option>--Select type--</option>
                  <option>Personal No.</option>
                  <option>Company No.</option>
                  <option>Parents No.</option>
                </select>
              </div>
              <div class="form-group col-md-2 add_del_btn_outer">
                <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                  <i class="fas fa-copy"></i>
                </button>

                <button class="btn_round remove_node_btn_frm_field" disabled>
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
        `);

      $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
      $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
    });
 });

$(document).ready(function(){
    //===== delete the form fieed row
    $("body").on("click", ".remove_node_btn_frm_field", function () {
      $(this).closest(".form_field_outer_row").remove();
      console.log("success");
    });
  });
</script>
</body>