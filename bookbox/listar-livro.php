<h2>Lista de Livros</h2>
<?php 
  $sql = "SELECT * FROM livros AS l INNER JOIN categorias AS c ON l.id_categoria = c.id_categoria";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table'>";
      print "<tr>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->nome_livro."</td>";
    print "<td>
    <button onclick=\"location.href='?page=detalhes-livro&id_livro=".$row->id_livro."';\" class='btn btn-outline-info'>Detalhes</button>
      </td>";
      
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>