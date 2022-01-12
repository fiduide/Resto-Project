<?php

namespace app\Controller;

// use app\Manager\AdminManager;

class AdminController extends MainController
{
   public function affichage(){
    include(ROOT . "/app/Template/Dashboard/v_dashboard.php");
   }
}
