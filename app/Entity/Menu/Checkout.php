<?php

namespace App\Entity\Menu;
use core\Entity\DefaultEntity;

class Checkout extends DefaultEntity {


     /**
     * @var int
     */
    private int $id;

    /**
     * @var int
     */
    private int $id_user;

    /**
     * @var bool
     */
    private bool $etat;

    /**
     * @var \DateTime
     */
    private \DateTime|string $date_order;

    /**
     * Get the value of etat
     *
     * @return  bool
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @param  bool  $etat
     *
     * @return  self
     */ 
    public function setEtat(bool $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of id_user
     *
     * @return  int
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @param  int  $id_user
     *
     * @return  self
     */ 
    public function setId_user(int $id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of date_order
     *
     * @return  \DateTime
     */ 
    public function getDate_order()
    {
        return $this->date_order;
    }

    /**
     * Set the value of date_order
     *
     * @param  \DateTime  $date_order
     *
     * @return  self
     */ 
    public function setDate_order(\DateTime $date_order)
    {
        $this->date_order = $date_order;

        return $this;
    }

    public function __invoke() {
        return [
            "id_user" => $this->id_user,
            "etat" => $this->etat,
            "date_order" => $this->date_order->format("Y-m-d H:i:s")
        ];
    }
}