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

    /**
     * Met à jour une pizza
     *
     * @param integer $id
     * @param string $nom
     * @param float $prix
     * @return void
     */
    public function updatePizza(int $id, string $nom, float $prix)
    {
        $obj = [':nom' => $nom, ':prix' => $prix];
        $statementArt = "UPDATE pizza SET
                                nom = :nom,
                                prix = :prix
                                WHERE id = $id";
        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($obj);
    }

    /**
     * Ajoute une pizza et la lie à ses ingrédients
     *
     * @param string $nom
     * @param float $prix
     * @param array $ingredient
     * @return void
     */
    public function addPizza(string $nom, float $prix, array $ingredient)
    {
        $obj = [':nom' => $nom, ':prix' => $prix];
        //INSERT COMMAND
        $statementArt = "INSERT INTO pizza (nom, prix)
        VALUES (:nom, :prix)";

        $prepare = $this->pdo->prepare($statementArt);

        $prepare->execute($obj);

        $id_pizza = $this->pdo->lastInsertId();
        //Ajout des incrédients en fonction d'un id pizza
        $ingredientManager = new IngredientManager();
        foreach ($ingredient as $id_ingredient => $value) {
            $ingredientManager->insertIngredientInPizza($id_pizza, $id_ingredient);
        }
    }
}
