<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Pengguna</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../pengaturan">Pengaturan Pengguna</a></li>
                    <li class="breadcrumb-item active">Edit Pengguna</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section> 
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('User/update/').$user['user_id'] ?>" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $user['user_username'] ?>"  placeholder="Masukkan Username Pengguna" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $user['user_name'] ?>" placeholder="Masukkan Nama Pengguna" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $user['user_email'] ?>" placeholder="Masukkan Email Pengguna" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $user['user_password'] ?>" placeholder="Masukkan Password Pengguna" required>
                                <span class="fa fa-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role" value="<?php echo $user['user_role'] ?>" required>
                                    <option value="Admin">Admin</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Viewer">Viewer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>