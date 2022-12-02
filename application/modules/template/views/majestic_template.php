<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul; ?></title>
    <!-- plugins:css -->
    <link 
        rel="stylesheet" 
        href="<?= base_url('assets/majestic-admin/template/') ?>vendors/mdi/css/materialdesignicons.min.css" 
    />
    <link 
        rel="stylesheet" 
        href="<?= base_url('assets/majestic-admin/template/') ?>vendors/base/vendor.bundle.base.css" 
    />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- <link
        rel="stylesheet"
        href="<?= base_url('assets/majestic-admin/template/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/majestic-admin/template/') ?>css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/majestic-admin/template/') ?>images/logo.jpg" />


    <!-- custom -->
    <link rel="stylesheet" href="<?= base_url('assets/style-custom/')?>main.css">
    
    <!-- datatable -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->


    <!-- jquery datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- datatable js jquery -->
    <!-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->


</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo " ><b>ATT</b></a>
                    <a class="navbar-brand brand-logo-mini"><img src="<?= base_url('assets/img/') ?>logo.jpg" alt="logo" /></a>

                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a class="nav-link">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " alt="profile" />
                            <span class="nav-profile-name">Hi, <?= $user['name']; ?></span>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <?php
                    $role_id  = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `user_menu`.`menu`
                          FROM `user_menu`
                          JOIN `user_access_menu`
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                          WHERE `user_access_menu`.`role_id` = $role_id
                          ORDER BY `user_access_menu`.`menu_id` ASC
                          ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    // echo "<pre>";
                    // var_dump($menu);
                    // echo "</pre>";

                    ?>
                    <?php foreach ($menu as $m) : ?>
                        <div class="nav-item">
                            <a class="nav-link custem-item">
                                <span class="menu-title" style="color: #000; font-weight: 600;"><?= $m["menu"] ?></span>
                            </a>
                        </div>

                        <!-- Sub Menu -->
          <?php
          $menuId = $m['id'];
          $querySubMenu = "SELECT `user_sub_menu`.`id`, `user_sub_menu`.`menu_id`, `user_sub_menu`.`title`, `user_sub_menu`.`url`, `user_sub_menu`.`icon`, `is_active`
                                FROM `user_sub_menu`
                                JOIN `user_menu`
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1";
          $subMenu = $this->db->query($querySubMenu)->result_array();
          ?>
          <?php foreach ($subMenu as $indexj => $sm ) : ?>
            <?php if ($sm['title'] == $judul) : ?>
              <li class="nav-item menu-items active">
              <?php else : ?>
              <li class="nav-item menu-items">
            <?php endif; ?>
            <?php
            
                 $qSubMenuSub = "SELECT `user_sub_menu_sub`.`id`,`user_sub_menu_sub`.`title`, `user_sub_menu_sub`.`url`, `user_sub_menu_sub`.`icon`
                  FROM `user_sub_menu_sub`
                  JOIN `user_sub_menu`
                  ON `user_sub_menu`.id = `user_sub_menu_sub`.`submenu_id`
                  WHERE `user_sub_menu_sub`.`submenu_id` = {$sm['id']}
                  AND `user_sub_menu_sub`.`is_active` = 1
                  ";
                    $smSub = $this->db->query($qSubMenuSub)->result_array();
                    // echo $sm["id"];
                ?>
                <!-- <pre>
                    <?= var_dump($sm) ?>
                    </pre>  -->
                <?php if ($smSub == true) : ?>
                    <a class="nav-link" data-toggle="collapse" href="#data-<?=$indexj?>" aria-expanded="false" aria-controls="data-<?=$indexj?>"> 
                    
                                      
                <?php else : ?>
                   <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                <?php endif; ?>
              
                <span class="menu-icon">
                  <i class="<?= $sm['icon'] ?> menu-icon"></i>
                </span>
                <span class="menu-title"><?= $sm['title'] ?></span>

                
                <?php if ($smSub == true) : ?>
                    <i class="menu-arrow"></i>
                      <?php endif; ?>
              </a> 
                <?php if ($smSub == true) : ?>
                    <?php foreach ($smSub as $indexy => $sms) : ?>
                        <div class="collapse" id="data-<?=$indexj?>">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a href="<?= base_url($sms['url']) ?>" class="nav-link">
                                    <span class="menu-title"><?= $sms['title'] ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
            <?php endforeach; ?>
                <div class="nav-item">
                    <a class="nav-link custem-item" href="<?= base_url('auth/logout')?>">
                        <i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title" style="color: #000; font-weight: 600;">Keluar</span>
                    </a>
                </div>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php $this->load->view($content) ?>
                </div>
                    
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="text-center my-auto">
                        <span>Copyright &copy; Mahasiswa Universitas Maritim Raja Ali Haji <?= date('Y'); ?></span>
                    </div>
                </footer>
                
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- plugins:js -->
        <script 
            src="<?= base_url('assets/majestic-admin/template/') ?>vendors/base/vendor.bundle.base.js">
        </script>
		<!-- endinject -->

        <!-- Plugin js for this page-->
		<script 
            src="<?= base_url('assets/majestic-admin/template/') ?>vendors/chart.js/Chart.min.js">
        </script>
		<!-- <script 
            src="<?= base_url('assets/majestic-admin/template/') ?>vendors/datatables.net/jquery.dataTables.js">
        </script> -->
		<!-- <script 
            src="<?= base_url('assets/majestic-admin/template/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js">
        </script> -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
		<!-- End plugin js for this page-->

        <!-- inject:js -->
        <script src="<?= base_url('assets/majestic-admin/template/') ?>js/off-canvas.js"></script>
        <script src="<?= base_url('assets/majestic-admin/template/') ?>js/hoverable-collapse.js"></script>
        <script src="<?= base_url('assets/majestic-admin/template/') ?>js/template.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- <script src="<?= base_url('assets/majestic-admin/template/') ?>js/dashboard.js"></script> -->
        
       
</body>

</html>