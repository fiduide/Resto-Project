<?php
namespace app\Controller;

use app\Manager\CheckoutManager;

class CheckoutController extends MainController
{


    public function addCheckout(){
        if(isset($_SESSION['commande']) && !empty($_SESSION['commande'])){
            $checkoutManager = new checkoutManager();
            $checkout = $checkoutManager->addCheckout($_SESSION['commande']);
            include(ROOT . "/app/Template/Checkout/v_checkout.php");
        }
    }
}