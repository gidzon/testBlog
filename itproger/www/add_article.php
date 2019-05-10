<?php
	include('bd.php');

		$title = $_POST['title'];
		$intro = $_POST['intro'];
		$text = $_POST['text'];

		
	
		if(!empty("sabmit")){
			$sql_2 = 'INSERT INTO artaicle(title, intro, text) VALUES(?,?,?)';
			$query = $pdo->prepare($sql_2);
			$query->execute([$title, $intro, $text]);
			echo "<p>Вы успешно добавили статью</p>";
			echo "<p><a href='index.php'>Главная</a></p>"; 
		}else{
			echo 'Не удалось добавить статью';
			echo "<p><a href='index.php'>Главная</a></p>";
			echo "<p><a href='avtorization.php'>Вход</a></p>";
		}

?>