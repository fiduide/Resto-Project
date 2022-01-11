<?php
namespace Pizza_lab\model;

class Manager
{

    /**
     * Établie la connexion à la base de données
     *
     * @return PDO
     */
    protected function dbConnect(): \PDO
    {
        $host       = "localhost";
        $database   = "pizza_lab";
        $charset    = "utf8";
        $user       = "root";
        $password   = "root";

        $dsn        = "mysql:host=".$host.";dbname=".$database.";charset=".$charset;

        $arPdoAttr  = array(
            \PDO::ATTR_ERRMODE               => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE    => \PDO::FETCH_ASSOC
        );

        $db = new \PDO($dsn, $user, $password, $arPdoAttr);
        
        return $db;
    }
}