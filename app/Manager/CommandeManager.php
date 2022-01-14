<?php

namespace app\Manager;

use App\Entity\Commande;
use app\Manager\Commande\CommandeBoissonManager;
use app\Manager\Commande\CommandeDessertManager;
use app\Manager\Commande\CommandePizzaManager;
use core\Database\Database;

class CommandeManager extends Database
{
    /**
     * Récupère les information d'une commande en fonction de son identifiant
     *
     * @param integer $id
     * @return Commande
     */
    public function find(int $id): Commande
    {
        $query = "SELECT *
            FROM commande
            WHERE id_commande = $id;";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande");

        $commande = $stmt->fetch();
        $stmt->closeCursor();

        // Initialisation de la variable $utilisateur
        $utilisateur = (new UtilisateurManager)->find($commande->getId_utilisateur());
        $commande->setUtilisateur($utilisateur);

        // Initialisation de la variable $commande_pizza
        $commande_pizza = (new CommandePizzaManager)->find($id);
        $commande->setCommande_pizza($commande_pizza);

        // Initialisation de la variable $commande_boisson
        $commande_boisson = (new CommandeBoissonManager)->find($id);
        $commande->setCommande_boisson($commande_boisson);

        // Initialisation de la variable $commande_dessert
        $commande_dessert = (new CommandeDessertManager)->find($id);
        $commande->setCommande_dessert($commande_dessert);

        return $commande;
    }

    /**
     * Récupère les commandes d'un utilisateur.
     * Possibilité d'y passer une limite de commande.
     *
     * @param integer $id
     * @param integer|null $limit
     * @return array
     */
    public function findByUtilisateur(int $id, int|null $limit = null): array
    {
        $query = "SELECT *
            FROM commande
            WHERE id_utilisateur = $id
            ORDER BY date_order DESC";

        if ($limit != null) {
            $query .= " LIMIT $limit;";
        }

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande");

        $arCommande = $stmt->fetchAll();

        foreach ($arCommande as $commande) {
            $id_commande = $commande->getId_commande();

            // Initialisation de la variable $utilisateur
            $utilisateur = (new UtilisateurManager)->find($id);
            $commande->setUtilisateur($utilisateur);

            // Initialisation de la variable $commande_pizza
            $commande_pizza = (new CommandePizzaManager)->find($id_commande);
            $commande->setCommande_pizza($commande_pizza);

            // Initialisation de la variable $commande_boisson
            $commande_boisson = (new CommandeBoissonManager)->find($id_commande);
            $commande->setCommande_boisson($commande_boisson);

            // Initialisation de la variable $commande_dessert
            $commande_dessert = (new CommandeDessertManager)->find($id_commande);
            $commande->setCommande_dessert($commande_dessert);
        }

        return $arCommande;
    }

    /**
     * Récupère toutes les commandes
     *
     * @return array
     */
    public function allCommand(): array
    {
        $query = "SELECT *
            FROM commande ORDER BY etat, date_order DESC";

        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande");

        $arCommande = $stmt->fetchAll();

        foreach ($arCommande as $commande) {

            $id_commande = $commande->getId_commande();

            //Initialisation de l'utilisateur
            $utilisateur = (new UtilisateurManager)->find($commande->getId_utilisateur());
            $commande->setUtilisateur($utilisateur);

            // Initialisation de la variable $commande_pizza
            $commande_pizza = (new CommandePizzaManager)->find($id_commande);
            $commande->setCommande_pizza($commande_pizza);

            // Initialisation de la variable $commande_boisson
            $commande_boisson = (new CommandeBoissonManager)->find($id_commande);
            $commande->setCommande_boisson($commande_boisson);

            // Initialisation de la variable $commande_dessert
            $commande_dessert = (new CommandeDessertManager)->find($id_commande);
            $commande->setCommande_dessert($commande_dessert);
        }

        return $arCommande;
    }

    /**
     * Récupère le nombre de commandes terminées
     *
     * @return integer
     */
    public function getCountAllCommand(): int
    {
        $query = "SELECT count(*) as count
        FROM commande WHERE etat = 1";
        $stmt = $this->pdo->query($query);


        $count = $stmt->fetch();
        return $count['count'];
    }

    /**
     * Récupère le nombre de commande en cours
     *
     * @return integer
     */
    public function getCountInProgressCommand(): int
    {
        $query = "SELECT count(*) as count
        FROM commande WHERE etat = 0";
        $stmt = $this->pdo->query($query);


        $count = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $count['count'];
    }

    /**
     * Récupère la somme total générée par les commandes
     *
     * @return float
     */
    public function getTotalCommand(): float
    {
        $query = "SELECT SUM(total) as total
        FROM commande";
        $stmt = $this->pdo->query($query);

        $count = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $count['total'];
    }

    /**
     * Marque un commande comme "Terminée".
     *
     * @param int $commandId
     * @return void
     */
    public function setCommandDelivered(int $commandId)
    {
        $statementArt = "UPDATE commande SET 
                             etat = 1
                             WHERE id_commande = $commandId";

        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute();
    }

    /**
     * Marque une commande comme "En cours".
     *
     * @param int $commandId
     * @return void
     */
    public function setCommandWaiting(int $commandId)
    {
        $statementArt = "UPDATE commande SET 
                             etat = 0
                             WHERE id_commande = $commandId";

        $prepare = $this->pdo->prepare($statementArt);
        $prepare->execute();
    }
}
