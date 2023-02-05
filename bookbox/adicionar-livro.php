<h1>Adicionar Livro</h1>
<form action="?page=salvar-livro" method="POST">
  <input type="hidden" name="acao" value="adicionar-livro">
	<div class="mb-3">
   <label>Categoria</label>
   <select name="id_categoria" class="form-control">
    <option>-=Escolha a Categoria=-</option>
     <?php
     $sql = "SELECT * FROM categorias";
     $res = $conn->query($sql);
     while($row = $res->fetch_object()){
      print "<option value='".$row->id_categoria."'>";
      print $row->nome_categoria."</option>";
     }
     ?>
   </select> 
  </div>

  <div class="mb-3">
    <label>Título</label>
    <input type="text" name="nome_livro" class="form-control">
  </div><div class="mb-3">
    <label>Editora</label>
    <input type="text" name="editora_livro" class="form-control">
  </div>
  <div class="mb-3">
    <label>Autor</label>
    <input type="text" name="autor_livro" class="form-control">
  </div>
  <label>Resenha</label>
  <textarea type="text" name="resenha_livro" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <button class="btn btn-primary">Enviar</button>
  </div>
</form>