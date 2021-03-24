<?php



echo "Merci" . $_POST['user_name'] . $_POST['user_surname'] . "de nous avoir contacté à propos de " . $_POST['sujet'] .

".Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou par téléphone au " . $_POST['telephone'] . "dans les plus brefs délais pour traiter votre demande : ".

$_POST['user_message']
?>