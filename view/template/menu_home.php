<!-- Menu de Navegação -->

<nav class="navbar navbar-expand-lg" style="background-color: gray">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($categorias as $categoria) : ?>
          <li class="nav-item">
            <a style="color: white" class="nav-link active" aria-current="page" href="<?= baseUrl() . "?c=home&m=index&id=" . $categoria['idCategoria'] ?>"><b><?= $categoria['nome'] ?></b></a>
          </li>
        <?php endforeach; ?>
        <li class="nav-item">
          <a style="color: rgb(193, 92, 255)" class="nav-link" aria-current="page" href="<?= baseUrl() . "?c=restrito&m=login" ?>"><b style="color: indianred">Acesso Restrito</b></a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="<?= baseUrl() . "?c=home&m=search" ?>">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="search">
        <button type="submit">Buscar</button>
        <style>
          button {
            background-color: indianred;
            border-radius: 5px;
            border: 2px solid rgb(156, 48, 48);
            color: white;
          }
        </style>
      </form>
    </div>
  </div>
</nav>