<?php 
	session_start();
	$NamnRecept = $_POST['NamnRec'];
	$Beskrivning = $_POST['Beskri'];
	$Ingredienser = $_POST['Ingred'];
	$Instruktioner = $_POST['Instruk'];
	$StroggeKonstnär = $_POST['Skapare'];
	
	// Länka server och databas
	$database = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbserver = "StroggeBas";

	$connect = mysqli_connect($database, $dbuser, $dbpass, $dbserver);

	if(empty($_POST['NamnRec'] || $_POST['Beskri'] || $_POST['Ingred'] || $_POST['Instruk'] || $_POST['Skapare'])){
		header("Location: Recept.php?ej_komplett_formulär");
		exit();
	}

	$sql =  "INSERT INTO strrec (NamnRecept, Beskrivning, Ingredienser, Instruktioner, StroggeKonstnar) VALUES ('$NamnRecept', '$Beskrivning', '$Ingredienser', '$Instruktioner', '$StroggeKonstnär')";
	header("Location: Recept.php");
	$result = mysqli_query($connect, $sql) or die ("Failed to query database " . mysqli_error());

?>