<?php

namespace app\Manager\Menu;

use core\Database\Database;
use App\Entity\Menu\Boisson;

class BoissonManager extends Database
{
    /**
     * Récupère les information d'une boisson en fonction de son identifiant
     *
     * @param integer $id
     * @return Boisson
     */
    public function find(int $id): Boisson
    {
        $query = "SELECT *
            FROM boisson
            WHERE id = $id;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Boisson");

        $boisson = $stmt->fetch();
        $stmt->closeCursor();

        return $boisson;
    }


    /**
     * Récupère les information de toutes les boissons
     *
     * @param integer $id
     * @return array
     */
    public function findAll(): array
    {
        $query = "SELECT *
            FROM boisson;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Menu\Boisson");

        $boissons = $stmt->fetchAll();

        return $boissons;
    }
}
