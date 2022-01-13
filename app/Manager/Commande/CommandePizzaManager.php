<?php

namespace app\Manager\Commande;

use core\Database\Database;
use app\Manager\Menu\PizzaManager;

class CommandePizzaManager extends Database
{
    /**
     * Récupère la liste de pizzas liée à une commande
     *
     * @param integer $id
     * @return array
     */
    public function find(int $id): array
    {
        $query = "SELECT * 
            FROM commande_pizza 
            WHERE id_commande = $id;";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande\CommandePizza");

        $arCommandePizza = $stmt->fetchAll();

        foreach ($arCommandePizza as $commandePizza) {
            // Initialisation de la variable $pizza
            $pizza = (new PizzaManager)->find($commandePizza->getId_pizza());
            $commandePizza->setPizza($pizza);
        }

        return $arCommandePizza;
    }
}
