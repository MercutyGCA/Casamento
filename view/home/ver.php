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
            <h4 class="mt-3">Link do Produto</h4>
            <a style="text-decoration: none;" target="_blank" class="btn btn-primary" href="<?= $produto['descricao'] ?>" onclick="alerta()"><i class="fa-solid fa-cart-shopping"> <?= $produto['marca'] ?></i>
            </a>
            <hr style="color: black">
            <p id="danger">
                <i class="fa-solid fa-circle-exclamation"></i>
                <style>
                    #danger {
                        color: white;
                        margin-top: 1%;
                        margin-left: 35%;
                        margin-right: 35%;
                        border: 2px solid #b30000;
                        border-radius: 5px;
                        background-color: #ff1a1a;
                        text-align: center;
                    }

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
        </div>

    </div>
</div>
</p>