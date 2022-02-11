<?php

function calcul()
{
    
    for ($i = 1; $i <= 30; $i++) {
    $resultat = $i ** 2;
    echo '<br>'.$i.' <sup>2</sup> = '.$resultat;
    }
}

calcul($resultat)
?>