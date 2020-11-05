<?php

session_start();
require_once("../functions/helper.php");

$cnx = db_connexion();

if (isset($_POST['submit']) || isset($_POST['cgu'])) {


    $pseudo = htmlspecialchars(ucfirst(trim($_POST['pseudo'])));
    $mdp = htmlspecialchars(trim($_POST['mdp']));
    $mdpConfirm = htmlspecialchars(trim($_POST['mdpConfirm']));
    $cgu = htmlspecialchars(trim($_POST['cgu']));

    $error = "";
    $_SESSION['error'] = "";


    if (empty($pseudo) && empty($mdp) && empty($cgu) && empty($mdpConfirm)) {

        $error ++;
        header('Location: ../views/register.php?error=1&vide=1');
        die();
    }

    if (empty($pseudo)) {

        $error ++;
        header('Location: ../views/register.php?error=1&pseudo=1');
        die();
    }

    if (empty($cgu)) {
        $error ++;
        header('Location: ../views/register.php?error=1&cgu=1');
        die();
    }

    if (empty($mdp) && empty($mdpConfirm)) {

        $error ++;
        header('Location: ../views/register.php?error=1&mdp=1');
        die();

    } elseif ($mdp !== $mdpConfirm){
        $error ++;
        header('Location: ../views/register.php?error=1&mdp=2');
        die();

    }


    if (empty($error)) {

        try {
            $req = "insert into users (pseudo,mdp) VALUES (?,?)";

            $reqPrepare = $cnx->prepare($req);
            $reqPrepare->execute(array($pseudo, $mdp));
            $reqPrepare->closeCursor();
        } catch (Exception $exception) {


            $exception->getMessage();
        }

        header('Location: ../views/login.php');
        exit();
    }


}



