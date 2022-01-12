<?php
namespace app\Controller;

use app\Manager\CheckoutManager;

class CheckoutController extends MainController
{


    public function addCheckout(){
        if(isset($_SESSION['commande']) && !empty($_SESSION['commande'])){
            // $checkoutManager = new checkoutManager();
            // $checkout = $checkoutManager->addCheckout();
            var_dump($_SESSION);
            $arCheckout = ["id_user" => $_SESSION['id_utilisateur'], "etat" => 0, "date_order" => new DateTime()];
            $checkout = new Checkout($arCheckout);
            var_dump($checkout);
            die();
        }
    }
}