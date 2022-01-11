<?php

use app\Controller\AccountController;
use app\Controller\MainController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définition des constantes
const ROOT = __DIR__;

// Appel de l'autoload
require "vendor/autoload.php";

try {
    $action = (isset($_GET['action'])) ? $_GET['action'] : "";

    switch ($action) {
        case 'login':
            $accountController = new AccountController();
            if(isset($_GET['connect']) && $_GET['connect'] == true){
                $email = trim($_POST['email']);
                $motDePasse = $_POST['motDePasse'];

                // connectUtilisateur($email, $motDePasse);
            } else {
                $accountController->login();
            }

            break;
        
        default:
            $mainController = new MainController();
            $mainController->index();
            break;
    }
} catch (Exception $exception) {
    echo 'Erreur : ' . $exception->getMessage();
}
