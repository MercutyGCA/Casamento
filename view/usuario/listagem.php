<div class="container mt-2">
    <h1>Listagem de Usuários</h1>
    <hr>
    <a href="<?= baseUrl() . "?c=usuario&m=add" ?>" class="btn btn-success">Inserir Usuário</a>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class="col-10">Login</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td><?= $usuario['login'] ?></td>
                    <td>
                        <a href="<?= baseUrl() . "?c=usuario&m=excluir&id=" . $usuario['idUsuario'] ?>" class="btn btn-danger" title="excluir">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <a href="<?= baseUrl() . "?c=usuario&m=editar&id=" . $usuario['idUsuario'] ?>" class="btn btn-primary" title="editar">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>