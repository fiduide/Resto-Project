<?php

namespace app\Controller;

class sendMailController
{
    /**
     * Send Mail
     *
     * @param string $nom
     * @param string $mail
     * @param string $message
     * @return void
     */
    public function sendMailTo($nom, $mail, $message)
    {

        $mailTo = "abpiz154@gmail.com";

        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $mailsender . "\r\n";

        $commentaire = '<h1>Prise de contact via le formaulaire</h1>
        <p><b>Nom du contact : </b>' . $nom . '<br>
        <p><b>Email du contact : </b>' . $mail . '<br>
        <p><b>Message : </b>' . $message . '</p>';

        $retour = mail($mailTo, 'Pizza Lab - Contact', $commentaire, $entete);
        if ($retour) {
            header("Location: index.php?sendMail");
        } else {
            header("Location: index.php?sendMailNot");
        }
    }
}
