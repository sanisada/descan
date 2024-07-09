<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Potensi Desa</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Potensi Desa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                    <i class="fas fa-plus-square"></i> Data Potensi Desa
                </button>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Potensi Desa</h3>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-fit" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">#</th>
                                        <th style="text-align:center;">Desa</th>
                                        <th style="text-align:center;">Kecamatan</th>
                                        <th style="text-align:center;">Tahun</th>
                                        <th style="text-align:center;">Status</th>
                                        <th style="text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $key => $data) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?php echo $data->desa; ?></td>
                                        <td><?php echo $data->kecamatan; ?></td>
                                        <td style="text-align:center;"><?php echo $data->Tahun; ?></td>
                                        <td style="text-align:center;"><?php echo $data->status; ?></td>
                                        <td class="text-center">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="<?php echo base_url('data/detail/') . $data->data_id; ?>" class="btn btn-primary btn-sm" type="button"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <?php $session = session(); ?>
                                                <?php if ($session->get('user_role') !== 'Viewer'): ?>
                                                <li class="list-inline-item">
                                                    <a href="<?php echo base_url('data/edit/') . $data->data_id; ?>" class="btn btn-success btn-sm" type="button"><i class="fa fa-edit"></i></a>
                                                </li>
                                                
                                                <li class="list-inline-item">
                                                    <a href="<?php echo base_url('data/delete/' . $data->data_id); ?>">
                                                        <button onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </a>
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('data/tambah_data'); ?>" method="POST">
                <div class="modal-body">
                    <label for="tahun">Tahun</label><br>
                    <select name="tahun" id="tahun" class="custom-select custom-select-md mb-3">
                        <?php
                        for ($i = date("Y") - 3; $i <= date("Y"); $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>' . PHP_EOL;
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-success float-right" type="submit" name="tambah_data">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
