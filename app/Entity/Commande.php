<?php

namespace app\Entity;

use core\Entity\DefaultEntity;

class Commande extends DefaultEntity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        if (is_string($this->date_order)) {
            $this->date_order = new \DateTime($this->date_order);
        }
    }

    /**
     * @var integer
     */
    private int $id_commande;

    /**
     * @var integer
     */
    private int $id_utilisateur;

    /**
     * @var integer
     */
    private int $etat;

    /**
     * @var \DateTime|string
     */
    private \DateTime|string $date_order;

    /**
     * @var Utilisateur
     */
    private Utilisateur $utilisateur;

    /**
     * @var array
     */
    private array $commande_pizza;

    /**
     * @var array
     */
    private array $commande_boisson;

    /**
     * @var array
     */
    private array $commande_dessert;

    /**
     * Get the value of id_commande
     *
     * @return  integer
     */
    public function getId_commande()
    {
        return $this->id_commande;
    }

    /**
     * Set the value of id_commande
     *
     * @param  integer  $id_commande
     *
     * @return  self
     */
    public function setId_commande($id_commande)
    {
        $this->id_commande = $id_commande;

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
     * Get the value of etat
     *
     * @return  integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param  integer  $etat
     *
     * @return  self
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of date_order
     *
     * @return  \DateTime|string
     */
    public function getDate_order()
    {
        return $this->date_order;
    }

    /**
     * Set the value of date_order
     *
     * @param  \DateTime|string  $date_order
     *
     * @return  self
     */
    public function setDate_order($date_order)
    {
        $this->date_order = $date_order;

        return $this;
    }

    /**
     * Get the value of utilisateur
     *
     * @return  Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set the value of utilisateur
     *
     * @param  Utilisateur  $utilisateur
     *
     * @return  self
     */
    public function setUtilisateur(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get the value of commande_pizza
     */
    public function getCommande_pizza()
    {
        return $this->commande_pizza;
    }

    /**
     * Set the value of commande_pizza
     *
     * @return  self
     */
    public function setCommande_pizza($commande_pizza)
    {
        $this->commande_pizza = $commande_pizza;

        return $this;
    }

    /**
     * Get the value of commande_boisson
     *
     * @return  array
     */
    public function getCommande_boisson()
    {
        return $this->commande_boisson;
    }

    /**
     * Set the value of commande_boisson
     *
     * @param  array  $commande_boisson
     *
     * @return  self
     */
    public function setCommande_boisson(array $commande_boisson)
    {
        $this->commande_boisson = $commande_boisson;

        return $this;
    }

    /**
     * Get the value of commande_dessert
     *
     * @return  array
     */
    public function getCommande_dessert()
    {
        return $this->commande_dessert;
    }

    /**
     * Set the value of commande_dessert
     *
     * @param  array  $commande_dessert
     *
     * @return  self
     */
    public function setCommande_dessert(array $commande_dessert)
    {
        $this->commande_dessert = $commande_dessert;

        return $this;
    }

    /**
     * Retoune la date de commande au format français
     *
     * @return string
     */
    public function getDate_orderFR(): string
    {
        return $this->date_order->format("d/m/Y");
    }

    /**
     * Retourne la liste des nom de pizza d'une commande
     *
     * @return string
     */
    public function getPizzaList(): string
    {
        $arPizza = array();

        foreach ($this->commande_pizza as $pizza) {
            $libelle = ucfirst(strtolower($pizza->getPizza()->getNom()));

            if ($pizza->getQuantite() > 1) {
                $libelle .= "(" . $pizza->getQuantite() . ")";
            }

            $arPizza[] = $libelle;
        }

        return implode(", ", $arPizza);
    }

    /**
     * Retourne la liste des nom de boissons d'une commande
     *
     * @return string
     */
    public function getBoissonList(): string
    {
        $arBoisson = array();

        foreach ($this->commande_boisson as $boisson) {
            $libelle = ucfirst(strtolower($boisson->getBoisson()->getNom()));

            if ($boisson->getQuantite() > 1) {
                $libelle .= "(" . $boisson->getQuantite() . ")";
            }

            $arBoisson[] = $libelle;
        }

        return implode(", ", $arBoisson);
    }

    /**
     * Retourne la liste des nom de dessert d'une commande
     *
     * @return string
     */
    public function getDessertList(): string
    {
        $arDessert = array();

        foreach ($this->commande_dessert as $dessert) {
            $libelle = ucfirst(strtolower($dessert->getDessert()->getNom()));

            if ($dessert->getQuantite() > 1) {
                $libelle .= "(" . $dessert->getQuantite() . ")";
            }

            $arDessert[] = $libelle;
        }

        return implode(", ", $arDessert);
    }
}
