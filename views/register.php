<?php
session_start();
include "../partials/header.php";

headerTitre('PAGE REGISTER');

?>

    <section class="mt-5">

        <div class="container-fluid d-flex justify-content-around w-75 ">

            <div class="container mb-5 w-50">

                <img id="image" src="../assets/images/acceuil.jpg" alt="img">

            </div>


            <div class="container w-50 shadow p-3 mb-5 bg-white">

                <h6 class="login-heading mb-4 text-center">CREER UN COMPTE</h6>

                <?php

if(isset($_GET['error'])) if(isset($_GET['vide']))
{ echo <<<EOT
<div class="alert alert-danger" role="alert">
                    Tous les champs sont requis!
                </div>
EOT;



}
                  ?>
                <form id="formulaire" method="post" action="../controllers/registerAccept.php">
                    <div class="form-label-group">
                        <span><i class="fas fa-user-tie"></i><span> <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo"
                               >
<?php

if(isset($_GET['error'])) if(isset($_GET['pseudo']))
{ echo <<<EOT
<div class="alert alert-danger" role="alert">
                    le pseudo est obligatoire!
                </div>
EOT;

}
?>
                    </div>

                    <div class="form-label-group">
                        <span><i class="fas fa-key"></i></span><input type="password" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de passe"
                               >
                        <label for="inputPassword"> votre mot de Password</label>
                        <?php

                        if(isset($_GET['error'])) if(isset($_GET['mdp']))
                        { echo <<<EOT
<div class="alert alert-danger" role="alert">
                    le mot de passe est obligatoire!
                </div>
EOT;
                        }
                        ?>
                    </div>
                    <div class="form-label-group">
                       <span> <i class="fas fa-key"></i>  <span><input type="password" name="mdpConfirm" id="mdpConfirm" class="form-control"
                               placeholder="Confirmez votre mot de passe" >
                                          <?php

                                          if(isset($_GET['error'])) if(isset($_GET['mdp2']))
                                          { echo <<<EOT
<div class="alert alert-danger" role="alert">
                    la confirmation du mot de passe est obligatoire!
                </div>
EOT;
                                          }
                                          ?>

                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" name="cgu" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label rounded-0" for="customCheck1">J'accepte les termes
                            d'utilisation.</label>
                        <?php

                        if(isset($_GET['error'])) if(isset($_GET['cgu']))
                        { echo <<<EOT
<div class="alert alert-danger" role="alert">
                    Accepter CGU est obligatoire!
                </div>
EOT;
                        }
                        ?>

                    </div>

                    <button
                            class="rounded-0 cyan darken-2 btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="submit"
                            type="submit">S'enregistrer
                    </button>

                    <div class="text-center">
                        <p class="compte small">Vous avez déja un compte?<a class="small" href="login.php">Connetez vous ici?</a></p>
                    </div>
                </form>
            </div>
        </div>


    </section>


<?php

include "../partials/footer.php"
?>