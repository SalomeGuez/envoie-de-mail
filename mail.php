<?php 



$destinataire = "guezsalome@gmail.com";
$sujet = "Test mail";
$message = "Ceci est un test";

$expediteur = "From:guezsalome@gmail.com";

mail($destinataire,$sujet,$message,$expediteur);

echo("Envoi OK");



//Uploader le code sur Internet pour tester l’envoi.

?>