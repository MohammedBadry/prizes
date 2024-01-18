<?php
session_start();

	//session_destroy();
		unset($_SESSION['competition']);
		unset($_SESSION['id']);
		unset($_SESSION['name']);
		unset($_SESSION['time']);
		header("location: login.php");


?>