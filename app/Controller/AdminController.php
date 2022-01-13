<?php

namespace app\Controller;

use app\Manager\CommandeManager;

// use app\Manager\AdminManager;

class AdminController extends MainController
{
   public function affichage(){
      $allCommand = $this->getAllCommand();
      $countAllCommand = $this->getCountAllCommand();
      $countInProgressCommand = $this->getCountInProgressCommand();
      $total = $this->getTotalCommand();

      include(ROOT . "/app/Template/Dashboard/v_dashboard.php");
   }


   public function getAllCommand() : array
   {
      $commandeManager = new CommandeManager();
      $listDesCommandes = $commandeManager->allCommand();
      return $listDesCommandes;
   }

   public function getCountAllCommand() :int {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountAllCommand();
      return $count;
   }

   public function getCountInProgressCommand() :int {
      $commandeManager = new CommandeManager();
      $count = $commandeManager->getCountInProgressCommand();
      return $count;
   }

   public function getTotalCommand() {
      $commandeManager = new CommandeManager();
      $total = $commandeManager->getTotalCommand();
      return number_format($total, 2);
   }

   public function setCommandDelivered($commandId) {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandDelivered($commandId);
   }

   public function setCommandWaiting($commandId) {
      $commandeManager = new CommandeManager();
      $commandeManager->setCommandWaiting($commandId);
   }
   
}
