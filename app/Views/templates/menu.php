    <?php $session = session(); ?>
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="/data_prospera" class="nav-link">
              <i class="nav-icon fa fa-newspaper"></i>
              <p>
                Data Potensi Pekon
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/metadata" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Metadata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/panduan" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Panduan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="/profil" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Profil Desa
              </p>
            </a>
          </li> -->
          <?php if ($session->get('user_role') == 'Admin'): ?>
          <li class="nav-item">
            <a href="/pengaturan" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Pengaturan Pengguna
              </p>
            </a>
          </li>
          <?php endif; ?>
          
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">