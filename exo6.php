<?php

$personnes = array(

	'mdupond'=> array(
		'prenom' => 'Martin', 	
		'nom' => 'Dupond',
		'age' => 25, 
		'ville' => 'Paris'
		),

	 'jm'=> array(
		 'prenom' => 'Jean', 
		 'nom' => 'Martin', 
		 'age' => 20, 
		 'ville' => 'Villetaneuse'
	 	),

	 'toto'=> array(
		 'prenom' => 'Tom', 
		 'nom' => 'Tonge', 
		 'age' =>18, 
		 'ville' => 'Epinay'
	 	),

 	'arn'=> array(
		'prenom' => 'Arnaud',
		'nom' => 'Dupond',
	       	'age'=> 33, 
		'ville' => 'Paris'
		),

	'email'=> array(
		'prenom'=>'Emilie',
	       	'nom'=>'Ailta',
		'age'=>46,
		'ville'=>'Villetaneuse'
		),

	'dask' => array(
		'prenom'=>'Damien',
		'nom'=>'Askier',
		'age'=>7,
		'ville'=>'Villetaneuse'
		)
);

echo"<table border=1>";
	echo "<tr>";
		echo"<th>"."Prénom"."</th>";
		echo"<th>"."Nom"."</th>";
		echo"<th>"."Age"."</th>";
		echo"<th>"."Ville"."</th>";
	echo "</tr>";

foreach($personnes as $key => $value) {
	echo "<tr>";
		echo ("<td>".$personnes[$key]['prenom']."</td>");
		echo ("<td>".$personnes[$key]['nom']."</td>");
		echo ("<td>".$personnes[$key]['age']."</td>");
		echo ("<td>".$personnes[$key]['ville']."</td>");	
	echo "</tr>";
}
echo"</table>"; 

echo"<br>";

echo"<table border=1>";

	echo "<tr>";
		echo"<th>"."Prénom"."</th>";
		echo"<th>"."Nom"."</th>";
		echo"<th>"."Age"."</th>";
		echo"<th>"."Ville"."</th>";
	echo "</tr>";


foreach($personnes as $cle => $valeur) {
	echo "<tr>";
	if ($personnes[$cle]['ville'] == 'Paris') { 
		echo ("<td>".$personnes[$cle]['prenom']."</td>");
		echo ("<td>".$personnes[$cle]['nom']."</td>");
		echo ("<td>".$personnes[$cle]['age']."</td>");
		echo ("<td>".$personnes[$cle]['ville']."</td>");
	}
	echo "</tr>";
}

echo"</table>";

?>
