<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

echo "Merci" . $firstname . $lastname . "de nous avoir contacté à propos de" . $subject . "Un de nos conseillers vous contactera soit à l\adresse" . $email . "ou par téléphone au" .  $number . "dans les plus brefs délais pour traiter votre demande :"  . $message;

