<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 
	
	$serveur="localhost";
	$username ="root";
	$dbname = "tester";
	$pass= "";

	

	$nom =$_POST["nom"];
	$telephone =$_POST["telephone"];
	$mail =$_POST["mail"];
	$numero_table =$_POST["numero_table"];
	$nombre_place =$_POST["nombre_place"];
	$date_reservation =$_POST["date_reservation"];
	$heure_reservation =$_POST["heure_reservation"];


	try {

		/*$connection = new PDO("mysql:host=$serveur;dbname=$dbname",$username,$pass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/


		/*$sth= $connection->prepare("INSERT INTO restau(id,nom,telephone,mail,numero_table,nombre_place,date_reservation,heure_reservation)
			VALUES("",?,?,?,?,?,?,?)");

		$sth->execute([$nom,$telephone,$mail,$numero_table,$nombre_place,$date_reservation,$heure_reservation]);

		echo "bien inserer";*/
       
        $db=new PDO("mysql:host=localhost;dbname=test","root","");
        $sql="INSERT INTO res VALUES('',?,?,?,?,?,?,?)";
        $req= $db->prepare($sql);
        $req->execute([$nom,$telephone,$mail,$numero_table,$nombre_place,$date_reservation,$heure_reservation]);
    
		echo "bien inserer";

		
	} 
	catch (Exception $e) {
		echo "Impossible de traiter vos données. Erreur " .$e->getMessage();
		
	}

	 ?>


</body>
</html>

	

	

	+