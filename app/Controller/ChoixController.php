<?php
namespace app\Controller;
use app\Manager\MenuManager;


class ChoixController extends MainController
{

    
    public function affichage()
    {
        // $statement = "SELECT id_boisson, nom_boisson FROM boisson";
        // $boissons = $this->pdo->query($statement, \PDO::FETCH_CLASS, "app\Entity\Menu\Boisson");
        // $boissons = $query->fetchAll();

        // $statement = "SELECT id_dessert, nom_dessert FROM dessert";
        // $desserts = $this->pdo->query($statement, \PDO::FETCH_CLASS, "app\Entity\Menu\Dessert");
        // $desserts = $query->fetchAll();

        $menuManager = new MenuManager();
        $pizzas = $menuManager->getPizza();
        $boissons = $menuManager->getBoisson();
        $desserts = $menuManager->getDessert();

        include(ROOT . "/app/Template/Menu/v_plat.php");
    }
}