<?php

namespace app\Entity\Menu;

class Ingredient
{
    /**
     * @var int
     */
    private int $id_ingredient;

    /**
     * @var string
     */
    private string $nom_ingredient;

    /**
     * Get the value of id_ingredient
     *
     * @return  int
     */
    public function getId_ingredient()
    {
        return $this->id_ingredient;
    }

    /**
     * Get the value of nom_ingredient
     *
     * @return  string
     */
    public function getNom_ingredient()
    {
        return $this->nom_ingredient;
    }

    /**
     * Set the value of nom_ingredient
     *
     * @param  string  $nom_ingredient
     *
     * @return  self
     */
    public function setNom_ingredient(string $nom_ingredient)
    {
        $this->nom_ingredient = $nom_ingredient;

        return $this;
    }
}
