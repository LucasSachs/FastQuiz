<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Quiz</title>
    <?php echo view('main/imports') ?>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="<?php echo base_url() ?>"><i class="bi bi-search"> </i>FastQuiz</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo base_url() ?>">Gerar novo Quiz</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo base_url('leaderboard') ?>">Leaderboard</a></li>
                </ul>

                <a href="<?php echo base_url('feedback') ?>">
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Enviar um Feedback</span>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </nav>