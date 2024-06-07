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
        <form action="<?php echo base_url('Data/save8/').$data['data_id']  ?>" method="POST">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">VIII. KEAMANAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Tindak kejahatan yang terjadi di desa/kelurahan selama setahun terakhir</h5>
                                </div>
                                <hr/>
                                <?php for ($i = 488; $i < 510; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
                                    </div>
                                <?php endfor ?>
                                <div class="form-group">
                                    <label>Jumlah anggota linmas/hansip di desa/kelurahan</label>
                                    <input type="text" name="<?php echo $data['R1305']?>" value="<?php echo $data['R1305']?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keberadaan pos polisi (termasuk kantor polisi) di desa/kelurahan</label>
                                    <div style="margin-bottom:-9.5px;">
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1306A" value="1" <?php if ($data['R1306A'] == 1) echo "checked"; ?>>
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" oninput='on_change1(event)' name="R1306A" value="2" <?php if ($data['R1306A'] == 2) echo "checked"; ?>>
                                            <label class="form-check-label">Tidak ada</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="R1306A2" class="form-group" style="display:none;">
                                    <label for="">Sebutkan alamatnya</label>
                                    <input type="text" name="R1306A2" value="<?php echo $data['R1306A2']?>" class="form-control">
                                </div>
                                <hr/>
                                <h5>Jumlah korban bunuh diri dan pembunuhan selama setahun terakhir di desa/kelurahan:</h5>
                                <?php for ($i = 513; $i < 517; $i++): ?>
                                    <div class="form-group">
                                        <label><?php echo $ques[$i]['ques_label']?></label>
                                        <input type="text" name="<?php echo $ques[$i]['dataKey']?>" value="<?php echo ($data[$ques[$i]['dataKey']])?>" class="form-control">
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
                <a href="<?php echo base_url('data/create7/'.$data['data_id'])?>"><button type="button" name="back" class="btn btn-md btn-secondary">Sebelumnya</button></a>
                <button type="submit" name="simpan" class="btn btn-md btn-success float-md-right"><i class="fas fa-save"></i> Simpan dan Selanjutnya</button>
            </div>
        </div>
        </form>
    </div>
</section>


<script>
    function on_change1(el){
        var selectedOption = el.target.value;
        if (selectedOption === '1') {
        document.getElementById('R1306A2').style.display = 'block';
        } else {
        document.getElementById('R1306A2').style.display = 'none'; // Hide el
        }
    }

</script>