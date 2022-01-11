<?php
namespace app\Controller;

class MainController
{
    public function index()
    {
        include(ROOT . "/app/Template/v_accueil.php");
    }
}