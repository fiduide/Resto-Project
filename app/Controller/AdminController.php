<?php

namespace app\Controller;

use app\Manager\AdminManager;
use app\Manager\CommandeManager;
use app\Manager\Menu\PizzaManager;
use app\Manager\Menu\IngredientManager;
use app\Manager\Menu\BoissonManager;
use app\Manager\Menu\DessertManager;

// use app\Manager\AdminManager;

class AdminController extends MainController
{
   public function affichage()
   {
      $allCommand = $this->getAllCommand();
      $countAllCommand = $this->getCountAllCommand();
      $countInProgressCommand = $this->getCountInProgressCommand();
      $total = $this->getTotalCommand();

      $listPizza = $this->getListPizza();
      $listBoisson = $this->getListBoisson();
      $listDessert = $this->getListDessert();
      $listIngredient = $this->getListIngredient();
      include(ROOT . "/app/Template/Dashboard/v_dashboard.php");
   }


   public function getAllCommand(): array
   {
      $commandeManager = new CommandeManager();
      $listDesCommandes = $commandeManager->allCommand();
      return $listDesCommandes;
   }

   public function getCountAllCommand(): int
   {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountAllCommand();
      return $count;
   }

   public function getCountInProgressCommand(): int
   {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountInProgressCommand();
      return $count;
   }

   public function getTotalCommand()
   {
      $commandeManager = new CommandeManager();
      $total = $commandeManager->getTotalCommand();
      return number_format($total, 2);
   }

   public function setCommandDelivered($commandId)
   {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandDelivered($commandId);
   }

   public function setCommandWaiting($commandId)
   {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandWaiting($commandId);
   }


   public function getListPizza()
   {
      $pizzaManager = new PizzaManager();
      $list = $pizzaManager->findAll();
      return $list;
   }

   public function getListBoisson()
   {
      $boissonManager = new BoissonManager();
      $list = $boissonManager->findAll();
      return $list;
   }

   public function getListDessert()
   {
      $dessertManager = new DessertManager();
      $list = $dessertManager->findAll();
      return $list;
   }

   public function updateItem()
   {
      $adminManager = new AdminManager();
      if (isset($_POST) && !empty($_POST)) {
         if ($_GET['type'] == "pizza") {
            $adminManager->updatePizza($_GET['itemId'], $_POST['nom'], $_POST['prix'], $_POST['ingredient']);
         } else {
            $adminManager->updateItem($_GET['type'], $_GET['itemId'], $_POST['nom'], $_POST['prix']);
         }

         header("Location: index.php?action=adminBoard&success=1");
      }
   }

   public function addItem()
   {
      $pizzaManager = new PizzaManager();
      $adminManager = new AdminManager();
      if (isset($_POST) && !empty($_POST) && !empty($_POST['nom']) && !empty($_POST['prix'])) {
         if ($_GET['type'] == "pizza") {
            $pizzaManager->addPizza($_POST['nom'], $_POST['prix'], $_POST['ingredient']);
         } else {

            $adminManager->addItem($_GET['type'], $_POST['nom'], $_POST['prix']);
         }

         header("Location: index.php?action=adminBoard&successAdd=1");
      } else {
         header("Location: index.php?action=adminBoard&errorAdd=1");
      }
   }

   public function getListIngredient()
   {
      $ingredientManager = new IngredientManager();
      $listIngredient = $ingredientManager->findAll();
      return $listIngredient;
   }
}
