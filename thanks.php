<?php

$email_invalide=0;
$champ_vide=0;

    if (empty($_POST['prenom']))  $champ_vide=1;
    if (empty($_POST['nom']))     $champ_vide=1;
    if (empty($_POST['email']))    $champ_vide=1;
    if (empty($_POST['telephone']))    $champ_vide=1;
    if (empty($_POST['message'])) $champ_vide=1;


    if ($champ_vide==1):
        echo "ERREUR : tous les champs ne sont pas remplis." . "<br>" . PHP_EOL;
    endif;

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)):
        $email_invalide=0;
    else:
        $email_invalide=1;
        echo "EMAIL invalide";
    endif;

    if ( ($champ_vide == 0) && ($email_invalide == 0) ):

        echo 'Merci ' .$_POST["prenom"].' '.$_POST["nom"].' de nous avoir contacté à propos de "'.$_POST["sujet"].'".';
        echo'<br><br>';
        echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST["email"].' ou par téléphone au 
        '.$_POST["telephone"].' dans les plus brefs délais pour traiter votre demande :';
        echo'<br><br>';
        echo $_POST["message"];

    endif;
?>

    




