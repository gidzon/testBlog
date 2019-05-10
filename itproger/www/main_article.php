<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
	</head>
	<body>
		<script type="text/javascript">
		  VK.init({apiId: 6976229, onlyWidgets: true});
		</script>
	<nav id="nav">
		<ul class="links">
			<li><a href="index.php">Главная</a></li>
			<?php
				if($_COOKIE['log'] == ''):
			?>
				 <li><a href="reg.php">Регистрация</a></li>
				 <li><a href="avtorization.php">Войти</a></li>
				 <?php
				 	elseif($_COOKIE['log'] != ''):
				 ?>
				  <li><a href="exit.php">Выйти</a></li>
				   <li><a href="article.php">Добавить статью</a></li>
			<?php
				endif;
			?>
	</ul>
		<article class="post featured">
	<header class="major">
		
		<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
		<span class="date">April 25, 2017</span>
		<?php
			include('bd.php');
			$sql = 'SELECT * FROM mainarticle WHERE id = :id';
			$query = $pdo->prepare($sql);
			$query->execute(['id' => $_GET['id']]);
			
			$article = $query->fetch(PDO::FETCH_OBJ);
			echo "<h1>$article->title</h1>";
			echo "<p>$article->intro</p></br>";
			echo "<p>$article->text</p>";
		?>
	</header>
	</article>
			<!-- Put this script tag to the <head> of your page -->
		

		

		<!-- Put this div tag to the place, where the Comments block will be -->
		<div id="vk_comments"></div>
		<script type="text/javascript">
		VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
		</script>
	</body>
</html>