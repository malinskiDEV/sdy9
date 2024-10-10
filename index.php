<?php
include_once("dados.php");
var_dump($dados)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <header class="header">
        <div class="menu">
            <ul>
                <li><a href="#kids">Lanches</a></li>
                <li><a href=https://pt.wikipedia.org/wiki/SpongeBob_SquarePants_(personagem)>História</a></li>
            </ul>
        </div>
        <h1 class="lal">SIRI CASCUDO <br> >.<< /h1>
                <img src="./img/crusty.png" alt="">
    </header>


    <div class="container">
        <h1 class="lanchao">LANCHES TENDÊNCIAS</h1>
        <div class="roler1">

            <?php foreach ($dados as $item) { ?>
                <?php if ($item["tipo"] == "lanche") { ?>

                    <div class="roler">
                        <img src="./img/<?= $item["imagem"]; ?>" alt="">
                        <h2> <?= $item["nome"]; ?> </h2>
                        <div class="botaum">
                            <h1><?= $item["preco"]; ?></h1>
                            <button>Comprar</button>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>


        <!-- REFRIS -->
        <br> <br> <br>
        <h1 class="lanchao">REFRIGERANTES TENDÊNCIAS</h1>

        <div class="roler1">
            <?php foreach ($dados as $item) { ?>
                <?php if ($item["tipo"] == "bebidas") { ?>

                    <div class="roler">
                        <img src="./img/<?= $item["imagem"]; ?>" alt="">
                        <h2><?= $item["nome"]; ?></h2>
                        <div class="botaum">
                            <button>Comprar</button>
                            <H1><?= $item["preco"]; ?></H1>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

        <!-- EXTRAS -->

        <br> <br> <br>
        <h1 class="lanchao">EXTRAS</h1>
        <div class="roler1">
            <?php foreach ($dados as $item) { ?>
                <?php if ($item["tipo"] == "extras") { ?>

                    <div class="roler">
                        <img src="./img/<?= $item["imagem"]; ?>" alt="">
                        <h2><?= $item["nome"]; ?></h2>
                        <div class="botaum">
                            <button><?= $item["preco"]; ?></button>
                            <h1>6</h1>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</body>

</html>