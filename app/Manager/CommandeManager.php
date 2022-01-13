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

    public function findByUtilisateur(int $id, int $limit = null): array
    {
        $query = "SELECT *
            FROM commande
            WHERE id_utilisateur = $id";

        if ($limit != null) {
            $query .= " ORDER BY date_order DESC LIMIT $limit;";
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
}
