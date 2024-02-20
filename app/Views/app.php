<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Import Bootstrap icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-icons/font/bootstrap-icons.min.css') ?>">

    <!-- Import Jquery -->
    <script src="<?php echo base_url('assets/jquery/dist/jquery.min.js') ?>"></script>

    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/select2/dist/css/select2.min.css') ?>">
    <script src="<?php echo base_url('assets/select2/dist/js/select2.full.min.js') ?>"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('main/main.css') ?>">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top"><i class="bi bi-search"> </i>FastQuiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Quiz</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Leaderboard</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>



    <!-- Footer-->
    <footer class="text-center py-3 position-absolute bottom-0 w-100">
        <div class="container">
            <div class="text-dark">&copy; Site made by Lucas Sachs</div>
            <div class="d-flex justify-content-center mt-2 gap-3">
                <a href="https://www.instagram.com/lucass_sachs" class="text-reset" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/lucas-sachs-215b87261" class="text-reset" target="_blank"><i class="bi bi-linkedin"></i></a>
                <!-- <a href="#" class="text-reset" target="_blank"><i class="bi bi-envelope"></i></a> -->
            </div>
        </div>
    </footer>
</body>

</html>