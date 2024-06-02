<?php
include ("Db.class.php");
include ("Usuario.php");

$db = new Db();
$db->conectar();
$db->setTabela("usuarios");

if (isset($_POST['cadastro'])) {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $resultado = $db->consultar('*', "email = '$email'");
    if (empty($resultado)) {

        $novoUsuario = new Usuario($cpf, $nome, $celular, $email, $login, $senha);
        $novoUsuario->gravar($db);

        echo "<script>
        window.alert('Olá $nome! Seu cadastro foi realizado com sucesso!\\nVocê será redirecionado para a página ao clicar no botão OK');
        </script>";
        header("Refresh: 0; url=../index.php");
        exit();

    } else {

        echo "<script>
        window.alert('Dados não existentes! Procure um administrador!');
        </script>";
        header("Refresh: 0; url=cadastro.php");

        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/style.css">
    <title>Cadastre-se agora mesmo!</title>
</head>

<body>

    <div class="container">
        <div class="conteudo primeiro-conteudo">

            <div class="primeira-coluna">
                <h2 class="titulo titulo-primario">Seja muito bem-vindo!</h2>
                <p class="descricao descricao-primaria">Para se manter conectado conosco</p>
                <p class="descricao descricao-primaria">Faça seu cadastro com suas informações pessoais!</p>
            </div>

            <div class="segunda-coluna">

                <h2 class="titulo titulo-secundario">Crie sua conta:</h2>

                <form class="formulario" action="" method="post">

                    <input type="hidden" name="cadastro" value="1">

                    <label class="rotulo-input" for="">
                        <i class="far fa-envelope icone-modificado"><img src="../pags/img/nome.png" width="25px"
                                alt=""></i>
                        <input type="text" id="nome" name="nome" placeholder="NOME" required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="far fa-user icone-modificado"><img src="../pags/img/usuario.png" width="25px"
                                alt=""></i>
                        <input type="text" id="cpf" name="cpf" placeholder="CPF" required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="far fa-user icone-modificado"><img src="../pags/img/e-mail.png" width="25px"
                                alt=""></i>
                        <input type="email" id="email" name="email" placeholder="EMAIL" required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="fas fa-lock icone-modificado"><img src="../pags/img/cel2.png" width="25px" alt=""></i>
                        <input type="text" id="celular" name="celular" placeholder="CELULAR" required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="far fa-envelope icone-modificado"><img src="../pags/img/log.png" width="25px"
                                alt=""></i>
                        <input type="text" id="login" name="login" placeholder="LOGIN " required><br>
                    </label>

                    <label class="rotulo-input" for="">
                        <i class="fas fa-lock icone-modificado"><img src="../pags/img/senha.png" width="25px"
                                alt=""></i>
                        <input type="password" id="senha" name="senha" placeholder="SENHA" required><br>
                    </label>

                    <input class="btn btn-secundario " type="submit" value="Cadastrar">

                    <a href="../index.php" class="btn-login-cadastro">
                        <p>Já tem uma conta?</p>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>