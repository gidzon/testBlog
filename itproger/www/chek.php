<?php
	include('bd.php');

		$login = $_POST['login'];
		$name = $_POST['name'];
		$password = $_POST['password'];

		$sql_1 = 'SELECT id FROM user WHERE login = :login && password = :password';
	    $query = $pdo->prepare($sql_1);
	    $query->execute(['login'=>$login, 'password'=>$password]);
	    $users = $query->fetch(PDO::FETCH_OBJ);
	    
	    if(!empty($users->id)){
			exit('Такой пользователь существует');
		}
		
		$sql_2 = 'INSERT INTO user(login, name, password) VALUES(:login, :name, :password)';
		$query = $pdo->prepare($sql_2);
		$query->execute(['login'=>$login, 'name'=>$name, 'password'=>$password]);
	
		if(empty(!$sql_2) && $sql_2 !==$sql_2->id ){
			echo 'Вы успешно зарегестрированы';
		}else{
			echo 'Вы не зарегестрированы';
		}

	
?>