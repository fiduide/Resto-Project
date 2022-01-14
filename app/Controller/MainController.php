<?php

namespace app\Controller;

class MainController
{
    /**
     * Affichage index vue
     */
    public function index()
    {
        include(ROOT . "/app/Template/v_accueil.php");
    }
}
