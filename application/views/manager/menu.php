                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <div class="sidebar-brand-text mx-4">Manager</div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Manager
                    </div>

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('manager') ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Menu
                    </div>

                    <!-- Nav Item - Charts -->
                    <li class="nav-item  active">
                        <a class="nav-link" href="<?= base_url('manager/menu') ?>">
                            <i class="fa-fw fa-solid fa-bars"></i>
                            <span>Menu</span>
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

                            <!-- Topbar Search -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
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
                                <h1 class="h3 mb-0 text-gray-800">Menu</h1>
                            </div>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="col m-0 font-weight-bold text-primary">Data Menu Restoran</h6>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <?= $this->session->flashdata('pesan'); ?>
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahMenu">
                                                <i class="fa-sharp fa-solid fa-plus me-1"></i>Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="data-table" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>kategori</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $i = 1;
                                            foreach ($data as $dat) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $dat['nama'] ?></td>
                                                        <td><?= $dat['kategori'] ?></td>
                                                        <td> Rm <?= number_format($dat['harga'], 2); ?></td>
                                                        <td><?= $dat['stok'] ?></td>
                                                        <td><?= $dat['status'] ?></td>
                                                        <td>
                                                            <a class="btn btn-success btn-sm me-1" name="edit" data-bs-toggle="modal" data-bs-target="#modalEditMenu<?= $dat['menu_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="<?= base_url('manager/deleteMenu/') . $dat['menu_id']; ?>" onclick="return confirm('Yakin ?')" class="btn btn-danger btn-sm" name="delete"><i class="fa-solid fa-trash"></i></a>
                                                            <!-- data-bs-toggle="modal" data-bs-target="#modaldelete" -->
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <!-- Modal Tambah-->
                                                <div class="modal fade" id="modalTambahMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-body-secondary" id="exampleModalLabel">Form Tambah Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="<?= base_url('manager/tambah') ?>" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nama Menu</label>
                                                                        <input type="text" class="form-control" name="nama" placeholder="Nama Menu" autocomplete="off">
                                                                    </div>
                                                                    <label class="form-label">kategori Makanan Atau Minuman</label>
                                                                    <select class="form-select mb-3" aria-label="Default select example" name="kategori">
                                                                        <option selected>...</option>
                                                                        <option value="Makanan">Makanan</option>
                                                                        <option value="Minuman">Minuman</option>
                                                                    </select>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Harga</label>
                                                                        <input type="text" class="form-control" name="harga" placeholder="Harga" autocomplete="off">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Stok</label>
                                                                        <input type="text" class="form-control" name="stok" placeholder="Stok" autocomplete="off">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Gambar Makanan / Minuman</label>
                                                                        <input type="file" class="form-control" name="gambar">
                                                                    </div>
                                                                    <label class="form-label">Status Tersedia Atau Habis</label>
                                                                    <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                                        <option selected>...</option>
                                                                        <option value="Tersedia">Tersedia</option>
                                                                        <option value="Habis">Habis</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal Edit-->
                                                <div class="modal fade" id="modalEditMenu<?= $dat['menu_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-body-secondary" id="exampleModalLabel">Form Edit Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <?= form_open_multipart('manager/edit'); ?>
                                                            <div class="modal-body">
                                                                <input type="hidden" name="menu_id" value="<?= $dat['menu_id'] ?>">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Nama Menu</label>
                                                                    <input type="text" class="form-control" name="nama" value="<?= $dat['nama'] ?>" autocomplete="off">
                                                                </div>
                                                                <label class="form-label">kategori Makanan Atau Minuman</label>
                                                                <select class="form-select mb-3" aria-label="Default select example" name="kategori">
                                                                    <option selected><?= $dat['kategori'] ?></option>
                                                                    <option value="Makanan">Makanan</option>
                                                                    <option value="Minuman">Minuman</option>
                                                                </select>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Harga</label>
                                                                    <input type="text" class="form-control" name="harga" value="<?= $dat['harga'] ?>" autocomplete="off">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Stok</label>
                                                                    <input type="text" class="form-control" name="stok" value="<?= $dat['stok'] ?>" autocomplete="off">
                                                                </div>
                                                                <label class="form-label">Status Tersedia Atau Habis</label>
                                                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                                    <option selected><?= $dat['status'] ?></option>
                                                                    <option value="Tersedia">Tersedia</option>
                                                                    <option value="Habis">Habis</option>
                                                                </select>
                                                                <div class="form-group row">
                                                                    <label class="form-label">Stok</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="file" class="form-control" name="gambar">
                                                                    </div>
                                                                    <?php if ($dat['gambar'] != null) {
                                                                    ?>
                                                                        <div class="col-sm-3">
                                                                            <img src="<?= base_url('/assets/img/uploads/' . $dat['gambar']) ?>" class="img-thumbnail">
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->


                    </div>
                    <!-- End of Main Content -->