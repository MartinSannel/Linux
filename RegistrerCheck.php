<?php 

	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	// Länka server och databas
	$database = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbserver = "stroggebas";

	$connect = mysqli_connect($database, $dbuser, $dbpass, $dbserver);

	if(empty($_POST['user'] || $_POST['pass'])){
		header("Location: index.php?error");
		exit();
	}

	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($connect, $sql);
	$resultCheck = mysqli_query($connect, "INSERT INTO users (id, username, password) VALUES ('', '".$username."','".$password."');");
	if ($resultCheck) {
		header("Location: index.php");
	} else {
		echo "Kontot skapades inte";
	}
	
	
?>