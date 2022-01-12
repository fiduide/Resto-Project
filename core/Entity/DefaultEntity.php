<?php

namespace core\Entity;

class DefaultEntity
{

    /**
     * Constructeur
     *
     * @param array $data
     */
    public function __construct(array|Object $data = [])
    {
        $this->hydrate($data);
    }

    /**
     * Hydrate l'objet à partir de la base de données
     *
     * @param array $data
     * @return void
     */
    public function hydrate(array|Object $data)
    {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}
