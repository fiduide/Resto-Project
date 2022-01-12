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
            $checkout = new Checkout($_SESSION['commande']);
            $articleId = $this->model->save($checkout());





            //INSERT COMMAND
            $statementArt = "INSERT INTO article (title, content, categorie_id, user_id)
                               VALUES (:title, :content, :categorie_id, 1)";

            $prepare = $this->pdo->prepare($statementArt);
            // On utilise l'objet article comme une fonction en ajoutant des () après la variable
            $prepare->execute($article());

            $id = $this->pdo->lastInsertId();
      
        $statementCat = "SELECT * FROM categorie";
        $query = $this->pdo->query($statementCat, \PDO::FETCH_CLASS, "App\Entity\Categorie");
        $cats = $query->fetchAll();


        return $pizzas;
    }
}