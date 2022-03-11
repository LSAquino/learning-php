<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form action="#" method="post">

                <div class="mb-3">
                    <label for="text_usuario" class="form-label">Usuário:</label>
                    <input type="text" name="text_usuario" id="text_usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="text_senha" class="form-label">Senha:</label>
                    <input type="password" name="text_senha" id="text_senha" class="form-control">
                </div>

                <?php if (isset($erro)) : ?>
                    <p class="alert alert-danger text center p-2"><?= $erro ?></p>
                <?php endif; ?>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>