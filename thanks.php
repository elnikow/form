<?php
$nom_de_famille = $_POST['user_lastname'];
$prenom = $_POST['user_firstname'];
$courriel = $_POST['user_email'];
$phone = $_POST['user_phone'];
$subject = $_POST['subject'];
$message = $_POST['user_message'];
echo "Merci $prenom $nom_de_famille de nous avoir contacté à propos de \"$subject\".<br><br>";
echo "Un de nos conseillers vous contactera soit à l’adresse $courriel ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : <br><br>";
echo "$message";
