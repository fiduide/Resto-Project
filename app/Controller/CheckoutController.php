<?php

namespace app\Controller;

use app\Manager\CheckoutManager;
use app\Entity\Menu\Checkout;

class CheckoutController extends MainController
{

    /**
     * Ajouter une commande par un utilisateur
     */
    public function addCheckout()
    {
        if (isset($_SESSION['commande']) && !empty($_SESSION['commande'])) {
            $checkoutManager = new checkoutManager();

            $arCheckout = ["id_user" => $_SESSION['id_utilisateur'], "etat" => 0, "date_order" => (new \DateTime)->format("Y-m-d H:i:s"), "total" => $_SESSION['commande']['total']];
            $id = $checkoutManager->addCheckout($arCheckout);

            foreach ($_SESSION['commande'] as $commande => $quantite) {

                $str = preg_split("/_/", $commande);
                $commande_type = $str[0];
                if ($str[0] != "total") {
                    $commande_id = $str[1];
                }

                if ($commande_type == "pizza") {
                    $arCheckoutPizza = ["id_commande" => $id, "id_pizza" => $commande_id, "quantite" => $quantite];
                    $checkoutManager->AddCheckoutPizza($arCheckoutPizza);
                } else if ($commande_type == "boisson") {
                    $arCheckoutBoisson = ["id_commande" => $id, "id_boisson" => $commande_id, "quantite" => $quantite];
                    $checkoutManager->AddCheckoutBoisson($arCheckoutBoisson);
                } else if ($commande_type == "dessert") {
                    $arCheckoutDessert = ["id_commande" => $id, "id_dessert" => $commande_id, "quantite" => $quantite];
                    $checkoutManager->AddCheckoutDessert($arCheckoutDessert);
                }
            }

            unset($_SESSION['commande']);
            include(ROOT . "/app/Template/Checkout/v_checkout.php");
        }
    }
}
