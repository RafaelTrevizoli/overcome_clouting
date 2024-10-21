<?php
require_once ('classe-login/Db.class.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $senha = $_POST['senha'];  

    if ($login === 'login_admin' && $senha === '123456789') {
        $_SESSION['usuario'] = ['login' => $login, 'role' => 'admin'];
        echo "<script>
        window.alert('Login de administrador efetuado com sucesso!\\nClique no botão OK para continuar!');
        </script>";
        header("Refresh: 0; url=pags/crud-produto/painel.php");
        exit();
    }

    $senha = md5($senha);

    $db = new Db();
    $db->conectar();
    $db->setTabela("usuarios");

    $resultado = $db->consultar('*', "LOWER(login) = LOWER('$login')");

    if (!empty($resultado) && $resultado[0]['senha'] == $senha) {
        $_SESSION['usuario'] = $resultado[0];
        echo "<script>
        window.alert('Seu login foi efetuado com sucesso\\nClique no botão OK para continuar!');
        </script>";
        header("Refresh: 0; url=pags/crud-produto/principalpag-user.php");
        exit();
    } else {
        echo "<script>
        window.alert('Credenciais incorretas!\\nTente novamente!');
        </script>";
        header("Refresh: 0; url=index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="components/style.css">
        <title>Logue agora mesmo!</title>
    </head>

<body>

    <div class="container">
        <div class="conteudo primeiro-conteudo">

            <div class="primeira-coluna">
                <h2 class="titulo titulo-primario">Seja muito bem-vindo!</h2>
                <p class="descricao descricao-primaria">Para se manter conectado conosco</p>
                <p class="descricao descricao-primaria">Faça seu login com suas informações pessoais!</p>
            </div>

            <div class="segunda-coluna">

                <h2 class="titulo titulo-secundario">Faça Seu login:</h2>

                <form class="formulario" aaction="" method="post" enctype="multipart/form-data">
                    <label class="rotulo-input" for="">
                        <i class="far fa-envelope icone-modificado"><img src="pags/img/log.png" width="25px" alt=""></i>
                        <input type="text" id="login" name="login" placeholder="LOGIN" autocomplete="off" required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="fas fa-lock icone-modificado"><img src="pags/img/senha.png" width="25px" alt=""></i>
                        <input type="password" id="senha" name="senha" placeholder="SENHA" autocomplete="off"
                            required><br>
                    </label>

                    <input class="btn btn-secundario" type="submit" value="Login">

                    <a href="classe-login/cadastro.php" class="btn-login-cadastro">
                        <p>Cadastre-se</p>
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>