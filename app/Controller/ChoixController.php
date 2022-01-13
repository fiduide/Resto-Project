<?php

namespace app\Controller;

use app\Manager\MenuManager;

use app\Entity\Menu\Pizza;
use app\Entity\Menu\Boisson;
use app\Entity\Menu\Dessert;
use app\Manager\Menu\PizzaManager;

class ChoixController extends MainController
{


    public function affichage()
    {
        $menuManager = new MenuManager();
        $pizzaManager = new PizzaManager();
        $pizzas = $pizzaManager->findAll();
        $boissons = $menuManager->getBoisson();
        $desserts = $menuManager->getDessert();

        include(ROOT . "/app/Template/Menu/v_plat.php");
    }


    public function addCommand($pizzas, $boissons, $desserts)
    {
        if (!isset($_SESSION['commande'])) {
            $_SESSION['commande'] = array();
        }

        foreach ($pizzas as $id => $quantity) {
            if ($quantity != 0) {
                $_SESSION['commande']['pizza_' . $id] = $quantity;
            }
        }
        foreach ($boissons as $id => $quantity) {
            if ($quantity != 0) {
                $_SESSION['commande']['boisson_' . $id] = $quantity;
            }
        }
        foreach ($desserts as $id => $quantity) {
            if ($quantity != 0) {
                $_SESSION['commande']['dessert_' . $id] = $quantity;
            }
        }
    }

    public function getCommand()
    {
        $html = "";
        $totalCommande = 0;

        if (isset($_SESSION['commande'])) {
            foreach ($_SESSION['commande'] as $commande => $quantity) {
                $menuManager = new MenuManager();
                $str = preg_split("/_/", $commande);
                $commande_type = $str[0];
                $commande_id = $str[1];

                if ($commande_type == "pizza") {

                    $uneCommande = $menuManager->getOnePizza($commande_id);
                } else if ($commande_type == "boisson") {
                    $uneCommande = $menuManager->getOneBoisson($commande_id);
                } else if ($commande_type == "dessert") {
                    $uneCommande = $menuManager->getOneDessert($commande_id);
                }
                $totalUneCommande = $quantity * $uneCommande->getPrix();
                $totalCommande = $totalCommande + $totalUneCommande;

                $html .= '<tr>
                <td class="h6"><a href="index.php?action=deleteAllProduit&type=' . $commande_type . '&idProduit=' . $uneCommande->getId() . '" class="text-danger">X</a></td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="public/img/' . $commande_type . '/' . $uneCommande->getId() . '.png" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                        <h6 class="mb-0 ml-3">' . $uneCommande->getNom() . '</h6>
                    </div>
                </td>
                <td class="text-center">' . $uneCommande->getPrix() . '</td>
                <td class="text-center"><a class="minus btn btn-icon btn-soft-primary font-weight-bold" href="index.php?action=deleteProduit&type=' . $commande_type . '&idProduit=' . $uneCommande->getId() . '" class="text-danger">-</a>
                <input type="text" step="1" min="0" name="" value=' . $quantity . '  class="disable btn btn-icon btn-soft-primary font-weight-bold">
                <a class="plus btn btn-icon btn-soft-primary font-weight-bold" href="index.php?action=ajoutProduit&type=' . $commande_type . '&idProduit=' . $uneCommande->getId() . '" class="text-danger">+</a>
                <td class="text-center font-weight-bold">' . $totalUneCommande . ' €</td>
            </tr>';
            }
        } else {
            $html = "<th class='text-danger'>Le panier est vide</th>";
        }

        include(ROOT . "/app/Template/Menu/v_facture.php");
    }

    public function deleteProduit($type, $idProduit)
    {
        if (isset($type) && isset($idProduit)) {
            if ($_SESSION['commande'][$type . '_' . $idProduit] > 1) {
                $_SESSION['commande'][$type . '_' . $idProduit]--;
            } else {
                unset($_SESSION['commande'][$type . '_' . $idProduit]);
            }
            $this->getCommand();
        }
    }

    public function ajoutProduit($type, $idProduit)
    {
        if (isset($type) && isset($idProduit)) {
            if ($_SESSION['commande'][$type . '_' . $idProduit] > 0) {
                $_SESSION['commande'][$type . '_' . $idProduit]++;
            }
            $this->getCommand();
        }
    }

    public function deleteAllProduit($type, $idProduit)
    {
        if (isset($type) && isset($idProduit)) {
            unset($_SESSION['commande'][$type . '_' . $idProduit]);
            $this->getCommand();
        }
    }

    public function affichagePaiement()
    {
        $menuManager = new MenuManager();

        include(ROOT . "/app/Template/Account/v_paiement.php");
    }

    public function affichageProfil()
    {
        $menuManager = new MenuManager();

        include(ROOT . "/app/Template/Account/v_profile.php");
    }
}
