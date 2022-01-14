<?php

namespace app\Manager\Reservation;

use app\Entity\Reservation\TableReservation;
use core\Database\Database;
use DateTime;

class TableReservationManager extends Database
{
    /**
     * Récupère une table en fonction de son identifiant
     *
     * @param integer $id
     * @return TableReservation
     */
    public function find(int $id): TableReservation
    {
        $stmt = "SELECT *
            FROM table_reservation
            WHERE id_table_reservation = $id;";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Reservation\TableReservation");

        $reservation = $query->fetch();
        $query->closeCursor();

        return $reservation;
    }

    /**
     * Récupère toutes les tables
     *
     * @return array
     */
    public function findAll(): array
    {
        $stmt = "SELECT *
            FROM table_reservation;";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Reservation\TableReservation");

        $tablesReservation = $query->fetchAll();
        $query->closeCursor();

        return $tablesReservation;
    }

    /**
     * Récupère la liste des tables disponible pours un nombre de personne et un horaire donné
     *
     * @param integer $nb_personne
     * @param string $horaire
     * @return array
     */
    public function getTableDisponible(int $nb_personne, string $horaire): array
    {
        $stmt = "SELECT tr.*
            FROM table_reservation tr
            LEFT JOIN reservation r ON
                tr.id_table_reservation = r.id_table_reservation
            WHERE tr.nb_place >= $nb_personne
                AND tr.id_table_reservation NOT IN(
                    SELECT id_table_reservation
                    FROM reservation
                    WHERE heure_debut = '$horaire'
                )
            ORDER BY tr.nb_place ASC;";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Reservation\TableReservation");

        $tablesReservation = $query->fetchAll();
        $query->closeCursor();

        return $tablesReservation;
    }
}