<?php 
	session_start();
	session_destroy();
	header("Location: /cheatinme/index.php");
?>