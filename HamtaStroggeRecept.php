<?php 
	
	// Länka server och databas
	$database = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbserver = "StroggeBas";

	$connect = mysqli_connect($database, $dbuser, $dbpass, $dbserver);

	include'Recept.php';

	$row = "SELECT * FROM stroggerecept";     
		$results = $connect->query($row);     
			if ($results->num_rows > 0) {
				while($rows = $results->fetch_assoc()) {
					$id = $rows['id'];            
					$namn = $rows['NamnRecept'];        
					$beskri = $rows['Beskrivning'];      
					$ingred = $rows['Ingredienser'];   
					$instruk = $rows['Instruktioner'];      
					$skapare = $rows['StroggeKonstnar'];            
					echo "<br>";             
					echo "Inlägg: " . "$id" . "<br>" . "<br>" . "Namn på recept: " . "$namn" . "<br>" . "<br>" . "Beskrivning: " . "$beskri" . "<br>" . "<br>". "Ingredienser: " . "$ingred" . "<br>" . "<br>" . "Tillagning: " . "$instruk" . "<br>" . "<br>" . "Skapare: " . "$skapare" . "<br>" . "<br>" . "<br>" . "• • • • • • • • • • • • • • •" . "<br>" . "<br>";  
					}   
				} 
				else {        
				echo "no rows in table";  
				} 
			 
		$connect->close();
?>