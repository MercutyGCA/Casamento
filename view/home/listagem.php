<p style="background-color: #c0c0c0">
<div class="container mt-2">
    <div class="id">
        <p>Abaixo mostra um link onde se enconra uma tabela com os nomes e presentes enviados para os noivos.
        <p><a href="https://docs.google.com/spreadsheets/d/1MCS4u63-VXnJcrTwsSSZNlUqhkxqSIHVm-uOptBhsIg/edit?usp=sharing" id="bm" target="_blank">Link da tabela</a></p>
        </p>
    </div>
    <style>
        .id {
            text-align: center;
            border: 2px solid indianred;
            margin-top: 1%;
            margin-bottom: 1%;
            margin-left: 23%;
            margin-right: 23%;
            border-radius: 5px;
            box-shadow: 2px 2px 2px indianred;
        }

        #bm {
            padding: 2px;
            text-decoration: none;
            color: white;
            border: 2px solid rgb(156, 48, 48);
            border-radius: 5px;
            background-color: indianred;
        }
    </style>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <script>
            function alerta2() {
                alert(
                    "Favor preencher o formulário antes de realizar a compra, assim os noivos poderão saber quem enviou qual presente."
                );
            }
        </script>
        <?php foreach ($produtos as $produto) : ?>
            <div class="col">
                <div class="card h-100" style="border: 3px solid indianred">
                    <img src="<?= $produto['foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $produto['nome'] ?></p>
                        <a onclick="alerta2()" href="<?= baseUrl() . "?c=home&m=ver&id=" . $produto['idProduto'] ?>" class="text-decoration-none text-dark stretched-link">
                            <h5 class="card-title">R$ <?= $produto['preco'] ?></h5>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</p>