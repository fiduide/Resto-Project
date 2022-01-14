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

    public function findAll(): array
    {
        $query = "SELECT *
            FROM ingredient";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Ingredient");

        $ingredient = $stmt->fetchAll();
        $stmt->closeCursor();

        return $ingredient;
    }



    public function deletePizzaIngredient($id_pizza)
    {
        $statementArt = "DELETE FROM pizza_ingredient WHERE id_pizza = $id_pizza";
        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute();
    }

    public function insertIngredientInPizza($id_pizza, $id_ingredient)
    {
        //INSERT COMMAND
        $obj = [':id_pizza' => $id_pizza, ':id_ingredient' => $id_ingredient];
        $statementArt = "INSERT INTO pizza_ingredient (id_pizza, id_ingredient)
        VALUES (:id_pizza, :id_ingredient)";

        $prepare = $this->pdo->prepare($statementArt);

        $prepare->execute($obj);
    }
}
