<?php
session_start();

//pour la clôture :
session_unset(); //efface les variable session
session_destroy();//détruit la session

$_SESSION['log'] = null;//histoire d'être sûre
header('location: views/register.php');

exit();