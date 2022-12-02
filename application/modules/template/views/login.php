<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/majestic-admin/template') ?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/majestic-admin/template') ?>/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/majestic-admin/template') ?>/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/majestic-admin/template') ?>/images/logo.jpg" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <?php $this->load->view($content) ?>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/majestic-admin/template') ?>/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/majestic-admin/template') ?>/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/majestic-admin/template') ?>/js/hoverable-collapse.js"></script>
    <!-- <script src="<?= base_url('assets/majestic-admin/template') ?>/js/template.js"></script> -->
    <!-- endinject -->
</body>

</html>