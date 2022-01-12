<?php

namespace app\Entity;

use core\Entity\DefaultEntity;
use DateTime;

class Utilisateur extends DefaultEntity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        if (is_string($this->date_register)) {
            $this->date_register = new \DateTime($this->date_register);
        }
    }

    public function __invoke()
    {
        return [
            "date_register" => $this->date_register->format("Y-m-d H:i:s"),
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "telephone" => $this->telephone,
            "email" => $this->email,
            "mot_de_passe" => $this->mot_de_passe,
            "niveau_acces" => $this->niveau_acces
        ];
    }

    /**
     * @var integer
     */
    private int $id_utilisateur;

    /**
     * @var \DateTime|string
     */
    private \DateTime|string $date_register;

    /**
     * @var string
     */
    private string $nom;

    /**
     * @var string
     */
    private string $prenom;

    /**
     * @var string
     */
    private string $telephone;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $mot_de_passe;

    /**
     * @var integer
     */
    private int $niveau_acces;


    /**
     * Get the value of id_utilisateur
     *
     * @return  integer
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Get the value of date_register
     *
     * @return  \DateTime
     */
    public function getDate_register()
    {
        return $this->date_register;
    }

    /**
     * Set the value of date_register
     *
     * @param  string  $date_register
     *
     * @return  self
     */
    public function setDate_register(string $date_register)
    {
        $this->date_register = new \DateTime($date_register);

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string  $telephone
     *
     * @return  self
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of mot_de_passe
     *
     * @return  string
     */
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    /**
     * Set the value of mot_de_passe
     *
     * @param  string  $mot_de_passe
     *
     * @return  self
     */
    public function setMot_de_passe(string $mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    /**
     * Get the value of niveau_acces
     *
     * @return  integer
     */
    public function getNiveau_acces()
    {
        return $this->niveau_acces;
    }

    /**
     * Set the value of niveau_acces
     *
     * @param  integer  $niveau_acces
     *
     * @return  self
     */
    public function setNiveau_acces($niveau_acces)
    {
        $this->niveau_acces = $niveau_acces;

        return $this;
    }

    /**
     * Retourne le libellé lié à un niveau d'accès
     *
     * @param integer $niveau_acces
     * @return string
     */
    public function getNiveau_accesLibelle(): string
    {
        switch ($this->niveau_acces) {
            case 1:
                $libelle = "Client";
                break;
            case 2:
                $libelle = "Administrateur";
                break;
            default:
                $libelle = "Inconnu";
                break;
        }

        return $libelle;
    }

    public function getDate_registerFR(): string
    {
        return $this->date_register->format("d/m/Y");
    }
}
