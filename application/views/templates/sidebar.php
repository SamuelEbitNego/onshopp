<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ONSHOP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fa-solid fa-house"></i>
                    <span>BERANDA</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('customer_service') ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>CUSTOMER SERVICE</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(1) == 'chat') echo 'active' ?>">
                <a class="nav-link" href="<?php echo base_url('chat') ?>"><i class="fas fa-comments"></i>LIVE CHAT</a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/stylish_pria') ?>">
                    <i class="fa-solid fa-person"></i>
                    <span>STYLISH PRIA</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/stylish_wanita') ?>">
                    <i class="fa-sharp fa-solid fa-person-dress"></i>
                    <span>STYLISH WANITA</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/elektronik') ?>">
                    <i class="fa-solid fa-mobile-retro" style="color: #d4e1c1;"></i>
                    <span>ELEKTRONIK</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/buku') ?>">
                    <i class="fa-solid fa-book-bookmark" style="color: #a9c837;"></i>
                    <span>BUKU</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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


                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </li>

                        <div class="navbar">

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = ' <i class="fa-solid fa-cart-shopping fa-shake fa-2x0" style="color: #86b819;"></i>' .  $this->cart->total_items()  .   ' ' ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>
                            <ul class="na navbar-nav navbar-right">

                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div> Hi <?php echo $this->session->userdata('username') ?></div>
                                    </li>
                                    <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                <?php } else { ?>
                                    <li><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>

                            </ul>
                        </div>

                        </a>
            </div>
            </li>


            </ul>

            </nav>
            <!-- End of Topbar -->