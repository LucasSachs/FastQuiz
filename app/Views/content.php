<?php echo view('main/header') ?>

<div id="main" class="position-absolute top-50 start-50 translate-middle p-5 shadow border border-primary rounded">
    <div class="text-center mb-4">
        <h1>FastQuiz</h1>
        <h6 id="subtitle">Question: 1 of <?php echo count($questoes) ?></h6>
    </div>

    <?php foreach ($questoes as $key => $questao) : ?>
        <div hidden id="question_<?php echo ++$key ?>">
            <p class="text-dark text-center h5 mb-3"><?php echo $questao['question']; ?></p>

            <div class="d-flex justify-content-center gap-3">
                <?php foreach ($questao['answer'] as $key => $resposta) : ?>
                    <button id="resposta_<?php echo $key ?>" onclick="responder(this)" class='btn btn-primary resposta'><?php echo $resposta ?></button>
                <?php endforeach ?>
            </div>

            <div class="text-center mt-4">
                <span>Difficulty:</span>
                <span class="badge <?php echo $questao['difficulty_color'] ?>"><?php echo $questao['difficulty'] ?></span>
            </div>
        </div>
    <?php endforeach ?>

    <div id="mensagem_leaderboard" class="mt-5 text-center">
        <span class="text-muted">Por questão de privacidade, nenhum dado será salvo no Leaderboard.</span>
    </div>

    <!-- Formulário oculto para encaminhar dados para o back-end -->
    <form id="dadosForm" method="post" action="<?php echo base_url('/store') ?>" style="display: none;">
    </form>
</div>

<?php echo view('main/footer') ?>

<script>
    const qtdQuestoes = <?php echo count($questoes) ?>;
    var currentQuestion = 1;

    var answers = [];
    var question = `question_${currentQuestion}`;

    // Mostrar a primeira questão
    $(document).ready(function() {
        $('#question_1').removeAttr('hidden');
    });

    $('.resposta').on('click', function() {
        $('#question_' + currentQuestion).attr('hidden', 'hidden');
        if (currentQuestion == qtdQuestoes) {
            confetti({
                particleCount: 100,
                startVelocity: 30,
                spread: 360,
            });

            Swal.fire({
                title: "Você finalizou o Quiz!",
                text: "Calculando sua pontuação, aguarde...",
                icon: "success",
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
            });

            setTimeout(function() {
                window.location.href = "<?php echo base_url('leaderboard') ?>";
            }, 3000);

            //enviarDadosParaBackend();

            return $('#main').hide();
        }
        currentQuestion++;
        $('#subtitle').text('Question: ' + currentQuestion + ' of ' + qtdQuestoes);
        $('#question_' + currentQuestion).removeAttr('hidden');
    });

    function responder(resposta) {
        answers[question] = {
            question: currentQuestion,
            answer: resposta.id
        };
    }

    function enviarDadosParaBackend() {
        var formData = $('#dadosForm');
        formData.empty();

        $.each(answers, function(questionKey, answer) {
            var inputQuestion = $('<input>').attr('type', 'hidden').attr('name', questionKey).val(answer.question);
            var inputAnswer = $('<input>').attr('type', 'hidden').attr('name', answer.question).val(answer.answer);
            formData.append(inputQuestion);
            formData.append(inputAnswer);
        });

        formData.submit();
    }
</script>