<?php 
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	// Länka server och databas
	$database = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbserver = "StroggeBas";

	$connect = mysqli_connect($database, $dbuser, $dbpass, $dbserver);

	if(empty($_POST['user'] || $_POST['pass'])){
		header("Location: index.php?error");
		exit();
	}

	$result = mysqli_query($connect, "select * from users where username = '$username' and password = '$password'")
	or die("Failed to query database " . mysqli_error());
	$row = mysqli_fetch_assoc($result);
	if ($row['username'] == $username && $row['password'] == $password ){
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "Failed to login.";
	}
?>