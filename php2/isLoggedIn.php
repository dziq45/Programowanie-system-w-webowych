<?php
    session_start();
    $loggedIn = false;
	if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany'] == true)) {
		$loggedIn = true;
	};

?>