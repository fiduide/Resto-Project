<?php
session_start();

use app\Controller\AccountController;
use app\Controller\MainController;
use app\Controller\ChoixController;
use app\Controller\CheckoutController;
use app\Controller\AdminController;
use app\Controller\sendMailController;


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

            if (isset($_GET['disconnect']) && $_GET['disconnect'] == 1) {
                $accountController->disconnectUtilisateur();
            } else if (isset($_GET['register']) && $_GET['register'] == 1) {
                $accountController->register();
            } else if (isset($_GET['payment']) && $_GET['payment'] == 1) {
                $accountController->affichagePaiement();
            } else if (isset($_GET['parametre']) && $_GET['parametre'] == 1) {
                $accountController->affichageParametre();
            } else if (isset($_POST['update']) && $_POST['update'] == 1) {
                $accountController->updateInformation();
            } else if (isset($_POST['delete']) && $_POST['delete'] == 1) {
                $accountController->deleteAccount();
            } else if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1) {
                $accountController->profile();
            } else if (isset($_POST['register']) && $_POST['register'] == 1) {
                $accountController->createUtilisateur();
            } else if (isset($_POST['login']) && $_POST['login'] == 1) {
                $accountController->connectUtilisateur();
            } else {
                $accountController->login();
            }

            break;
        case 'choix':
            $choixController = new ChoixController();

            if (isset($_GET['command']) && $_GET['command'] == 1) {
                if (isset($_POST['pizza']) && isset($_POST['boisson']) && isset($_POST['dessert'])) {
                    $choixController->addCommand($_POST['pizza'], $_POST['boisson'], $_POST['dessert']);
                }
                $choixController->getCommand();
            } else {
                $choixController->affichage();
            }

            break;

        case 'checkout':
            $checkoutController = new CheckoutController();

            if (isset($_GET['add']) && $_GET['add'] == 1) {
                $checkoutController->addCheckout();
            }
            break;

        case 'envoiemessage':
            $sendMail = new sendMailController();

            if (isset($_POST['statut_message']) && $_POST['statut_message'] == 1) {
                if (isset($_POST['name']) && $_POST['name'] && $_POST['comments']) {
                    $nom = $_POST['name'];
                    $mail = $_POST['name'];
                    $message = $_POST['comments'];

                    $sendMail->sendMailTo($nom, $mail, $message);
                } else {
                    header("Location: index.php?forgetThing");
                }
            }
            break;

        case 'deleteProduit':
            $choixController = new ChoixController();

            if (isset($_GET['type']) && isset($_GET['idProduit'])) {
                $choixController->deleteProduit($_GET['type'], $_GET['idProduit']);
            } else {
                $choixController->affichage();
            }

            break;

        case 'OpenFacture':
            $choixController = new ChoixController();

            $choixController->openFacture();

            break;

        case 'ajoutProduit':
            $choixController = new ChoixController();

            if (isset($_GET['type']) && isset($_GET['idProduit'])) {
                $choixController->ajoutProduit($_GET['type'], $_GET['idProduit']);
            } else {
                $choixController->affichage();
            }

            break;

        case 'deleteAllProduit':
            $choixController = new ChoixController();

            if (isset($_GET['type']) && isset($_GET['idProduit'])) {
                $choixController->deleteAllProduit($_GET['type'], $_GET['idProduit']);
            } else {
                $choixController->affichage();
            }

            break;

        case 'adminBoard':
            $adminController = new AdminController();
            if (isset($_GET['admin']) && isset($_GET['commandId']) && $_GET['admin'] == "postCommand") {
                $adminController->setCommandDelivered($_GET['commandId']);
            } else if (isset($_GET['admin']) && isset($_GET['commandId']) && $_GET['admin'] == "waitingCommand") {
                $adminController->setCommandWaiting($_GET['commandId']);
            } else if (isset($_GET['admin']) && isset($_GET['itemId']) && isset($_GET['type']) && $_GET['admin'] == "updateItem") {
                //action = adminBoard & admin = updateItem & type = dessert & itemId
                $adminController->updateItem();
            } else if (isset($_GET['admin']) && isset($_GET['type']) && $_GET['admin'] == "addItem") {
                $adminController->addItem();
            }
            $adminController->affichage();
            break;


        default:
            $mainController = new MainController();
            $mainController->index();
            break;
    }
} catch (Exception $exception) {
    echo 'Erreur : ' . $exception->getMessage();
}
