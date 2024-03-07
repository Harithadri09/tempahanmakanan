        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-4">Admin Only</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/user') ?>">
                    <i class="fa-fw fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/table') ?>">
                    <i class="fas fa-list fa-sm fa-fw"></i>
                    <span>Table</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/log') ?>">
                    <i class="fas fa-cogs fa-sm fa-fw"></i>
                    <span>Activity log</span>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama'] ?></span>
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
                        <h1 class="h3 mb-0 text-gray-800">Akaun User</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="col m-0 font-weight-bold text-primary">Data User Restoran</h6>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                        <i class="fa-sharp fa-solid fa-plus me-1"></i>Tambah Data
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Staff</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>User Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data as $dat) : ?>
                                            <tr>
                                                <td><?= $dat['nama'] ?></td>
                                                <td><?= $dat['username'] ?></td>
                                                <td><?= $dat['status'] ?></td>
                                                <td><?= $dat['user_role'] ?></td>
                                                <td>
                                                    <a class="badge text-bg-success" data-bs-toggle="modal" data-bs-target="#editModal<?= $dat['user_id']; ?>" name="edit">Edit</a>
                                                    <a class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#modaldelete<?= $dat['user_id']; ?>" name="delete">Delete</a>
                                                </td>
                                            </tr>

                                            <!-- Modal Update-->
                                            <div class=" modal fade" id="editModal<?= $dat['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-body-secondary" id="exampleModalLabel">Form Edit Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= base_url('Admin/update') ?>" method="post">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="user_id" value="<?= $dat['user_id'] ?>">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Nama staff</label>
                                                                    <input type="text" class="form-control" name="nama" value="<?= $dat['nama']; ?>" autocomplete="off">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Username</label>
                                                                    <input type="text" class="form-control" name="username" value="<?= $dat['username']; ?>" autocomplete="off">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" class="form-control" name="password" value="<?= $dat['password']; ?>" autocomplete="off">
                                                                </div>
                                                                <label class="form-label">Status Akaun</label>
                                                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                                    <option selected><?= $dat['status']; ?></option>
                                                                    <option value="Aktif">Aktif</option>
                                                                    <option value="Mati">Mati</option>
                                                                </select>
                                                                <label class="form-label">User Role</label>
                                                                <select class="form-select mb-3" aria-label="Default select example" name="user_role">
                                                                    <option selected><?= $dat['user_role']; ?></option>
                                                                    <option value="Kasir">customer</option>
                                                                    <option value="Manager">Manager</option>
                                                                    <option value="Admin">Admin</option>
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

                                            <!-- Modal Delete-->
                                            <div class=" modal fade" id="modaldelete<?= $dat['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-body-secondary" id="exampleModalLabel">Ready to Leave?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= base_url('Admin/delete') ?>" method="post">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="user_id" value="<?= $dat['user_id'] ?>">
                                                                Betul Ni Nak Delete?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger" name="delete">Delete changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>

                                <!-- Modal Update-->
                                <div class=" modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-body-secondary" id="exampleModalLabel">Form Tambah Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('Admin/tambah') ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Staff</label>
                                                        <input type="text" class="form-control" name="nama" placeholder="Nama" autocomplete="off">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" autocomplete="off">
                                                    </div>
                                                    <label class="form-label">Status Akaun</label>
                                                    <select class="form-select mb-3" aria-label="Default select example" name="status">
                                                        <option selected>...</option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Mati">Mati</option>
                                                    </select>
                                                    <label class="form-label">User Role</label>
                                                    <select class="form-select mb-3" aria-label="Default select example" name="user_role">
                                                        <option selected>...</option>
                                                        <option value="Kasir">customer</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Admin">Admin</option>
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

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->