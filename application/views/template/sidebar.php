<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Repository</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Surat Keluar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Surat_Undangan/index'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Undangan</p>
                            </a>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="./index2.html" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Surat Akademik</p>
                            </a>
                        </li>

                    </ul>
                <li class="nav-item">
                    <a href="<?= base_url('Input_surat/index'); ?>" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tambah Surat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Input_surat/index'); ?>" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori Surat</p>
                    </a>
                </li>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>