<?php

namespace app\Entity;

use core\Entity\DefaultEntity;

class Reservation extends DefaultEntity
{
    /**
     * Retourne un tableau contenant les propriétés de la réservation lorsqu'on l'appel comme une méthode
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            "nb_personne" => $this->nb_personne,
            "heure_debut" => $this->heure_debut,
            "id_utilisateur" => $this->id_utilisateur,
            "id_table_reservation" => $this->id_table_reservation
        ];
    }

    /**
     * @var integer
     */
    private int $id_reservation;

    /**
     * @var integer
     */
    private int $nb_personne;

    /**
     * @var \DateTime|string
     */
    private \DateTime|string $heure_debut;

    /**
     * @var \DateTime|string
     */
    private \DateTime|string $heure_fin;

    /**
     * @var integer
     */
    private int $id_utilisateur;

    /**
     * @var integer
     */
    private int $id_table_reservation;

    /**
     * Get the value of id_reservation
     *
     * @return  integer
     */
    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    /**
     * Get the value of nb_personne
     *
     * @return  integer
     */
    public function getNb_personne()
    {
        return $this->nb_personne;
    }

    /**
     * Set the value of nb_personne
     *
     * @param  integer  $nb_personne
     *
     * @return  self
     */
    public function setNb_personne($nb_personne)
    {
        $this->nb_personne = $nb_personne;

        return $this;
    }

    /**
     * Get the value of heure_debut
     *
     * @return  \DateTime|string
     */
    public function getHeure_debut()
    {
        return $this->heure_debut;
    }

    /**
     * Set the value of heure_debut
     *
     * @param  \DateTime|string  $heure_debut
     *
     * @return  self
     */
    public function setHeure_debut($heure_debut)
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    /**
     * Get the value of heure_fin
     *
     * @return  \DateTime|string
     */
    public function getHeure_fin()
    {
        return $this->heure_fin;
    }

    /**
     * Set the value of heure_fin
     *
     * @param  \DateTime|string  $heure_fin
     *
     * @return  self
     */
    public function setHeure_fin($heure_fin)
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

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
     * Set the value of id_utilisateur
     *
     * @param  integer  $id_utilisateur
     *
     * @return  self
     */
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of id_table_reservation
     *
     * @return  integer
     */
    public function getId_table_reservation()
    {
        return $this->id_table_reservation;
    }

    /**
     * Set the value of id_table_reservation
     *
     * @param  integer  $id_table_reservation
     *
     * @return  self
     */
    public function setId_table_reservation($id_table_reservation)
    {
        $this->id_table_reservation = $id_table_reservation;

        return $this;
    }
}
