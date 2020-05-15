<?php


if (!isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $societe = $_POST["societe"];
    $email = $_POST["email"];
    $mymessage = $_POST["mymessage"];
    $sujet = 'Stage DWWM promo 2020';

    $toEmail = "mystimer@gmail.com";
    $mailHeaders = "de: " . $nom . $prenom . "<" . $email . ">\r\n";
    if (mail($toEmail, $sujet, $mymessage, $mailHeaders)) {
        echo "<h1>Le formulaire a ete envoyer avec succes!</h1>";
    } else {
        echo "Il y a une erreur dans le formulaire, veuillez reessayer!";

    }

}

?>

