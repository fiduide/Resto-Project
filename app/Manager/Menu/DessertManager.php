<?php

namespace app\Manager\Menu;

use App\Entity\Menu\Dessert;
use core\Database\Database;

class DessertManager extends Database
{
    /**
     * Récupère les information d'un dessert en fonction de son identifiant
     *
     * @param integer $id
     * @return Dessert
     */
    public function find(int $id): Dessert
    {
        $query = "SELECT *
            FROM dessert
            WHERE id = $id;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Dessert");

        $dessert = $stmt->fetch();
        $stmt->closeCursor();

        return $dessert;
    }

    /**
     * Récupère les informations de tous les desserts
     *
     * @param integer $id
     * @return array
     */
    public function findAll(): array
    {
        $query = "SELECT *
            FROM dessert;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Dessert");

        $desserts = $stmt->fetchAll();

        return $desserts;
    }
}
