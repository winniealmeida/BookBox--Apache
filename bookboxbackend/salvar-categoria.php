<?php
switch ($_REQUEST["acao"]) {
  case 'adicionar-categoria':

    $sql = "INSERT INTO categorias (nome_categoria) VALUES ('".$_POST["nome_categoria"]."')";

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Cadastrado');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }else{
      print "<script>alert('Naõ foi possível cadastrar');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }
    break;
  
  case 'editar-categoria':
    $nome_categoria = $_POST["nome_categoria"];

    $sql = "UPDATE categorias SET
                nome_categoria='{$nome_categoria}'
                WHERE 
                id_categoria=".$_REQUEST["id_categoria"];

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Editado');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }else{
      print "<script>alert('Naõ foi possível editar');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }
    break;
  case 'excluir-categoria':

  $sql = "DELETE FROM categorias WHERE id_categoria=".$_REQUEST["id_categoria"];

  $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Excluído');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }else{
      print "<script>alert('Naõ foi possível excluir');</script>";
      print "<script>location.href='?page=listar-categoria';</script>";
    }
    break;
}