<?php echo view('main/header') ?>

<div id="main" class="position-absolute top-50 start-50 translate-middle p-5 shadow border border-primary rounded w-50">
    <div class="text-center mb-5">
        <h1>FastQuiz</h1>
        <h6>Leaderboard</h6>
    </div>

    <div id="body" class="text-center d-flex justify-content-center">
        <table class="table table-hover table-borderless w-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Pontuação</th>
                    <th scope="col">Tempo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><i class="bi bi-trophy-fill" style="color: #ffd700"></i> 1</th>
                    <td>Lucas Sachs</td>
                    <td>7 of 10</td>
                    <td>03:42 min</td>
                </tr>

                <tr>
                    <th scope="row"><i class="bi bi-trophy-fill" style="color: #c0c0c0"></i> 2</th>
                    <td>Lucas Sachs</td>
                    <td>7 of 10</td>
                    <td>03:42 min</td>
                </tr>

                <tr>
                    <th scope="row"><i class="bi bi-trophy-fill" style="color: #cd7f32"></i> 3</th>
                    <td>Lucas Sachs</td>
                    <td>7 of 10</td>
                    <td>03:42 min</td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>Lucas Sachs</td>
                    <td>7 of 10</td>
                    <td>03:42 min</td>
                </tr>

                <tr>
                    <th scope="row">5</th>
                    <td>Lucas Sachs</td>
                    <td>7 of 10</td>
                    <td>03:42 min</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-5 text-center">
        <span class="text-muted">Os dados exibidos neste Leaderboard são fictícios, e são usados apenas para fins de demonstração.</span>
    </div>
</div>

<?php echo view('main/footer') ?>