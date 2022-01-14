<?php

namespace app\Entity\Reservation;

use core\Entity\DefaultEntity;

class TableReservation extends DefaultEntity
{
    /**
     * @var integer
     */
    private int $id_table_reservation;
    
    /**
     * @var integer
     */
    private int $nb_place;

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
     * Get the value of nb_place
     *
     * @return  integer
     */ 
    public function getNb_place()
    {
        return $this->nb_place;
    }

    /**
     * Set the value of nb_place
     *
     * @param  integer  $nb_place
     *
     * @return  self
     */ 
    public function setNb_place($nb_place)
    {
        $this->nb_place = $nb_place;

        return $this;
    }
}