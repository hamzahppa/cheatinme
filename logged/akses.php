<?php 
	session_start();
	if (is_null($_SESSION['status']) || $_SESSION['status'] != 1) {
		header("Location: /cheatinme/index.php");
		session_destroy();
	}
?>