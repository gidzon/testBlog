<?php
		include('bd.php');
	
	$sql = 'SELECT * FROM artaicle ORDER BY title';
    $query = $pdo->query($sql);