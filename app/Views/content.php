<?php echo view('main/header') ?>

<div id="main" class="position-absolute top-50 start-50 translate-middle">
    <div class="text-center mb-4">
        <h1>FastQuiz</h1>
        <h6 id="subtitle">Question: 1 of 10</h6>
    </div>
    <?php foreach($questoes as $key => $questao) { ?>
        <div hidden id="question_<?php echo ++$key ?>" class="mb-5">
            <p class="text-dark text-center h5 mb-3"><?php echo $questao['question']; ?></p>
            <div class="d-flex justify-content-center gap-3">
                <?php
                    foreach($questao['answer'] as $resposta)
                        echo "<button class='btn btn-primary resposta'>$resposta</button>";
                ?>
            </div>
            <div class="text-center mt-4">
                <span>Difficulty:</span>
                <span class="badge <?php echo $questao['difficulty_color'] ?>"><?php echo $questao['difficulty'] ?></span>
            </div>
        </div>
    <?php }; ?> <!-- End foreach --> 
</div>

<?php echo view('main/footer') ?>

<script>
    var currentQuestion = 1;

    // Mostrar a primeira questão
    $(document).ready(function() {
        $('#question_1').removeAttr('hidden');
    });

    $('.resposta').on('click', function() {
        $('#question_' + currentQuestion).attr('hidden', 'hidden');
        if(currentQuestion == 10) {
            Swal.fire({
                title: "Good job!",
                text: "You finished the quiz!",
                icon: "success",
                confirmButtonText: "<i class='bi bi-hand-thumbs-up-fill'></i> Yaay!",
            });

            return $('#main').hide();
        }
        currentQuestion++;
        $('#subtitle').text('Question: ' + currentQuestion + ' of 10');
        $('#question_' + currentQuestion).removeAttr('hidden');
    });
</script>