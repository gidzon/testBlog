<?php
	$user = 'root';
    $password = '';
    $db = 'reg';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    

?>