<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Overcome - Adiciona Produto</title>
</head>

<body>

  <?php
  include ("include/Conexao.php");
  include ('include/Produto.php');
  include ("verifica-admin.php");


  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $precofic = $_POST["precofic"];
  $categoria_id = $_POST["categoria_id"];
  $imagem = $_FILES["imagem"];

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($imagem["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $check = getimagesize($imagem["tmp_name"]);
  if ($check === false) {
    echo "<script>
    alert('O arquivo não é uma imagem.');
    window.location.href = 'produto-formulario.php';
    </script>";
    exit();
  }

  if ($imagem["size"] > 5000000) {
    echo "<script>
    alert('Desculpe, o seu arquivo é muito grande.');
    window.location.href = 'produto-formulario.php';
    </script>";
  }

  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "<script>
    alert('Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.');
    window.location.href = 'produto-formulario.php';
    </script>";
  }

  if (move_uploaded_file($imagem["tmp_name"], $target_file)) {
    $produto = new Produto($conexao);
    if ($produto->insereProduto($nome, $preco, $precofic, $categoria_id, $target_file)) {

      echo "<script>
    alert('O produto {$nome}, {$preco}, {$precofic} foi adicionado com sucesso!');
    window.location.href = 'produto-formulario.php';
    </script>";

    } else {
      $msg = mysqli_error($conexao);
      echo "O Produto {$nome} não foi adicionado: {$msg}";
    }
  } else {
    die("Desculpe, houve um erro ao fazer upload do seu arquivo.");
  }
  ?>



</body>

</html>