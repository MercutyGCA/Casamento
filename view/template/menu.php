<!-- Menu de Navegação -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: gold">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?c=categoria">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?c=produto">Produtos</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?c=usuario">Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= baseUrl() . "?c=restrito&m=logout" ?>">Sair</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>