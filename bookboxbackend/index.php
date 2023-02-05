<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookBox</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" aria-current="page" href="index.php">B²</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=adicionar-categoria">Adicionar</a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=adicionar-livro">Adicionar</a></li>
            <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
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