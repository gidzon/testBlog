<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<?php
		if($_COOKIE['log'] == ''):
	?>
	<p>Авторизация</p>
		<form action="info.php" method="POST">
			<p></p><input type="text" name="log" placeholder="ваш логин" /></p>
			<p></p><input type="password" name="pass" placeholder="ваш пароль" /></p>
			<p></p><input type="submit" value="отправить" /></p>
		</form>
		
		
		<?php
			endif;
		?>
	</body>
</html>