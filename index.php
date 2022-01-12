<?php
session_start();

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
        case 'account':
            $accountController = new AccountController();

            if(isset($_GET['disconnect']) && $_GET['disconnect'] == 1){
                $accountController->disconnectUtilisateur();
            } else if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1){
                $accountController->profile();
            } else if(isset($_POST['login']) && $_POST['login'] == 1){
                $accountController->connectUtilisateur();
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
