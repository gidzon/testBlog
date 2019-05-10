<?php
	include('bd.php');

	
				$login = $_POST['log'];
				$password = $_POST['pass'];
			
				$sql = 'SELECT id FROM user WHERE login = :login && password = :password';
			    $query = $pdo->prepare($sql);
			    $query->execute(['login'=>$login, 'password'=>$password]);
			    $users = $query->fetch(PDO::FETCH_OBJ);
	
				if($users->id == 0){
					echo 'такого пользователя не существует';
					echo "<p><a href='avtorization.php'>Авторизация</a></p>";
				}
				else{
					
					setcookie('log', $login, time() + 3600, "/");
//					echo "добро пожаловать"." ".$_COOKIE['log'];

					echo "<p><a href='index.php'>Главная</a></p>";
				}
	

?>