<?php
namespace app\Manager;

use core\Database\Database;
use app\Entity\Checkout;
use app\Entity\Menu\Boisson;
use app\Entity\Menu\Dessert;

class CheckoutManager
{
    public function __construct()
    {
        $this->pdo = (new Database())->pdo;

        if(is_null($this->pdo)){
            throw new \Exception("Erreur dans les identifiants de connexion à la BDD");
        }
    }

    /**
     * Ajoutes des commandes
     *
     * @return boolean
     */
    public function AddCheckout()
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
                            p.id = PI.id_plat
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
}