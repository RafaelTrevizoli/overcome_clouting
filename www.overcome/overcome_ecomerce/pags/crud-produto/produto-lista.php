<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../components/listar.css">
  <link rel="website icon" type="png" href="../img/logo(1).png">
  <title>Overcome - Listagem de Produtos</title>
</head>

<body>


  <div class="header1">
    <h1>Painel - Administração</h1>
  </div>
  <div class="header2">
    <a href="painel.php">Voltar</a>
  </div>

  <div class="header3">
    <p>Camisetas</p>
  </div>

  <?php

  include ("include/Conexao.php");
  include ("include/Produto.php");
  include ("verifica-admin.php");

  if (array_key_exists("removido", $_GET) && $_GET["removido"] == true):
    ?>

  <?php endif ?>
  <div class="container">
    <table class="product-table">
      <?php
      $produto = new Produto($conexao);
      $produtos = $produto->listaProdutos(1); 
      foreach ($produtos as $produtoData):
        ?>
        <tr class="product-row">
          <td class="product-cell"><?= $produtoData['nome'] ?></td>
          <td class="product-cell"><?= $produtoData['precofic'] ?></td>
          <td class="product-cell"><?= $produtoData['preco'] ?></td>
          <td class="product-cell"><img src="<?= $produtoData['imagem'] ?>" alt="<?= $produtoData['nome'] ?>" width="100">
          </td>
          <td class="product-cell"><a class="btn btn-primary"
              href="produto-altera-formulario-lista.php?id=<?= $produtoData['id'] ?>">Alterar</a></td>
          <td class="product-cell">
            <form action="remove-produto-lista.php" method="post">
              <input type="hidden" name="id" value="<?= $produtoData['id'] ?>" />
              <button>Remover</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="header3">
    <p>Jaquetas</p>
  </div>

  <div class="container">
    <table class="product-table">
      <?php
      $produto = new Produto($conexao);
      $produtos = $produto->listaProdutos(2); 
      foreach ($produtos as $produtoData):
        ?>
        <tr class="product-row">
          <td class="product-cell"><?= $produtoData['nome'] ?></td>
          <td class="product-cell"><?= $produtoData['precofic'] ?></td>
          <td class="product-cell"><?= $produtoData['preco'] ?></td>
          <td class="product-cell"><img src="<?= $produtoData['imagem'] ?>" alt="<?= $produtoData['nome'] ?>" width="100">
          </td>
          <td class="product-cell"><a class="btn btn-primary"
              href="produto-altera-formulario-lista.php?id=<?= $produtoData['id'] ?>">Alterar</a></td>
          <td class="product-cell">
            <form action="remove-produto-lista.php" method="post">
              <input type="hidden" name="id" value="<?= $produtoData['id'] ?>" />
              <button>Remover</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="header3">
    <p>Bonés</p>
  </div>

  <div class="container">
    <table class="product-table">
      <?php
      $produto = new Produto($conexao);
      $produtos = $produto->listaProdutos(3); 
      foreach ($produtos as $produtoData):
        ?>
        <tr class="product-row">
          <td class="product-cell"><?= $produtoData['nome'] ?></td>
          <td class="product-cell"><?= $produtoData['precofic'] ?></td>
          <td class="product-cell"><?= $produtoData['preco'] ?></td>
          <td class="product-cell"><img src="<?= $produtoData['imagem'] ?>" alt="<?= $produtoData['nome'] ?>" width="100">
          </td>
          <td class="product-cell"><a class="btn btn-primary"
              href="produto-altera-formulario-lista.php?id=<?= $produtoData['id'] ?>">Alterar</a></td>
          <td class="product-cell">
            <form action="remove-produto-lista.php" method="post">
              <input type="hidden" name="id" value="<?= $produtoData['id'] ?>" />
              <button>Remover</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div class="header3">
    <p>Meias</p>
  </div>

  <div class="container">
    <table class="product-table">
      <?php
      $produto = new Produto($conexao);
      $produtos = $produto->listaProdutos(4); 
      foreach ($produtos as $produtoData):
        ?>
        <tr class="product-row">
          <td class="product-cell"><?= $produtoData['nome'] ?></td>
          <td class="product-cell"><?= $produtoData['precofic'] ?></td>
          <td class="product-cell"><?= $produtoData['preco'] ?></td>
          <td class="product-cell"><img src="<?= $produtoData['imagem'] ?>" alt="<?= $produtoData['nome'] ?>" width="100">
          </td>
          <td class="product-cell"><a class="btn btn-primary"
              href="produto-altera-formulario-lista.php?id=<?= $produtoData['id'] ?>">Alterar</a></td>
          <td class="product-cell">
            <form action="remove-produto-lista.php" method="post">
              <input type="hidden" name="id" value="<?= $produtoData['id'] ?>" />
              <button>Remover</button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>


</body>

</html>