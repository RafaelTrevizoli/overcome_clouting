<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/principal.css">
    <link rel="website icon" type="png" href="../img/logo(1).png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Overcome - Cloting</title>
</head>

<body>
    <header>
        <nav>
            <div class="container-header-1">
                <ul class="lista-header-1">
                    <a href="">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="">
                        <i class='bx bxl-pinterest-alt'></i>
                    </a>
                    <a href="">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </ul>

                <ul class="lista-header-2">
                    <img src="../img/envioCaminhao.png" height="28px" alt="">
                    <li>Frete grátis para todo Brasil! <y>saiba mais </y>ㅤ|
                    </li>
                    <img src="../img/carteira.png" height="28px" alt="">
                    <li>6x sem juros! <y>aproveite </y>ㅤ|
                    </li>
                    <img src="../img/maoSegurando.png" height="28px" alt="">
                    <li>Boleto 5% Off <y>ou pix </y>
                    </li>
                </ul>
            </div>

            <section>
                <ul class="lista-header-3">
                    <a href="../../index.php">
                        <i class='bx bx-user'></i>
                    </a>
                </ul>
            </section>

            <div class="container-header-2">
                <ul>
                    <li><img class="logo-header" src="../img/logo(1).png" width="550px"></li>
                </ul>
            </div>

            <div class="container-header-3">
                <div>
                    <input class="barra-pesquisa" type="text" id="txtbusca"
                        placeholder="    Oque você está procurando?">
                </div>
            </div>
        </nav>
        <div class="categorias-header">
            <section class="menu-1">
                <div class="menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar-text">MENU</span>
                </div>
            </section>
            <ul class="nav-menu">
                <li><a href="#"><img class="icones-hover" src="../img/caixaAberta.png" width="30px" alt=""></a><br>Todos
                    os produtos</li>
                <li><a href="coletes-user.php"><img class="icones-hover" src="../img/colete.png" width="30px"
                            alt=""></a><br>Jaquetas</li>
                <li><a href="meias-user.php"><img class="icones-hover" src="../img/meias.png" width="30px"
                            alt=""></a><br>Meias</li>
                <li><a href="chapeus-user.php"><img class="icones-hover" src="../img/touca.png" width="30px"
                            alt=""></a><br>Chápeus</li>
                <li><a href="camisas-user.php"><img class="icones-hover" src="../img/camiseta (1).png" width="30px"
                            alt=""></a><br>Camisas</li>
            </ul>
        </div>
    </header>

    <main>

        <?php
        include ("include/conexao.php");
        include ("include/Produto.php");

        $produtoObj = new Produto($conexao);
        
        ?>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossas camisetas mais vendidas!</p>

        <div class="geral">
            <?php
            $produtos = $produtoObj->listaProdutos(1); 
            
            foreach ($produtos as $produto):
                ?>
                <div class="border-pvc">
                    <ul><img src="<?php echo $produto['imagem']; ?>" alt=""></ul>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="text-1"><?= $produto['nome'] ?></p>
                    </form>

                    <section><img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">(99+)
                    </section>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="texto-2">a partir de</p>
                        <p class="texto-4"><s class="texto-3">R$<?= $produto['precofic'] ?></s>R$<?= $produto['preco'] ?>
                        </p>
                    </form>

                </div>
            <?php endforeach ?>

        </div>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossas meias mais vendidas!</p>


        <div class="geral">
            <?php
            $produtos = $produtoObj->listaProdutos(4); 
            
            foreach ($produtos as $produto):
                ?>
                <div class="border-pvc">
                    <ul><img src="<?php echo $produto['imagem']; ?>" alt="<?= $produto['nome'] ?>"></ul>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="text-1"><?= $produto['nome'] ?></p>
                    </form>

                    <section><img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">(99+)
                    </section>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="texto-2">a partir de</p>
                        <p class="texto-4"><s class="texto-3">R$<?= $produto['precofic'] ?></s>R$<?= $produto['preco'] ?>
                        </p>
                    </form>

                </div>
            <?php endforeach ?>
        </div>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossas jaquetas mais vendidas!</p>

        <div class="geral">
            <?php
            $produtos = $produtoObj->listaProdutos(2); 
            
            foreach ($produtos as $produto):
                ?>
                <div class="border-pvc">
                    <ul><img src="<?php echo $produto['imagem']; ?>" alt="<?= $produto['nome'] ?>"></ul>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="text-1"><?= $produto['nome'] ?></p>
                    </form>

                    <section><img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">(99+)
                    </section>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="texto-2">a partir de</p>
                        <p class="texto-4"><s class="texto-3">R$<?= $produto['precofic'] ?></s>R$<?= $produto['preco'] ?>
                        </p>
                    </form>

                </div>
            <?php endforeach ?>
        </div>

        <h1 class="titulo-main">Aquela coleção especial</h1>
        <p class="subtitulo-main">ㅤㅤㅤConheça nossos bonés mais vendidos!</p>

        <div class="geral">
            <?php
            $produtos = $produtoObj->listaProdutos(3);
            
            foreach ($produtos as $produto):
                ?>
                <div class="border-pvc">
                    <ul><img src="<?php echo $produto['imagem']; ?>" alt="<?= $produto['nome'] ?>"></ul>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="text-1"><?= $produto['nome'] ?></p>
                    </form>

                    <section><img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">
                        <img src="../img/star (1).png" width="25px" alt="">(99+)
                    </section>

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p class="texto-2">a partir de</p>
                        <p class="texto-4"><s class="texto-3">R$<?= $produto['precofic'] ?></s>R$<?= $produto['preco'] ?>
                        </p>
                    </form>

                </div>
            <?php endforeach ?>
        </div>
    </main>
    <?php include ("include/Footer.php"); ?>
</body>

</html>