<?php
session_start();
require_once ("../functions/helper.php");


$login = htmlspecialchars(trim($_POST['login']));
$mdp = htmlspecialchars(trim($_POST['mdp']));

if (!empty($login) && !empty($mdp)) {





            $cnx = db_connexion();
            $req = $cnx-> prepare("SELECT * FROM users WHERE pseudo = ? AND mdp = ?");
            $req ->execute(array($login, $mdp));
            $result = $req->fetchAll();
            $row = $req ->rowCount();


            if($row === 1){
                $_SESSION['log'] = $login;

            header('Location: ../views/jeux.php');
        die();

        } else {

            header('Location: ../views/login.php?error=2&mdp=1');
            die();
        }

} else {
    header('Location: ../views/login.php?error=2&vide=1');
    die;
}





