<?php
switch ($_REQUEST["acao"]) {
  case 'adicionar-livro':

    $sql = "INSERT INTO livros (id_categoria, nome_livro, editora_livro, autor_livro, resenha_livro) VALUES (".$_POST["id_categoria"].",'".$_POST["nome_livro"]."','".$_POST["editora_livro"]."','".$_POST["autor_livro"]."','".$_POST["resenha_livro"]."')";

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Cadastrado');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }else{
      print "<script>alert('Naõ foi possível cadastrar');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }
    break;
  
  case 'editar-livro':
    $nome_livro = $_POST["nome_livro"];
    $editora_livro = $_POST["editora_livro"];
    $autor_livro = $_POST["autor_livro"];
    $resenha_livro = $_POST["resenha_livro"];

    $sql = "UPDATE livros SET
                nome_livro='{$nome_livro}',
                autor_livro='{$autor_livro}',
                editora_livro='{$editora_livro}',
                resenha_livro='{$resenha_livro}'
                WHERE 
                id_livro=".$_REQUEST["id_livro"];

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Editado');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }else{
      print "<script>alert('Naõ foi possível editar');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }
    break;
  case 'excluir-livro':

  $sql = "DELETE FROM livros WHERE id_livro=".$_REQUEST["id_livro"];

  $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Excluído');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }else{
      print "<script>alert('Naõ foi possível excluir');</script>";
      print "<script>location.href='?page=listar-livro';</script>";
    }
    break;
}