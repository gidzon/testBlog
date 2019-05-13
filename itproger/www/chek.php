<?php
	include('bd.php');

		$login = $_POST['login'];
		$name = $_POST['name'];
		$password = $_POST['password'];

		$hash = "sdfjsdkhgs234jh324SDk";
		$pass = md5($password . $hash);

		$sql_1 = 'SELECT id FROM user WHERE login = :login && password = :pass';
			$query = $pdo->prepare($sql_1);
			$query->execute(['login'=>$login, 'password'=>$pass]);
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
