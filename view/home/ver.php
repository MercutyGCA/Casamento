<!-- Conteúdo da Página -->
<p class="mt-3">
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <img width="100%" src="<?= $produto['foto'] ?>" alt="..." style="border: 3px solid indianred; border-radius: 5px;">
        </div>

        <div class="col-6">
            <script src="scripts/endereco.js"></script>
            <h4><?= $produto['nome'] ?></h4>
            <h5>R$ <?= $produto['preco'] ?></h5>
            <hr style="color: black">
            <p id="danger">
                <style>
                    #pei {
                        padding-top: 5px;
                        padding-bottom: 5px;
                        color: white;
                        border: 2px solid;
                        border-color: blue;
                        border-radius: 5px;
                        text-align: center;
                        background-color: #0D6EFD;
                    }

                    #ipd {
                        margin-top: 1%;
                        padding-top: 5px;
                        padding-bottom: 5px;
                        color: dark;
                        border: 2px solid;
                        border-color: darkgreen;
                        border-radius: 5px;
                        text-align: center;
                        background-color: #33cc33;
                    }
                </style>

            <div id="pei">
                Não esqueça de quando for finalizar a compra, por favor adicionar o endereço a seguir para entrega.
            </div>

            <div id="ipd">
                <b>exemplo</b>
            </div>
            </p>
            <hr style="color: black">
            <p>
            <div id="result">
            </div>
            <h4> Por favor, responda o formulário abaixo primeiro.</h4>
            </p>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfMcQXte9so4Y6QuLmamtzlwUXaQyuNgsB7txtp1jjpFqcvtQ/viewform?embedded=true" width="500" height="36%" frameborder="0" marginheight="0" marginwidth="0" style="border: 3px solid indianred; border-radius: 5px;">Carregando…</iframe>
            <h4>Link do Produto</h4>
            <a style="text-decoration: none;" target="_blank" class="mb-5 btn btn-primary" href="<?= $produto['descricao'] ?>" onclick="alerta()"><i class="fa-solid fa-cart-shopping"> <?= $produto['marca'] ?></i></a>
        </div>
    </div>

</div>
</div>
</p>