<?php

namespace app\Manager\Commande;

use app\Manager\Menu\DessertManager;
use core\Database\Database;

class CommandeDessertManager extends Database
{
    /**
     * Récupère la liste de desserts liée à une commande
     *
     * @param integer $id
     * @return array
     */
    public function find(int $id): array
    {
        $query = "SELECT * 
            FROM commande_dessert 
            WHERE id_commande = $id;";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande\CommandeDessert");

        $arCommandeDessert = $stmt->fetchAll();

        foreach ($arCommandeDessert as $commandeDessert) {
            // Initialisation de la variable $dessert
            $dessert = (new DessertManager)->find($commandeDessert->getId_dessert());
            $commandeDessert->setDessert($dessert);
        }

        return $arCommandeDessert;
    }
}
