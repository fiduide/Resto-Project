<?php 

namespace app\Controller;

use app\Entity\Reservation;
use app\Manager\Reservation\TableReservationManager;
use app\Manager\ReservationManager;
use DateTime;

class ReservationController
{
    /**
     * Enregistre une nouvelle réservation dans la base de donées
     *
     * @return void
     */
    public function save()
    {
        $reservationManager = new ReservationManager();

        $reservation = new Reservation($_POST);

        $reservation->setHeure_fin("");
        $reservation->setId_utilisateur($_SESSION['id_utilisateur']);

        $tableReservationManager = new TableReservationManager();
        $tableReservation = $tableReservationManager->getTableDisponible($reservation->getNb_personne(), $reservation->getHeure_debut());

        if(!empty($tableReservation)){
            $reservation->setId_table_reservation($tableReservation[0]->getId_table_reservation());

            $id_reservation = $reservationManager->save($reservation());
            if($id_reservation > 0){
                header('Location: index.php?reservation_save=1');
            } else {
                header('Location: index.php?reservation_save=0');
            }
        } else {
            header('Location: index.php?reservation_save=2');
        }
    }
}