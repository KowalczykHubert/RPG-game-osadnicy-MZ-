<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
	<link rel="stylesheet" href="style.css" tyle="text/css"/>
</head>

<body>
	<div id="container">
	<h1>Tylko martwi ujrzeli koniec wojny - Platon</h1>
	


	
	<form action="zaloguj.php" method="post">
	
		<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur = "this.placeholder='login'"/> 
		<input type="password" name="haslo" placeholder="hasło" onfocus="this.placeholder=''" onblur = "this.placeholder='hasło'"/> 
		<input type="submit" value="Zaloguj się" />
	
	</form>
	<div id="registration"><a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
</div>
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
</div>
</body>
</html>