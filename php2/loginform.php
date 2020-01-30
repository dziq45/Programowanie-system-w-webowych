<?php

	session_start();
	include 'style/css_cookie_check.php';
	if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany'] == true)) {
		header('Location: index.php');
		exit();
	};

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="style/<?php echo $styleChoice?>/styles.css" type="text/css"/>
	<title>Muzeum- muzeum narodowe Wrocław</title>
</head>

<body>
	<div class="ticketForm">
	<form action="zaloguj.php" method="post">
	
		Login: <br /><input type="text" name="login"/><br />
		Hasło: <br /><input type="password" name="haslo"/><br />
		<input type="submit" value="Zaloguj się"/>
	
	</form>
	</div>
	
	<?php
	
		if(isset($_SESSION['blad']))
			echo $_SESSION['blad'];
	
	?>

</body>
</html>