<!DOCTYPE html>
<html>
<head>
	<title> Registrera konto </title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

	<div id="form">
		<form action="RegistrerCheck.php" method="POST">
			<p>
				<label> Användarnamn: </label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label> Lösenord: </label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" value="Reg" />
			</p>
		</form>
	</div>

</body>
</html>