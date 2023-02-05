<h1>Resenha</h1>
<?php 
  $sql = "SELECT * FROM livros";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
      print "<tr>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td></td>";
      print "<p>".$row->resenha_livro."</p>";
      print "<td></td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>