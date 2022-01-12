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
    public function AddCheckout(array $data)
    {
        //INSERT COMMAND
        $statementArt = "INSERT INTO commande (id_utilisateur, etat, date_order)
        VALUES (:id_user, :etat, :date_order)";

        $prepare = $this->pdo->prepare($statementArt);
        
        $prepare->execute($data);

        return $this->pdo->lastInsertId();
    }

    public function AddCheckoutPizza(array $data)
    {
        //INSERT COMMAND
        $statementArt = "INSERT INTO commande_pizza (id_commande, id_pizza, quantite)
        VALUES (:id_commande, :id_pizza, :quantite)";

        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($data);
    }

    public function AddCheckoutBoisson(array $data)
    {
        //INSERT COMMAND
        $statementArt = "INSERT INTO commande_boisson (id_commande, id_boisson, quantite)
        VALUES (:id_commande, :id_boisson, :quantite)";

        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($data);
    }

    public function AddCheckoutDessert(array $data)
    {
        //INSERT COMMAND
        $statementArt = "INSERT INTO commande_dessert (id_commande, id_dessert, quantite)
        VALUES (:id_commande, :id_dessert, :quantite)";

        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute($data);
    }
}