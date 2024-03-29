<div class="container mt-2 mb-3">
    <h1>Cadastro de usuario</h1>
    <hr>

    <form method="POST" action="<?= baseUrl() . "?c=usuario&m=salvar" ?>">
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="<?= $usuario['login'] ?? "" ?>" <?= isset($usuario) ? "readonly" : "" ?>>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <input type="hidden" name="idusuario" value="<?= $usuario['idUsuario'] ?? "" ?>">

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>