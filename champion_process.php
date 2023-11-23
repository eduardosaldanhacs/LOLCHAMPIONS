<?php

require_once("globals.php");
require_once("db.php");
require_once("dao/ChampionDAO.php");

$type = filter_input(INPUT_POST, "type");

$championDao = new ChampionDao($conn, $BASE_URL);


if($type == "register") {
    echo "teste2";
    $name = strtoupper(filter_input(INPUT_POST, "name"));
    $laner = strtoupper(filter_input(INPUT_POST, "laner"));
    $launch = filter_input(INPUT_POST, "launch");
    $region = strtoupper(filter_input(INPUT_POST, "region"));
    $image = $_FILES["image"];

    if($name && $laner && $launch && $region) {

        $champion = new Champion();

        $champion->name = $name;
        $champion->laner = $laner;
        $champion->launch = $launch;
        $champion->region = $region;

        $championDao->create($champion);
        header("Location: " . $BASE_URL . "index.php");
    }
}


