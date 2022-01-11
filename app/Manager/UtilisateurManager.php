<?php
namespace Pizza_lab\app\Manager;

use Pizza_lab\core\Database\Database;

class UtilisateurManager
{
    public function __construct()
    {
        $this->pdo = (new Database())->pdo;

        if(is_null($this->pdo)){
            throw new \Exception("Erreur dans les identifiants de connexion à la BDD");
        }
    }

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

        if(!$utilisateur){
            $utilisateur = array();
        }

        return $utilisateur;
    }
}