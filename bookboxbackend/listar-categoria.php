<h1>Listar Categorias</h1>
<?php 
  $sql = "SELECT * FROM categorias";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
      print "<tr>";
      print "<th>#</th>";
      print "<th>Nome</th>";
      print "</tr>";
    while ($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->id_categoria."</td>";
      print "<td>".$row->nome_categoria."</td>";
      print "<td>
              <button onclick=\"location.href='?page=editar-categoria&id_categoria=".$row->id_categoria."';\" class='btn btn-success'>Editar</button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-categoria&acao=excluir-categoria&id_categoria=".$row->id_categoria."';}else{false;}\" class='btn btn-danger'>Excluir</button>
              </td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
?>