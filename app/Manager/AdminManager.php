<?php

namespace app\Manager;

use core\Database\Database;
use app\Entity\Menu\Boisson;
use app\Entity\Menu\Dessert;
use app\Entity\Menu\Pizza;
use app\Manager\Menu\IngredientManager;
use app\Manager\Menu\PizzaManager;

class AdminManager
{
    public function __construct()
    {
        $this->pdo = (new Database())->pdo;

        if (is_null($this->pdo)) {
            throw new \Exception("Erreur dans les identifiants de connexion à la BDD");
        }
    }

    /**
     * Modification des items
     *
     * @return boolean
     */
    public function updateItem($table, $id, $nom, $prix)
    {
        $obj = [':nom' => $nom, ':prix' => $prix];
        $statementArt = "UPDATE $table SET
                             nom = :nom,
                             prix = :prix
                             WHERE id = $id";
        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($obj);
    }

    /**
     * Modification des items
     *
     * @return boolean
     */
    public function addItem($table, $nom, $prix)
    {
        $obj = [':nom' => $nom, ':prix' => $prix];
        $statementArt = "INSERT INTO $table SET
                             nom = :nom,
                             prix = :prix";
        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($obj);
    }


    /**
     * Modification des pizzas
     *
     * @return boolean
     */
    public function updatePizza($id, $nom, $prix, $ingredient)
    {
        $pizzaManager = new PizzaManager();
        $pizzaManager->updatePizza($id, $nom, $prix);

        $ingredientManager = new IngredientManager();
        $ingredientManager->deletePizzaIngredient($id);

        foreach ($ingredient as $id_ingredient => $value) {
            $ingredientManager->insertIngredientInPizza($id, $id_ingredient);
        }
    }
}
