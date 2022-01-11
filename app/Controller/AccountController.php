<?php
namespace app\Controller;

use app\Manager\UtilisateurManager;

class AccountController extends MainController
{
    public function login()
    {
        include(ROOT . "/app/Template/Account/v_login.php");
    }

    public function register()
    {
        
    }

    public function profile()
    {
        
    }

    public function resetPassword()
    {
        
    }

    public function connectUtilisateur(){
        $email = trim($_POST['email']);
        $motDePasse = $_POST['motDePasse'];

        $utilisateurManager = new UtilisateurManager();
        $utilisateur = $utilisateurManager->getUtilisateur($email, $motDePasse);

        if(!empty($utilisateur)){ 
            $_SESSION['isConnected'] = 1;
            $_SESSION['acces'] = $utilisateur['niveau_acces'];
    
            header("Location: index.php");
        } else {
            include(ROOT . "/app/Template/Account/v_login.php");
        }
    }

    public function disconnectUtilisateur(){
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();

        header("Location: index.php");
    }
}