<?php
namespace Pizza_lab\model;

require_once("model/Manager.php");

class UtilisateurManager extends Manager
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
        $db = $this->dbConnect();

        $query = "SELECT *
            FROM utilisateur
            WHERE email LIKE :email
                AND mot_de_passe = :motDePasse;";
        
        $arDataQuery = array(
            ":email" => $email,
            "motDePasse" => $motDePasse
        );
        
        $stmt = $db->prepare($query);
        $stmt->execute($arDataQuery);

        $utilisateur = $stmt->fetch();
        $stmt->closeCursor();

        if(!$utilisateur){
            $utilisateur = array();
        }

        return $utilisateur;
    }
}