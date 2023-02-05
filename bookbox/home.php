<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookBox</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary;" style="background-color: #47b5ed;">
       <div class="container-fluid">
                <span class="navbar-logo">
                    <a href="home.php">
                        <img src="imagens\B².png" style="height: 2.2rem;">
                    </a>
                </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
    <form class="d-flex justify-content-center" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
    <li class="nav-item">
          <a class="nav-link active text-white" aria-current="home" href="index.php?page=listar-categoria">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="home" href="index.php?page=listar-livro">Livros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/Bookbox.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="imagens/Bookbox2.png" class="d-block w-100">
    </div>
  </div>
</div>
  </body>
</html>