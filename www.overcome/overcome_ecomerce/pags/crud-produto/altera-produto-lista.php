<?php

include ('include/Conexao.php');
include ('include/Produto.php');
include ("verifica-admin.php");


$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$precofic = $_POST["precofic"];
$categoria_id = $_POST["categoria_id"];

$produto = new Produto($conexao);
if ($produto->alteraProduto($id, $nome, $preco, $precofic, $categoria_id)) {
  echo "<script>
            alert('Produto alterado com sucesso!');
            window.location.href = 'produto-lista.php';
          </script>";
  exit();
} else {
  echo "<script>
            alert('Erro ao alterar o produto!');
            window.location.href = 'paginadeerro.php'; // Redirecione para uma página de erro, se desejar
          </script>";
  exit();
}

?>