<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("dao/ChampionDAO.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LOLCHAMPIONS</title>  
</head>
<body>
    <header>
        <div>
            <nav>
            <h1>LOLCHAMPIONS</h1>
                <ul>
                    <li><a href="<?= $BASE_URL ?>index.php">Ínicio</a></li>
                    <li><a href="<?= $BASE_URL ?>addchampion.php">Adicione um campeão</a></li>
                    <li><a href="">História do campeão</a></li>
                    <li><a href="">Notícias</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
