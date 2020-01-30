<?php

	if(isset($_GET['choice'])){
		$choice = $_GET['choice'];
		if($choice == "first" || $choice == "second") {
			setcookie("sitestyle", $choice, time() + 5, "/");
			header('Location: index.php');
			exit();
		}
	}

?>