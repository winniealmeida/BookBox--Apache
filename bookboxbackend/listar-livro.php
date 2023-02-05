<h1>Listar Livros</h1>
<?php 
  $sql = "SELECT * FROM livros AS l INNER JOIN categorias AS c ON l.id_categoria = c.id_categoria";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
      print "<tr>";
      print "<th>#</th>";
      print "<th>Título</th>";
      print "<th>Categoria</th>";
      print "<th>Editora</th>";
      print "<th>Autor</th>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->id_livro."</td>";
      print "<td>".$row->nome_livro."</td>";
      print "<td>".$row->nome_categoria."</td>";
      print "<td>".$row->editora_livro."</td>";
      print "<td>".$row->autor_livro."</td>";
      print "<td>
              <button onclick=\"location.href='?page=editar-livro&id_livro=".$row->id_livro."';\" class='btn btn-success'>Editar</button>

              <button onclick=\"location.href='?page=detalhes-livro&id_livro=".$row->id_livro."';\" class='btn btn-primary'>Detalhes</button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-livro&acao=excluir-livro&id_livro=".$row->id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
              </td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>