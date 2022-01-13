<?php

namespace app\Entity\Commande;

use App\Entity\Menu\Pizza;
use core\Entity\DefaultEntity;

class CommandePizza extends DefaultEntity
{
    /**
     * @var integer
     */
    private int $id_commande;

    /**
     * @var integer
     */
    private int $id_pizza;

    /**
     * @var integer
     */
    private int $quantite;

    /**
     * @var Pizza
     */
    private Pizza $pizza;

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
     * Get the value of id_pizza
     *
     * @return  integer
     */
    public function getId_pizza()
    {
        return $this->id_pizza;
    }

    /**
     * Set the value of id_pizza
     *
     * @param  integer  $id_pizza
     *
     * @return  self
     */
    public function setId_pizza($id_pizza)
    {
        $this->id_pizza = $id_pizza;

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
     * Get the value of pizza
     *
     * @return  Pizza
     */
    public function getPizza()
    {
        return $this->pizza;
    }

    /**
     * Set the value of pizza
     *
     * @param  Pizza  $pizza
     *
     * @return  self
     */
    public function setPizza(Pizza $pizza)
    {
        $this->pizza = $pizza;

        return $this;
    }
}
