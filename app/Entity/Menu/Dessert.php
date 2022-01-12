<?php
namespace App\Entity\Menu;

class Dessert
{

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $nom;


    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }
}