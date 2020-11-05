<?php

function db_connexion()
{
    $hostName = "localhost";
    $database = "multiply_game_db";
    $user = "root";
    $pass = "";

    $url = "mysql:host=$hostName;dbname=$database;charset=utf8";

    try {
        $connexion = new PDO($url, $user, $pass);
        $connexion->exec("set lc_time_names='fr_FR'");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion reussi";
        return $connexion;


    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}


