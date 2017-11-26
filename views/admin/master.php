<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang chu</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>style.css">
    <link href="<?php echo VENDOR_PATH ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo VENDOR_PATH ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo VENDOR_PATH ?>datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo CSS_PATH ?>sb-admin.css" rel="stylesheet">
    <!-- Tinymce Editor -->
    <script src="<?php echo ASSETS_PATH ?>/tinymce/tinymce.min.js"></script>
    <script src="<?php echo JS_PATH ?>main.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include_once(SITE_PATH . '/includes/_header.php'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <?php include_once(SITE_PATH . '/includes/_breadcrumb.php'); ?>
        <?php require_once SITE_PATH.'/router.php'; ?>
    </div>
    <!-- /.container-fluid-->

    <!-- /.content-wrapper-->
    <?php include_once(SITE_PATH . '/includes/_footer.php'); ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo VENDOR_PATH ?>jquery/jquery.min.js"></script>
    <script src="<?php echo VENDOR_PATH ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo VENDOR_PATH ?>jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo VENDOR_PATH ?>chart.js/Chart.min.js"></script>
    <script src="<?php echo VENDOR_PATH ?>datatables/jquery.dataTables.js"></script>
    <script src="<?php echo VENDOR_PATH ?>datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo JS_PATH ?>sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo JS_PATH ?>sb-admin-datatables.min.js"></script>

</body>
</html>