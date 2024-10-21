<?php

include ("include/Conexao.php");
include ("include/Produto.php");
include ("verifica-admin.php");

$id = $_POST['id'];

$produto = new Produto($conexao);

$produtoData = $produto->buscaProduto($id);

$produto->removeProduto($id);

$imagem = "uploads/" . $produtoData['imagem'];
if (file_exists($imagem)) {
    unlink($imagem);
}

echo "<script>
alert('Produto apagado com sucesso!');
window.location.href = 'principalpag.php';
</script>";
exit();
?>