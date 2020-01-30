<?php

	session_start();
	$mysqli = new mysqli("localhost","root","","test");
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
	$login2 = $_POST['login'];
	$haslo = $_POST['haslo'];
	if($result = $mysqli->query("SELECT `id`,`login`,`password` FROM users where `login`='$login2' and `password`='$haslo'")){
		if(1 == $result->num_rows){
			$row = $result->fetch_row();
			$_SESSION['zalogowany'] = true;
			$_SESSION['userId'] = $row[0];
			$_SESSION['user'] = $row[1];
			unset($_SESSION['blad']);
			header('Location: index.php');
		}
		else{
			header('Location: loginform.php');
		}
	}

?>