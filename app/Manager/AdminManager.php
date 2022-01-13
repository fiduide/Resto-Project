<?php

namespace app\Manager;

use core\Database\Database;
use app\Entity\Menu\Boisson;
use app\Entity\Menu\Dessert;
use app\Entity\Menu\Pizza;

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
     * Modification des pizzas
     *
     * @return boolean
     */
    public function updatePizza($id, $nom, $prix, $ingredient)
    {
        $statementArt = "UPDATE pizza SET
                             nom = $nom,
                             prix = $prix
                             WHERE id = $id";

        $prepare = $this->pdo->prepare($statementArt, \PDO::FETCH_ASSOC);
        $prepare->execute();
    }
}
