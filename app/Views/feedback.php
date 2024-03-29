<?php echo view('main/header') ?>

<div id="main" class="position-absolute top-50 start-50 translate-middle p-5 shadow border border-primary rounded col-6">
    <div class="text-center mb-4">
        <h1>Enviar seu Feedback</h1>
    </div>

    <form id="form" action="<?php echo base_url('feedback') ?>" method="post">
        <div class="row">
            <div class="form-group col-6">
                <label for="nome" class="mb-2">Nome:</label>
                <input type="text" id="nome" maxlength="26" name="nome" class="form-control <?php echo is_null(old('nome')) ? NULL : (isset(session()->getFlashdata('errors')['nome']) ? 'is-invalid' : 'is-valid') ?>" value="<?php echo old('nome') ?>"></input>

                <div class="invalid-feedback">
                    <?php echo session()->getFlashdata('errors')['nome'] ?? NULL ?>
                </div>
            </div>

            <div class="form-group col-6">
                <label for="email" class="mb-2">Email:</label>
                <input type="text" id="email" maxlength="256" name="email" class="form-control <?php echo is_null(old('email')) ? NULL : (isset(session()->getFlashdata('errors')['email']) ? 'is-invalid' : 'is-valid') ?>" value="<?php echo old('email') ?>"></input>

                <div class="invalid-feedback">
                    <?php echo session()->getFlashdata('errors')['email'] ?? NULL ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group mt-3">
                <label for="texto" class="mb-2">Seu Feedback:</label>
                <textarea id="texto" rows="5" maxlength="256" name="texto" style="resize: none" class="form-control <?php echo is_null(old('texto')) ? NULL : (isset(session()->getFlashdata('errors')['texto']) ? 'is-invalid' : 'is-valid') ?>"><?php echo old('texto') ?></textarea>
                <span class="text-muted small">Tamanho máximo de 256 caracteres</span>

                <div class="invalid-feedback">
                    <?php echo session()->getFlashdata('errors')['texto'] ?? NULL ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mt-5 text-center">
                <button type="submit" class="btn btn-primary">Enviar Feedback</button>
            </div>
        </div>
    </form>
</div>

<?php echo view('main/footer') ?>