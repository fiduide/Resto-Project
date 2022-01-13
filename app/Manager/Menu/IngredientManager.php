<?php

namespace app\Manager\Menu;

use app\Entity\Menu\Ingredient;
use core\Database\Database;

class IngredientManager extends Database
{

    /**
     * Récupère un ingredient en fonction de son identifiant
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id): Ingredient
    {
        $query = "SELECT *
            FROM ingredient
            WHERE id_ingregient = $id;";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Ingredient");

        $ingredient = $stmt->fetch();
        $stmt->closeCursor();

        return $ingredient;
    }

    public function findPizzaIngredient(int $id): array
    {
        $query = "SELECT i.*
            FROM ingredient i
            JOIN pizza_ingredient p_i
                ON i.id_ingredient = p_i.id_ingredient
            WHERE p_i.id_pizza = $id;";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Ingredient");

        $ingredient = $stmt->fetchAll();
        $stmt->closeCursor();

        return $ingredient;
    }
}
