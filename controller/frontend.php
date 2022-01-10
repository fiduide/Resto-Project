<?php

use Pizza_lab\model\UtilisateurManager;

require_once("model/Manager.php");
require_once("model/UtilisateurManager.php");

function login()
{
    require('view/frontend/v_login.php');
}

function connectUtilisateur($email, $motDePasse)
{
    $utilisateurManager = new UtilisateurManager();

    $utilisateur = $utilisateurManager->getUtilisateur($email, $motDePasse);

    if(!empty($utilisateur)){
        session_start();

        $_SESSION['acces'] = $utilisateur['niveau_acces'];
        var_dump(($_SESSION));
        require('view/frontend/v_index.php');
    } else {
        require('view/frontend/v_login.php');
    }
}

function index()
{
    require('view/frontend/v_index.php');
}