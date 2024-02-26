<?php echo view('main/header') ?>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="text-center mb-3">
            <h1>FastQuiz</h1>
            <h6>Question: 1 of 10</h6>
        </div>

        <?php foreach($questoes as $questao) { ?>
            <div class="mb-5">
                <p class="text-dark text-center h5 mb-3"><?php echo $questao['question']; ?></p>
                <div class="d-flex justify-content-center gap-3">
                    <?php
                        foreach($questao['answer'] as $resposta)
                            echo "<button class='btn btn-primary'>$resposta</button>";
                    ?>
                </div>
            </div>
        <?php }; ?> <!-- End foreach --> 
    </div>
<?php echo view('main/footer') ?>