<?php

function headerTitre($titre) {


    if(empty($_SESSION['log'])) {

echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Ajouter css principal-->
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Ajouter css Bootstrap en dur-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>$titre</title>
</head>
<body>
 <header>
    <nav class="navbar navbar-expand-lg navbar-light teal darken-3">
        <a class="navbar-brand" href="#">
            <img src="../assets/images/logo.png" width="80" height="90" alt="logo">
            <span class="text-white"></span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-item nav-link text-white" href="../views/login.php">LOGIN</a>
                <a class="nav-item nav-link text-white" href="../views/register.php">REGISTER</a>

               

            </div>
        </div>
    </nav>

</header> 
EOT;
    } else {

        echo
        <<<LAS
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Ajouter css principal-->
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Ajouter css Bootstrap en dur-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/materialize.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>$titre</title>
</head>
<body>
 <header>
    <nav class="navbar navbar-expand-lg navbar-light teal darken-3">
        <a class="navbar-brand" href="#">
            <img src="../assets/images/logo.png" width="80" height="90" alt="logo">
            <span class="text-white"></span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">

               <a class="nav-item nav-link text-white" href="../controllers/logout.php">LOGOUT</a>

            </div>
        </div>
    </nav>

</header> 
LAS;

    }

}