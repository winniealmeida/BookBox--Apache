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
          <a class="nav-link active text-white" aria-current="page" href="?page=listar-categoria">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="?page=listar-livro">Livros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col">
      <?php
      include("config.php");
        switch(@$_REQUEST["page"]){
           case "adicionar-categoria":
          include("adicionar-categoria.php");
            break;

            case "listar-categoria":
          include("listar-categoria.php");
            break;
            
            case "salvar-categoria":
          include("salvar-categoria.php");
            break;

            case "adicionar-livro":
          include("adicionar-livro.php");
            break;

            case "listar-livro":
          include("listar-livro.php");
            break;

            case "salvar-livro":
          include("salvar-livro.php");
            break;

            case "editar-livro":
          include("editar-livro.php");
        break;
            
           case "editar-categoria":
              include("editar-categoria.php");
            break;

            case "detalhes-livro":
            include("detalhes-livro.php");
        } 
      ?> 
    </div>
  </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body> 
  </body>
</html>