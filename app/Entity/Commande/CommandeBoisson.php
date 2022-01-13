<?php

namespace App\Entity\Commande;

use App\Entity\Menu\Boisson;
use core\Entity\DefaultEntity;

class CommandeBoisson extends DefaultEntity
{
    /**
     * @var integer
     */
    private int $id_commande;

    /**
     * @var integer
     */
    private int $id_boisson;

    /**
     * @var integer
     */
    private int $quantite;

    /**
     * @var Boisson
     */
    private Boisson $boisson;

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
     * Get the value of id_boisson
     *
     * @return  integer
     */
    public function getId_boisson()
    {
        return $this->id_boisson;
    }

    /**
     * Set the value of id_boisson
     *
     * @param  integer  $id_boisson
     *
     * @return  self
     */
    public function setId_boisson($id_boisson)
    {
        $this->id_boisson = $id_boisson;

        return $this;
    }

    /**
     * Get the value of quantite
     *
     * @return  integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @param  integer  $quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of boisson
     *
     * @return  Boisson
     */
    public function getBoisson()
    {
        return $this->boisson;
    }

    /**
     * Set the value of boisson
     *
     * @param  Boisson  $boisson
     *
     * @return  self
     */
    public function setBoisson(Boisson $boisson)
    {
        $this->boisson = $boisson;

        return $this;
    }
}
