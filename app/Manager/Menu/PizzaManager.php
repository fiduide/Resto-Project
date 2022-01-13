<?php

namespace app\Manager\Menu;

use App\Entity\Menu\Pizza;
use core\Database\Database;

class PizzaManager extends Database
{
    /**
     * Récupère les information d'une pizza en fonction de son identifiant
     *
     * @param integer $id
     * @return Pizza
     */
    public function find(int $id): Pizza
    {
        $query = "SELECT *
            FROM pizza
            WHERE id = $id;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Pizza");

        $pizza = $stmt->fetch();
        $stmt->closeCursor();

        $ingredients = (new IngredientManager)->findPizzaIngredient($pizza->getId());
        $pizza->setIngredients($ingredients);

        return $pizza;
    }

    /**
     * Récupère les information de toutes les pizzas
     *
     * @param integer $id
     * @return array
     */
    public function findAll(): array
    {
        $query = "SELECT *
            FROM pizza;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Pizza");

        $pizzas = $stmt->fetchAll();

        foreach ($pizzas as $pizza) {
            $ingredients = (new IngredientManager)->findPizzaIngredient($pizza->getId());
            $pizza->setIngredients($ingredients);
        }

        return $pizzas;
    }
}
