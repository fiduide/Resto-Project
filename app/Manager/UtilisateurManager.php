<?php

namespace app\Manager;

use app\Entity\Utilisateur;
use core\Database\Database;

class UtilisateurManager extends Database
{
    /**
     * Récupère un utilisateur en fonction de son adresse email et de son mot de passe
     *
     * @param string $email
     * @param string $motDePasse
     * @return array
     */
    public function getUtilisateur(string $email, string $motDePasse): array
    {
        $query = "SELECT *
            FROM utilisateur
            WHERE email LIKE :email
                AND mot_de_passe = :motDePasse;";

        $arDataQuery = array(
            ":email" => $email,
            "motDePasse" => $motDePasse
        );

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($arDataQuery);

        $utilisateur = $stmt->fetch();
        $stmt->closeCursor();

        if (!$utilisateur) {
            $utilisateur = array();
        }

        return $utilisateur;
    }

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return Utilisateur
     */
    public function find(int $id): Utilisateur
    {
        $stmt = "SELECT * 
            FROM utilisateur
            WHERE id_utilisateur = $id;";

        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Utilisateur");

        $utilisateur = $query->fetch();
        $query->closeCursor();

        return $utilisateur;
    }
}
