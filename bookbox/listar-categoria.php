<h2>Categorias</h2>
<?php 
  $sql = "SELECT * FROM categorias";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
      print "<tr>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->nome_categoria."</td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>