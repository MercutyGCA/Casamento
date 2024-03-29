<div class="container mt-2">
    <h1>Listagem de Produtos</h1>
    <hr>

    <a href="<?= baseUrl() . "?c=produto&m=add" ?>" class="btn btn-success">Inserir Produto</a>
    <table class="table table-hover ">
        <thead>
            <tr>
                <th class="col-6">Nome</th>
                <th>Preço</th>
                <th>loja</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <td><?= $produto['loja'] ?></td>

                    <td>
                        <a href="<?= $produto['foto'] ?>">
                            <img src="<?= $produto['foto'] ?>" height="50px">
                        </a>
                    </td>


                    <td>
                        <a href="<?= baseUrl() . "?c=produto&m=excluir&id=" . $produto['idProduto'] ?>" class="btn btn-danger" title="excluir">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <a href="<?= baseUrl() . "?c=produto&m=editar&id=" . $produto['idProduto'] ?>" class="btn btn-primary" title="editar">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>