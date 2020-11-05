<?php
session_start();
include "../partials/header.php";


headerTitre('PAGE LOGIN');
?>




<div class="cadre-formulaire  shadow-lg p-3 mb-5 bg-white pt-2 pb-2">
    <form method="post" action="../controllers/loginAccept.php">

        <div class="cadreBody">

            <i class="fas fa-user-lock fa-10x"></i>

        <div class="form-group">

            <input type="text" name="login" class="form-control" id="login"
                   placeholder="Entrer Login">

        </div>
        <div class="form-group">

            <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Password">
        </div>

        <button type="submit" name="submit" id="login" class="btn btn-primary">Connexion</button>
            <p class="compte small mt-3 mb-3">Vous n'avez pas  compte?<a class="small" href="register.php">Créez en un ici?</a></p>
        <?php

        if (isset($_GET['error']) && isset($_GET['vide'])) {
            echo <<<EOT
<div class="alert alert-danger" role="alert">
                    Merci de saisir Login et Mot de passe!
                </div>
EOT;

        } elseif (isset($_GET['error']) && isset($_GET['mdp'])) {

            echo <<<EOT
<div class="alert alert-danger" role="alert">
                    Pseudo ou mot de passe incorrecte !
                </div>
EOT;
        }
        ?>
    </form>
</div>
</div>

<?php

include "../partials/footer.php"
?>