<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Pengaturan Pengguna</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Pengaturan Pengguna</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <?php if(!empty(session()->getFlashdata('message'))) : ?>

                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
                    
                <?php endif ?>

                <a href="<?php echo base_url('user/create') ?>" class="btn btn-md btn-success mb-3">TAMBAH PENGGUNA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">#</th>
                            <th style="text-align:center;">Username</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;">Role</th>
                            <th style="text-align:center;">Desa</th>
                            <th style="text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($users as $key => $user) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?php echo $user->user_username ?></td>
                                <td><?php echo $user->user_name ?></td>
                                <td><?php echo $user->user_email ?></td>
                                <td><?php echo $user->user_role ?></td>
                                <td><?php echo $user->desa ?></td>
                                <td class="text-center">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url('user/edit/'.$user->user_id) ?>" class="btn btn-success btn-sm" type="button"><i class="fa fa-edit"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url('user/delete/'.$user->user_id) ?>">
                                            <button  onclick="return confirm('Apakah Anda yakin akan menghapus pengguna <?php echo $user->user_name ?>?')" class="btn btn-danger btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa fa-trash"></i></button></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
  </body>