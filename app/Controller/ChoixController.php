<?php
namespace app\Controller;
use app\Manager\MenuManager;


class ChoixController extends MainController
{

    
    public function affichage()
    {
        $menuManager = new MenuManager();
        $pizzas = $menuManager->getPizza();
        $boissons = $menuManager->getBoisson();
        $desserts = $menuManager->getDessert();

        include(ROOT . "/app/Template/Menu/v_plat.php");
    }


    public function addCommand($pizzas, $boissons, $desserts){
        if(!isset($_SESSION['commande'])){
            $_SESSION['commande'] = array();
        }

        foreach ($pizzas as $id => $quantity) {
            if($quantity != 0){
                $_SESSION['commande']['pizza_'.$id] = $quantity;
            }
        }
        foreach ($boissons as $id => $quantity) {
            if($quantity != 0){
                $_SESSION['commande']['boisson_'.$id] = $quantity;
            }
        }
        foreach ($desserts as $id => $quantity) {
            if($quantity != 0){
                $_SESSION['commande']['dessert_'.$id] = $quantity;
            }
        }
    }

    public function getCommand(){
        $html= "";
        $totalCommande = 0;

        if(isset($_SESSION['commande'])){
            foreach ($_SESSION['commande'] as $commande => $quantity) {
                $menuManager = new MenuManager();
                $str = preg_split("/_/", $commande);
                $commande_type = $str[0];
                $commande_id = $str[1];
    
                if($commande_type == "pizza"){
                    $uneCommande = $menuManager->getOnePizza($commande_id);
                }else if($commande_type == "boisson"){
                    $uneCommande = $menuManager->getOneBoisson($commande_id);
                }else if($commande_type == "dessert"){
                    $uneCommande = $menuManager->getOneDessert($commande_id);
                }
                $totalUneCommande = $quantity * $uneCommande['prix'];
                $totalCommande = $totalCommande + $totalUneCommande;
    
                $html .= '<tr>
                <td class="h6"><a href="index.php?action=deleteProduit&type='.$commande_type.'&idProduit='.$uneCommande['id'].'" class="text-danger">X</a></td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="public/img/'.$commande_type.'/'.$uneCommande['id'].'.png" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                        <h6 class="mb-0 ml-3">'.$uneCommande['nom'].'</h6>
                    </div>
                </td>
                <td class="text-center">'.$uneCommande['prix'].'</td>
                <td class="text-center">'.$quantity.'</td>
                <td class="text-center font-weight-bold">'. $totalUneCommande .' €</td>
            </tr>';
            }
        }else {
            $html = "<th class='text-danger'>Le panier est vide</th>";
        }
        
        include(ROOT . "/app/Template/Menu/v_facture.php");
    }

    public function deleteProduit($type, $idProduit){
        // $_SESSION['commande'][$type."_".$idProduit];
        //unset();
        //include(ROOT . "/app/Template/Menu/v_facture.php");
    }
}