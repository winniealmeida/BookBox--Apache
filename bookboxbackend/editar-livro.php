<h1>Editar Livro</h1>
<?php
    $sql = "SELECT * FROM livros AS l INNER JOIN categorias AS c ON l.id_categoria = c.id_categoria";
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-livro" method="POST">
<input type="hidden" name="acao" value="editar-livro">
<input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">
<form>
  <div class="mb-3">
   <label>Categoria</label>
   <select name="id_categoria" class="form-control">
    <option>-=Escolha a Categoria=-</option>
     <?php

      print "<option value='".$row->id_categoria."'>";
      print $row->nome_categoria."</option>";
     
     ?>
   </select> 
  </div>
  <div class="mb-3">
    <label>Título</label>
    <input type="text" name="nome_livro" value="<?php print $row->nome_livro; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Editora</label>
    <input type="text" name="editora_livro" value="<?php print $row->editora_livro; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Autor</label>
    <input type="text" name="autor_livro" value="<?php print $row->autor_livro; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Resenha</label>
    <textarea type="text" name="resenha_livro" value="<?php print $row->resenha_livro; ?>" class="form-control"> </textarea>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>