<div class="container mt-2 mb-3">
    <h1>Cadastro de Categoria</h1>
    <hr>

    <form method="POST" action="<?= baseUrl() . "?c=categoria&m=salvar" ?>">
        <div class="mb-3">
            <label for="categoria" class="form-label">Nome</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $categoria['nome'] ?? "" ?>">
        </div>

        <input type="hidden" name="idcategoria" value="<?= $categoria['idCategoria'] ?? "" ?>">

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>