<!-- Menu de Navegação -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?c=categoria"><b>Categoria</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?c=produto"><b>Produtos</b></a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?c=usuario"><b>Usuários</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= baseUrl() . "?c=restrito&m=logout" ?>"><b style="color: indianred;">Sair</b></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
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