<?php
echo('Bienvenue '.$_POST['prenom']." ".'<b>'.$_POST['nom'].'</b>');
echo('<br>'.'Nous avons bien noté que vous habitez '.$_POST['adresse'].' à '.'<b>'.$_POST['ville'].'</b>'.' ('.$_POST['postal'].')');
?>
