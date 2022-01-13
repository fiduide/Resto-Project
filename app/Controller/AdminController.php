<?php

namespace app\Controller;

use app\Manager\CommandeManager;
use app\Manager\Menu\PizzaManager;
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
}
