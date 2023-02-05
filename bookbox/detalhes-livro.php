<h3>Detalhes</h3>
<?php 
  $sql = "SELECT * FROM livros AS l INNER JOIN categorias AS c ON l.id_categoria = c.id_categoria";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
      print "<tr>";
      print "<th>Título</th>";
      print "<th>Categoria</th>";
      print "<th>Editora</th>";
      print "<th>Autor</th>";
      print "<th>Resenha</th>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->nome_livro."</td>";
      print "<td>".$row->nome_categoria."</td>";
      print "<td>".$row->editora_livro."</td>";
      print "<td>".$row->autor_livro."</td>";
      print "<td>".$row->resenha_livro."</td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>