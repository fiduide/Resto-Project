<?php

namespace app\Entity\Commande;

use App\Entity\Menu\Dessert;
use core\Entity\DefaultEntity;

class CommandeDessert extends DefaultEntity
{
    /**
     * @var integer
     */
    private int $id_commande;

    /**
     * @var integer
     */
    private int $id_dessert;

    /**
     * @var integer
     */
    private int $quantite;

    /**
     * @var Dessert
     */
    private Dessert $dessert;

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
     * Get the value of id_dessert
     *
     * @return  integer
     */
    public function getId_dessert()
    {
        return $this->id_dessert;
    }

    /**
     * Set the value of id_dessert
     *
     * @param  integer  $id_dessert
     *
     * @return  self
     */
    public function setId_dessert($id_dessert)
    {
        $this->id_dessert = $id_dessert;

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
     * Get the value of dessert
     *
     * @return  Dessert
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * Set the value of dessert
     *
     * @param  Dessert  $dessert
     *
     * @return  self
     */
    public function setDessert(Dessert $dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }
}
