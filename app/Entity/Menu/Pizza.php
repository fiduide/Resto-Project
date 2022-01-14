<?php

namespace App\Entity\Menu;

use core\Entity\DefaultEntity;

class Pizza extends DefaultEntity
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
     * @var array
     */
    private array $ingredients;

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
     * Get the value of nom
     *
     * @return  string
     */
    public function getNom()
    {
        return $this->nom;
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

    /**
     * Get the value of ingredients
     *
     * @return  array
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @param  array  $ingredients
     *
     * @return  self
     */
    public function setIngredients(array $ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Retourne la liste des ingédients d'une pizza
     *
     * @return string
     */
    public function getListIngredient(): string
    {
        $arIngredient = array();

        foreach ($this->ingredients as $ingredient) {
            $arIngredient[] = $ingredient->getNom_ingredient();
        }

        return implode(", ", $arIngredient);
    }

    /**
     * Vérifie qu'un ingrédient est bien dans la pizza
     *
     * @param integer $id_ingredient
     * @return boolean
     */
    public function existIngredient(int $id_ingredient): bool
    {
        $isIngredient = false;

        foreach ($this->ingredients as $ingredient) {
            if ($ingredient->getId_ingredient() === $id_ingredient) {
                $isIngredient = true;
            }
        }
        return $isIngredient;
    }
}
