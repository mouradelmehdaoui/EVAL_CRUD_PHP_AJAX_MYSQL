$(document).ready(function () {

    randomNumbers();

    allJoueur();

    $("#btn-valider").on('click', function () {
        addScore();
    });
});

function addScore() {
    //On recupere les infos saisi par le user

    let multiplication = $("#multiplication").val();
    let reponse = $('#input-resultat').val();
    let status = 1;
    let pseudo = $('#pageLogin').text();


    console.log(pseudo)


    //On effectue la requete vers le server
    $.ajax({
        method: "GET",
        url: "../models/server.php",
        data: {joueur: 1, multiplication: multiplication, reponse: reponse, status: status, pseudo: pseudo}
    }).done(function () {

        $("#multiplication").val();
        $('#input-resultat').val();
        allJoueur();
    })

}


function randomNumbers() {

    $.ajax({
        method: "GET",
        url: "../models/server.php",
        data: {nombre: 1},
        dataType: "json"
    }).done(function (response) {

        alert(response);
        console.log(response);

        let nbr1 = response.a;
        let nbr2 = response.b;

        //alert(nbr1);
        $('#nombre1').text(nbr1);
        $("#nombre2").text(nbr2);
    })
}

function allJoueur() {

    $.ajax({

        method: "GET",
        url: "../models/server.php",
        data: {all: 1},
        dataType: "json"

    }).done(function (data) {
        $("#tentatives-body").empty();
        data.forEach(tentative => {
            $("#tentatives-body").append(
                `
                <tr>
                    <td>${tentative.id}</td>
                    <td>${tentative.operation}</td>
                    <td>${tentative.reponse}</td>
                    <td>${tentative.statut}</td>
                    <td>${tentative.pseudo}</td>
                  
                </tr>
                `
            )
        });
    });

}





/*
     $("#formulaire").on('submit', function (e) {
            //Desactive le comportement par defaut du formulaire
            e.preventDefault();
        });
*/


/*
function addUser() {

    let pseudo = $('#pseudo').val();
    let mdp = $('#mdp').val();
    let mdpConfirm = $('#mdpConfirm').val();
    let cgu = $('#customCheck1').val();


    $.ajax({
        method: "POST",
        url: "../models/server.php", // La ressource ciblée
        data: {add: 1, pseudo: pseudo, mdp: mdp, mdpConfirm: mdpConfirm, cgu: cgu},
        dataType: "json",
        success : function (reponse) {
            // reponse est un objet json contenant les infos retournées par la page php
            alert(reponse); //affiche le résultat dans la console du navigateur.
            console.log(reponse);
            /!*var error = (typeof (reponse.error) != 'undefined' && reponse.error != null) ? reponse.error : null;
            if (error) {
                alert("Erreur lors de l'exécution de la requete ! " + error);
            }
            var message = (typeof (reponse.message) != 'undefined' && reponse.message != null) ? reponse.message : null;
            if (message) {
                alert(message);
            }*!/
        },
        error : function (jqXHR, textStatus) {
            alert('error');
            console.log(jqXHR); //affichage dans la console du navigateur
        }


    })

}
*/

