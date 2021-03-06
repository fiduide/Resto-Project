<?php
namespace App\Entity\Menu;
use core\Entity\DefaultEntity;
class Dessert extends DefaultEntity
{

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $nom;
    /**
     * @var string
     */
    private string $prix;


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
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of prix
     *
     * @return  string
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param  string  $prix
     *
     * @return  self
     */ 
    public function setPrix(string $prix)
    {
        $this->prix = $prix;

        return $this;
    }
}