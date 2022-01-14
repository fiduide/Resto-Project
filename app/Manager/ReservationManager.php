<?php 

namespace app\Manager;

use app\Entity\Reservation;
use core\Database\Database;

class ReservationManager extends Database
{
    /**
     * Récupère une réservation en fonction de son identifiant
     *
     * @param integer $id
     * @return Reservation
     */
    public function find(int $id): Reservation
    {
        $stmt = "SELECT *
            FROM reservation
            WHERE id_reservation = $id;";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Reservation");

        $reservation = $query->fetch();
        $query->closeCursor();

        return $reservation;
    }

    /**
     * Récupère toutes les réservations
     *
     * @return array
     */
    public function findAll(): array
    {
        $stmt = "SELECT *
            FROM reservation;";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "app\Entity\Reservation");

        $reservations = $query->fetchAll();
        $query->closeCursor();

        return $reservations;
    }

    /**
     * Enregistre une nouvelle réservation
     *
     * @param array $data
     * @return integer
     */
    public function save(array $data): int
    {
        $stmt = "INSERT INTO `reservation`
            SET `nb_personne` = :nb_personne,
                `heure_debut` = :heure_debut,
                `id_utilisateur` = :id_utilisateur,
                `id_table_reservation` = :id_table_reservation;";
        $query = $this->pdo->prepare($stmt);
        try {
            $query->execute($data);
        } catch (\Throwable $th) {
            $query->debugDumpParams();
        }

        return $this->pdo->lastInsertId();
    }
}