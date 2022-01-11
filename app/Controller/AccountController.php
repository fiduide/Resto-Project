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
            $_SESSION['acces'] = $utilisateur['niveau_acces'];
    
            header("Location: index.php");
        } else {
            include(ROOT . "/app/Template/Account/v_login.php");
        }
    }
}