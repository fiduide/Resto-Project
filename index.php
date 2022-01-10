<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définition des constantes
define ("ROOT", __DIR__);



require('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'login') {
            if(isset($_GET['connect']) && $_GET['connect'] == true){
                $email = trim($_POST['email']);
                $motDePasse = $_POST['motDePasse'];

                connectUtilisateur($email, $motDePasse);
            } else {
                login();
            }
        }
    }
    else {
        index();
    }
} catch (Exception $exception) {
    echo 'Erreur : ' . $exception->getMessage();
}
