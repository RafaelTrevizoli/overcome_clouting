<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="website icon" type="png" href="../img/logo(1).png">
  <title>Overcome - Altera Produto</title>
  <link rel="stylesheet" href="../../components/altera.css">
</head>

<body>
  <?php

  include ("include/Conexao.php");
  include ("include/Categoria.php");
  include ("include/Produto.php");
  include ("verifica-admin.php");

  $id = $_GET['id'];
  $produto = new Produto($conexao);
  $produtoData = $produto->buscaProduto($id);

  $categoria = new Categoria($conexao);
  $categorias = $categoria->listaCategorias();
  ?>


  <div class="header1">
    <h1>Painel - Adminstração</h1>
  </div>
  <div class="header2">
    <a href="principalpag.php">Voltar</a>
  </div>

  <div class="geral">
    <div class="centro">
      <h2>Alterar Produto</h2>
      <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?= $produtoData['id'] ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $produtoData['nome'] ?>" />

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" value="<?= $produtoData['preco'] ?>" />

        <label for="precofic">Preço Fic:</label>
        <input type="number" id="precofic" name="precofic" value="<?= $produtoData['precofic'] ?>" />

        <label for="categoria_id">Categorias:</label>
        <select id="categoria_id" name="categoria_id">
          <?php foreach ($categorias as $categoria):
            $essaEhACategoria = $produtoData['categoria_id'] == $categoria['id'];
            $selecao = $essaEhACategoria ? "selected='selected'" : "";
            ?>
            <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
              <?= $categoria['nome'] ?>
            </option>
          <?php endforeach ?>
        </select>

        <button type="submit">Alterar</button>
      </form>
    </div>
  </div>

</body>

</html>