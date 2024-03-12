 <!-- Import Bootstrap -->
 <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
 <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

 <!-- Import Bootstrap icons -->
 <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-icons/font/bootstrap-icons.min.css') ?>">

 <!-- Import Jquery -->
 <script src="<?php echo base_url('assets/jquery/dist/jquery.min.js') ?>"></script>

 <!-- Import Canvas Confetti -->
 <script src="<?php echo base_url('assets/canvas-confetti/dist/confetti.browser.js') ?>"></script>

 <!-- SweetAlert2 -->
 <script src="<?php echo base_url('assets/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>

 <!-- Select2 -->
 <link rel="stylesheet" href="<?php echo base_url('assets/select2/dist/css/select2.min.css') ?>">
 <script src="<?php echo base_url('assets/select2/dist/js/select2.full.min.js') ?>"></script>

 <!-- Select2 Bootstrap 5 theme -->
 <link rel="stylesheet" href="<?php echo base_url('assets/select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css') ?>">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="<?php echo base_url('main/main.css') ?>">

 <script>
     $(document).ready(function() {
        $('.select2').select2({
            theme: "bootstrap-5",
            selectionCssClass: "select2--small",
        });
     });
 </script>
