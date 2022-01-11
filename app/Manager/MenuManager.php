<?php
namespace app\Manager;

use core\Database\Database;

class MenuManager
{
    public function __construct()
    {
        $this->pdo = (new Database())->pdo;

        if(is_null($this->pdo)){
            throw new \Exception("Erreur dans les identifiants de connexion à la BDD");
        }
    }

    /**
     * Récupère les pizzas
     *
     * @return array
     */
    public function getPizza(): array
    {

        $statement = "SELECT
                            p.id_plat,
                            p.nom_plat,
                            GROUP_CONCAT(ig.nom_ingredient) AS ingredient
                        FROM
                            `plat` AS p
                        INNER JOIN plat_ingredient AS PI
                        ON
                            p.id_plat = PI.id_plat
                        INNER JOIN ingredient AS ig
                        ON
                            PI.id_ingredient = ig.id_ingredient
                        GROUP BY
                            p.id_plat";
        $pizzas = $this->pdo->query($statement);
        $pizzas = $pizzas->fetchAll();

        return $pizzas;
    }
}