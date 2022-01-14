<?php

namespace app\Controller;

use app\Manager\AdminManager;
use app\Manager\CommandeManager;
use app\Manager\Menu\PizzaManager;
use app\Manager\Menu\IngredientManager;
use app\Manager\Menu\BoissonManager;
use app\Manager\Menu\DessertManager;
use app\Manager\UtilisateurManager;

// use app\Manager\AdminManager;

class AdminController extends MainController
{

   /**
    * Affichage complet de la partie administration avec récupération des commandes, de stats, liste des pizzas, liste des desserts; liste des boissons et liste ingrédients
    *
    * @return void
    */
   public function affichage()
   {
      $commandeManager = new CommandeManager();
      $allCommand = $this->getAllCommand();
      $countAllCommand = $this->getCountAllCommand();
      $countInProgressCommand = $this->getCountInProgressCommand();
      $total = $this->getTotalCommand();

      $listPizza = $this->getListPizza();
      $listBoisson = $this->getListBoisson();
      $listDessert = $this->getListDessert();
      $listIngredient = $this->getListIngredient();

      $listUser = $this->getAllUser();

      include(ROOT . "/app/Template/Dashboard/v_dashboard.php");
   }

   /**
    * Récupération de toutes les commandes
    *
    * @return array
    */
   public function getAllCommand(): array
   {
      $commandeManager = new CommandeManager();
      $listDesCommandes = $commandeManager->allCommand();
      return $listDesCommandes;
   }

   /**
    * Récupération du nombre de commande passé
    *
    * @return integer
    */
   public function getCountAllCommand(): int
   {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountAllCommand();
      return $count;
   }

   /**
    * Récupération du nombre de commande en cours
    *
    * @return integer
    */
   public function getCountInProgressCommand(): int
   {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountInProgressCommand();
      return $count;
   }

   /**
    * Récupération de la somme total des commandes réunies
    *
    * @return void
    */
   public function getTotalCommand()
   {
      $commandeManager = new CommandeManager();
      $total = $commandeManager->getTotalCommand();
      return number_format($total, 2);
   }

   /**
    * Changer l'état de la commande en livrée
    *
    * @param int $commandId
    * @return void
    */
   public function setCommandDelivered($commandId)
   {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandDelivered($commandId);
   }

   /**
    * Changer l'état de la commande en "en attente"
    *
    * @param int $commandId
    * @return void
    */
   public function setCommandWaiting($commandId)
   {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandWaiting($commandId);
   }

   /**
    * Récupération de la liste des pizzas
    *
    * @return void
    */
   public function getListPizza()
   {
      $pizzaManager = new PizzaManager();
      $list = $pizzaManager->findAll();
      return $list;
   }

   /**
    * Récupération de la liste des boissons
    *
    * @return void
    */
   public function getListBoisson()
   {
      $boissonManager = new BoissonManager();
      $list = $boissonManager->findAll();
      return $list;
   }

   /**
    * Récupération de la liste des desserts
    *
    * @return void
    */
   public function getListDessert()
   {
      $dessertManager = new DessertManager();
      $list = $dessertManager->findAll();
      return $list;
   }


   /**
    * Modifier un item(boisson, dessert, pizza) avec nom et prix, liste ingrédient pour les pizzas
    *
    * @return void
    */
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

   /**
    *  Ajouter un item(boisson, dessert, pizza) avec nom et prix, liste ingrédient pour les pizzas
    *
    * @return void
    */
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

   /**
    * Récupérer la liste des ingrédients
    *
    * @return void
    */
   public function getListIngredient()
   {
      $ingredientManager = new IngredientManager();
      $listIngredient = $ingredientManager->findAll();
      return $listIngredient;
   }

   /**
    * Récupérer tous les utilisateurs
    *
    * @return void
    */
   public function getAllUser()
   {
      $userManager = new UtilisateurManager();
      $listUser = $userManager->getAllUser();
      return $listUser;
   }
}
