<?php

namespace app\Controller;

use app\Entity\Utilisateur;
use app\Manager\CommandeManager;
use app\Manager\UtilisateurManager;
use DateTime;

class AccountController extends MainController
{
    public function login()
    {
        include(ROOT . "/app/Template/Account/v_login.php");
    }

    public function register()
    {
        include(ROOT . "/app/Template/Account/v_register.php");
    }

    public function profile()
    {
        $utilisateurManager = new UtilisateurManager();
        $utilisateur = $utilisateurManager->find($_SESSION['id_utilisateur']);

        $commandeManager = new CommandeManager();
        $commandes = $commandeManager->findByUtilisateur($_SESSION['id_utilisateur'], 3);

        include(ROOT . "/app/Template/Account/v_profile.php");
    }

    public function resetPassword()
    {
    }

    public function createUtilisateur()
    {
        $utilisateurManager = new UtilisateurManager();

        $_POST['date_register'] = (new DateTime)->format("Y-m-d H:i:s");
        $_POST['niveau_acces'] = 1;

        $utilisateur = new Utilisateur($_POST);

        $id = $utilisateurManager->save($utilisateur());

        if ($id > 0) {
            $utilisateur = $utilisateurManager->find($id);

            $_SESSION['isConnected'] = 1;
            $_SESSION['acces'] = $utilisateur->getNiveau_acces();
            $_SESSION['id_utilisateur'] = $utilisateur->getId_utilisateur();
        }
        header("Location: index.php");
    }

    public function connectUtilisateur()
    {
        $email = trim($_POST['email']);
        $motDePasse = $_POST['motDePasse'];

        $utilisateurManager = new UtilisateurManager();
        $utilisateur = $utilisateurManager->getUtilisateur($email, $motDePasse);

        if (!empty($utilisateur)) {
            $_SESSION['isConnected'] = 1;
            $_SESSION['acces'] = $utilisateur['niveau_acces'];
            $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];

            header("Location: index.php?connect=1");
        } else {
            include(ROOT . "/app/Template/Account/v_login.php");
        }
    }

    public function disconnectUtilisateur()
    {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();

        header("Location: index.php?disconnect=1");
    }


    public function affichagePaiement()
    {
        $utilisateurManager = new UtilisateurManager();
        $utilisateur = $utilisateurManager->find($_SESSION['id_utilisateur']);

        include(ROOT . "/app/Template/Account/v_paiement.php");
    }

    public function affichageParametre()
    {
        $utilisateurManager = new UtilisateurManager();
        $utilisateur = $utilisateurManager->find($_SESSION['id_utilisateur']);

        include(ROOT . "/app/Template/Account/v_parametre.php");
    }

    public function updateInformation()
    {
        $utilisateurManager = new UtilisateurManager();

        $utilisateur = new Utilisateur($_POST);

        $id_utilisateur = $_POST['id_utilisateur'];
        $new_password = $_POST['new_password'];
        $new_password2 = $_POST['new_password2'];
        $utilisateurManager->update($utilisateur(), $id_utilisateur, $new_password, $new_password2);

        header("Location: index.php?action=account");
    }

    public function deleteAccount()
    {
        $utilisateurManager = new UtilisateurManager();

        $utilisateur = new Utilisateur($_POST);

        $id_utilisateur = $_POST['id_utilisateur'];
        $utilisateurManager->deleteAccountClient($utilisateur());

        header("Location: index.php?action=account");
    }
}
