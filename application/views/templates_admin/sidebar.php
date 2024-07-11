<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#ADMIN">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <i class="fa-solid fa-house"></i>
                    <span>BERANDA</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/customer_service') ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>CUSTOMER SERVICE</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/chat_admin') ?>">
                    <i class="fas fa-comments"></i>
                    <span>LIVE CHAT</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
                    <i class="fa-solid fa-database"></i>
                    <span>Data Barang</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/users') ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>Data User</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/invoices') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoices</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                            <?php } ?>

                        </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->