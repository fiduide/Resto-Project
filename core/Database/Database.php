<?php

namespace Pizza_lab\core\Database;

class Database
{
    /**
     * @var string
     */
    private string $host;

    /**
     * @var string
     */
    private string $dbname;

    /**
     * @var string
     */
    private string $charset;

    /**
     * @var string
     */
    private string $dbuser;

    /**
     * @var string
     */
    private string $dbpass;

    /**
     * @var \PDO
     */
    public \PDO $pdo;

    /**
     * @var string
     */
    public string $error;

    /**
     * Connecte le projet à la BDD
     */
    public function __construct()
    {
        $this->getConfig();

        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->dbuser, $this->dbpass, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    }

    /**
     * Récupère les informations pour se connecter à la BDD
     * @return void
     */
    private function getConfig()
    {
        require ROOT . "/config/dbConfig.php";

        // $this->host = $config["host"];

        foreach ($config as $key => $value) {
            $this->$key = $value;
        }

    }
}