<?php

namespace app\Manager;

use core\Database\Database;
use app\Entity\Menu\Pizza;
use app\Entity\Menu\Boisson;
use app\Entity\Menu\Dessert;

class MenuManager
{
    public function __construct()
    {
        $this->pdo = (new Database())->pdo;

        if (is_null($this->pdo)) {
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
                            p.id,
                            p.nom,
                            p.prix,
                            GROUP_CONCAT(ig.nom_ingredient) AS ingredient
                        FROM
                            `pizza` AS p
                        INNER JOIN pizza_ingredient AS PI
                        ON
                            p.id = PI.id_pizza
                        INNER JOIN ingredient AS ig
                        ON
                            PI.id_ingredient = ig.id_ingredient
                        GROUP BY
                            p.id
                        ORDER BY p.id";
        $pizzas = $this->pdo->query($statement, \PDO::FETCH_CLASS, 'app\Entity\Menu\Pizza');
        $pizzas = $pizzas->fetchAll();

        return $pizzas;
    }

    public function getBoisson(): array
    {

        $statements = "SELECT
                            id,
                            nom,
                            prix
                        FROM
                            `boisson`";
        $boissons = $this->pdo->query($statements, \PDO::FETCH_CLASS, 'app\Entity\Menu\Boisson');
        $boissons = $boissons->fetchAll();

        return $boissons;
    }

    public function getDessert(): array
    {

        $statements = "SELECT
                            id,
                            nom,
                            prix
                        FROM
                            `dessert`";
        $desserts = $this->pdo->query($statements, \PDO::FETCH_CLASS, 'app\Entity\Menu\Dessert');
        $desserts = $desserts->fetchAll();

        return $desserts;
    }


    /**
     * Page d'article affichant les données en fonction de l'id de la pizza sélectionné
     * @return void
     */
    public function getOnePizza($id): Pizza
    {
        $statement = "SELECT * FROM pizza WHERE id = $id";
        $query = $this->pdo->query($statement, \PDO::FETCH_CLASS, 'app\Entity\Menu\Pizza');

        $pizza = $query->fetch();
        $query->closeCursor();
        return $pizza;
    }
    /**
     * Page d'article affichant les données en fonction de l'id de la boisson sélectionné
     * @return void
     */
    public function getOneBoisson($id): Boisson
    {
        $statement = "SELECT * FROM boisson WHERE id = $id";
        $query = $this->pdo->query($statement, \PDO::FETCH_CLASS, 'app\Entity\Menu\Boisson');

        $boisson = $query->fetch();
        $query->closeCursor();
        return $boisson;
    }
    /**
     * Page d'article affichant les données en fonction de l'id de la dessert sélectionné
     * @return void
     */
    public function getOneDessert($id): Dessert
    {
        $statement = "SELECT * FROM dessert WHERE id = $id";
        $query = $this->pdo->query($statement, \PDO::FETCH_CLASS, 'app\Entity\Menu\Dessert');

        $dessert = $query->fetch();
        $query->closeCursor();
        return $dessert;
    }
}
