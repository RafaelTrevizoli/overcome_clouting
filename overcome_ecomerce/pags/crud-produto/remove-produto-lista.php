<?php

include ("include/Conexao.php");
include ("include/Produto.php");
include ("verifica-admin.php");

$id = $_POST['id'];

$produto = new Produto($conexao);
$produto->removeProduto($id);

echo "<script>
alert('Produto apagado com sucesso!');
window.location.href = 'produto-lista.php';
</script>";
exit();
?>