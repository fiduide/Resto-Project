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
                AND mot_de_passe = :motDePasse
                AND statut_account = 1";

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
     * Récupère un utilisateur par son identifiant
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

    /**
     * Créé un nouvel utilisateur
     *
     * @param array $data
     * @return integer identifiant de l'utilisateur créé
     */
    public function save(array $data): int
    {
        $query = "INSERT INTO utilisateur
            SET date_register = :date_register,
                nom = :nom,
                prenom = :prenom,
                telephone = :telephone,
                email = :email,
                mot_de_passe = :mot_de_passe,
                niveau_acces = :niveau_acces,
                statut_account = :statut_account;";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);

        return $this->pdo->lastInsertId();
    }

    /**
     * Met à jour un utilisateur
     *
     * @param array $data
     * @param integer $id
     * @return void
     */
    public function update(array $data, int $id)
    {
        $query = "UPDATE utilisateur
            SET nom = :nom,
                prenom = :prenom,
                telephone = :telephone,
                email = :email,
                date_register = :date_register,
                mot_de_passe = :mot_de_passe,
                niveau_acces = :niveau_acces,
                statut_account = :statut_account
            WHERE  id_utilisateur = $id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
    }

    /**
     * Supprime un utilisateur en fonction de son identifiant
     *
     * @param integer $id
     * @return void
     */
    public function deleteAccountClient(int $id)
    {
        $query = "UPDATE utilisateur
        SET statut_account = 0
        WHERE  id_utilisateur = $id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
    }
}
