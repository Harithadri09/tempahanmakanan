                    <!-- Sidebar -->
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="sidebar-brand-text mx-4">happy lemon</div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Dashboard
                        </div>

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('kasir') ?>">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Pemesanan
                        </div>

                        <!-- Nav Item - Charts -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('kasir/menu') ?>">
                                <i class="fa-fw fa-solid fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('kasir/bayar') ?>">
                                <i class="fa-fw fa-solid fa-bars"></i>
                                <span>Pembayaran</span>
                            </a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Sistem
                        </div>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('logout') ?>">
                                <i class="fa-fw fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
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

                                    <div class="topbar-divider d-none d-sm-block"></div>

                                    <!-- Nav Item - User Information -->
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                            <img class="mx-2 img-profile rounded-circle" src="<?= base_url('assets/img/happylemon.png') ?>">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Settings
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Activity Log
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= base_url('logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>

                                </ul>

                            </nav>
                            <!-- End of Topbar -->


                            <!-- Begin Page Content -->
                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
                                </div>

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="col m-0 font-weight-bold text-primary">transection Restoran</h6>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Produk</th>
                                                        <th>Jumlah Pesanan</th>
                                                        <th>Harga</th>
                                                        <th>Sub-Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $total = 0;
                                                    foreach ($pesan as $san) :
                                                        $subtotal = $san->jumlah * $san->harga;
                                                        $total += $subtotal;
                                                    ?>
                                                        <tr>
                                                            <td><?= $san->id_pesan ?></td>
                                                            <td><?= $san->nama; ?></td>
                                                            <td><?= $san->jumlah; ?></td>
                                                            <td>RM <?= number_format($san->harga); ?></td>
                                                            <td>RM <?= number_format($subtotal); ?></td>
                                                        </tr>


                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td colspan="4" align="right">Grand Total :</td>
                                                        <td>RM <?= number_format($total); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div align="right">
                                                <a href="<?= base_url('kasir/bayar') ?>" class="btn btn-primary btn-sm">Kembali</a>
                                                <!-- <button data-bs-toggle="modal" data-bs-target="#bayar<?= $san->id_pesan ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-money-bill"></i> Pembayaran</button> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.container-fluid -->


                        </div>
                        <!-- End of Main Content -->