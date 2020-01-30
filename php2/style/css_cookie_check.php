<?php

	$styleChoice = "";
	if(!isset($_COOKIE['sitestyle'])) {
		$styleChoice = "first";
	} else {
		$styleChoice = $_COOKIE['sitestyle'];
	}

?>