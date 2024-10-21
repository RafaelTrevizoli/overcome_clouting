<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../components/adicionar.css">
  <link rel="website icon" type="png" href="../img/logo(1).png">
  <title>Overcome - Adicionar Produto</title>
</head>

<body>


  <div class="header1">
    <h1>Painel - Adminstração</h1>
  </div>
  <div class="header2">
    <a href="painel.php">Voltar</a>
  </div>

  <?php
  include ("include/Conexao.php");
  include ("include/Categoria.php");
  include ("verifica-admin.php");
  $categoria = new Categoria($conexao);
  $categorias = $categoria->listaCategorias();
  ?>

  <div class="geral">
    <div class="centro">
      <form action="adiciona-produto.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco" required>

        <label for="precofic">Preço Base:</label>
        <input type="text" name="precofic" id="precofic" required>

        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id" required>
          <?php foreach ($categorias as $categoria): ?>
            <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
          <?php endforeach; ?>
        </select>

        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" id="imagem" required>

        <button type="submit">Adicionar Produto</button>
      </form>
    </div>
  </div>

</body>

</html>