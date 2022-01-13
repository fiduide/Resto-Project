<?php

namespace app\Manager\Commande;

use app\Manager\Menu\BoissonManager;
use core\Database\Database;

class CommandeBoissonManager extends Database
{
    /**
     * Récupère la liste de boissons liée à une commande
     *
     * @param integer $id
     * @return array
     */
    public function find(int $id): array
    {
        $query = "SELECT * 
            FROM commande_boisson 
            WHERE id_commande = $id;";
        $stmt = $this->pdo->query($query, \PDO::FETCH_CLASS, "app\Entity\Commande\CommandeBoisson");

        $arCommandeBoisson = $stmt->fetchAll();

        foreach ($arCommandeBoisson as $commandeBoisson) {
            // Initialisation de la variable $boisson
            $boisson = (new BoissonManager)->find($commandeBoisson->getId_boisson());
            $commandeBoisson->setBoisson($boisson);
        }

        return $arCommandeBoisson;
    }
}
