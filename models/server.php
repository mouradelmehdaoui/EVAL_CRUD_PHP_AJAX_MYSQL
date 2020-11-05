<?php
session_start();
require_once("../functions/helper.php");

$cnx = db_connexion();

if(!empty($_POST['add'])) {


    $pseudo =  trim($_POST['pseudo']);
    $mdp =  trim($_POST['mdp']);
    $mdpConfirm =  trim($_POST['mdpConfirm']);
    $cgu =  trim($_POST['cgu']);



    $error = [];

    if(empty($pseudo)) {

        $error =  "Ce champs est obligatoire";
    }

    if(empty($cgu)) {

        $error = "acceptation CGU est requise!";
    }

    if(!empty($mdp) != !empty($mdpConfirm))
        {

            $error = "mot de passe doivent etre identiques lors de la creation du compte";
        }



    if(empty($error)) {

    try {$req = "insert into users (pseudo,mdp) VALUES (?,?)";

    $reqPrepare = $cnx->prepare($req);
    $reqPrepare -> execute(array($pseudo, $mdp));
    $reqPrepare -> closeCursor();}
    catch (Exception $exception) {


        $exception->getMessage();
    }

    header('Location: ../views/login.php');
    exit();
    }
}


if(isset($_GET['joueur'])) {

    $multiplication= $_GET['multiplication'];
    $reponse = $_GET['reponse'];
    $status = $_GET['status'];
    $pseudo = $_GET['pseudo'];



    try {
        $req = "insert into tentatives (operation,reponse,statut,pseudo) VALUES (?,?,?,?)";

        $reqPrepare = $cnx->prepare($req);
        $reqPrepare -> execute(array($multiplication, $reponse, $status, $pseudo));
        $reqPrepare -> closeCursor();

    }

    catch (Exception $exception) {


        $exception->getMessage();
    }


}

if(isset($_GET['all'])) {

    $req = "SELECT * from tentatives";

    try {
        $tentatives= $cnx->query($req)->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($tentatives, JSON_THROW_ON_ERROR);
    } catch (PDOException|JsonException $e) {
        $e->getMessage();
    }

}

if(isset($_GET['nombre'])) {

    $numbers['a'] =random_int(10,100);
    $numbers['b'] = random_int(10,100);

    try {
        echo json_encode($numbers, JSON_THROW_ON_ERROR);
    } catch (PDOException|JsonException $e) {
        $e->getMessage();
    }

}
