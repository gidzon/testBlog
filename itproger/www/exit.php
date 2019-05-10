<?php
	setcookie('log', $login, time() - 3600, "/");
	header('Location: index.php');
	
	
?>