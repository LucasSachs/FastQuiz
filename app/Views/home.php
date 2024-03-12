<?php echo view('main/header') ?>

<div id="main" class="position-absolute top-50 start-50 translate-middle p-5 shadow border border-primary rounded">
    <div class="text-center mb-4">
        <h1>FastQuiz</h1>
    </div>

    <form id="form" action="<?php echo base_url() ?>" method="post">
        <div class="form-group">
            <label for="categoria" class="mb-2">Selecione a categoria das questões:</label>
            <select id="categoria" name="categoria" class="form-control select2">
                <option selected value=""></option>
                <?php foreach($categorias as $categoria) : ?>
                <option value="<?php echo $categoria->id_api ?>"><?php echo $categoria->desc_categoria ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="quantidade" class="mb-2">Selecione a quantidade de questões:</label>
            <select id="quantidade" name="quantidade" class="form-control select2">
                <option selected value=""></option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
            </select>
        </div>

        <div class="mt-3">
            <span class="text-muted">
                A dificuldade das questões são escolhidas aleatoriamente
            </span>
        </div>

        <div class="mt-5 text-center">
            <button class="btn btn-primary">Gerar questões</button>
        </div>
    </form>
</div>

<?php echo view('main/footer') ?>
