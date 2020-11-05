<?php
session_start();
require_once "../partials/header.php";
headerTitre('PAGE REGISTER');

if(empty($_SESSION['log'])) {



}




?>

    Bonjour <span id="pageLogin"><?php  echo $_SESSION['log'];?></span>

            <div class="titre mt-5 mb-5 display-4 text-center">PAGE DU JEUX</div>


            <div class="defi mb-4 text-center ">Voici votre defi du Jour</div>

            <span id="nombre1"><span>
            <span>x</span>
            <span id="nombre2"><span>




<div class="mb-5 d-flex flex-row justify-content-center border-0">
    <div class="w-50 shadow  bg-white">
            <input id="input-resultat" placeholder="Inscrire votre reponse ici">
    </div>

            <button id="btn-valider" type="submit" class="btn btn-valider">Valider</button>
</div>



<div class="tableau">
    <table id="tableau-tentatives">
    <thead>
    <tr class="bg-dark">
        <th class="text-white">ID</th>
        <th class="text-white">MULTIPLICATION</th>
        <th class="text-white">REPONSE</th>
        <th class="text-white">CORECT?</th>


    </tr>
    </thead>
    <tbody id="tentatives-body"></tbody>

</table>
</div>



<?php

require_once "../partials/footer.php";
