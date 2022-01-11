<?php
namespace App\Entity\Menu;

class Plat
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
    private string $ingredient;

    public function __construct($id, $nom, $ingredient)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->ingredient = $ingredient;
    }


}