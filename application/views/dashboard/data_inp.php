<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Submit Reward</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" <?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=" <?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .bg-green {
            background-color: #2C3639;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-green sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
                <div class="sidebar-brand-text mx-3">Halaman Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Query Menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`,`icon`
                    FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
    ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>


            <!-- Looping Menu -->
            <?php
            foreach ($menu as $m) :
            ?>
                <!-- <div class="sidebar-heading text-white mt-2">
        <?= $m['menu']; ?>
    </div> -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#<?= $m['menu']; ?>" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="<?= $m['icon'] ?>"></i>
                        <span><?= $m['menu']; ?></span>
                    </a>
                    <div id="<?= $m['menu']; ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Data <?= $m['menu']; ?></h6>

                            <!-- Sub Menu Sesuai Menu -->
                            <?php
                            $menuId = $m['id'];
                            $querySubMenu = "SELECT *
         FROM `user_sub_menu` JOIN `user_menu`
             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
         WHERE `user_sub_menu`.`menu_id` = $menuId
         AND `user_sub_menu`.`is_active` = 1";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url($sm['url']) ?>">
                <i class="<?= $sm['icon'] ?>"></i>
                <span><?= $sm['title'] ?></span></a>
        </li> -->
                                <a class="collapse-item" href="<?= base_url($sm['url']) ?>"><?= $sm['title'] ?></a>


                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
                <hr class="sidebar-divider">

            <?php endforeach; ?>

            <!-- Divider -->

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-3">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Reward</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Server</th>
                                            <th>Item</th>
                                            <th>Point</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($reward as $da) :
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $da->email ?></td>
                                                <td><?= $da->pass ?></td>
                                                <td><?= $da->server ?></td>
                                                <td><?= $da->item ?></td>
                                                <td><?= $da->point ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>