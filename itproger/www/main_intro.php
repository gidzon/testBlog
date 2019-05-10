
	<article class="post featured">
	<header class="major">
		
		<span class="date">April 25, 2017</span>
		<?php
			include('bd.php');
			$sql = 'SELECT * FROM mainArticle';
			$query = $pdo->query($sql);
			while($row = $query->fetch(PDO::FETCH_OBJ)):
				echo "<h2><a href='main_article.php?id=$row->id'>$row->title <br /></a></h2>
				<p>$row->intro<br /></p>";
			
		?>
	</header>
	<?php echo "<a href='main_article.php?id=$row->id' class='image main'><img src='images/pic01.jpg' alt='' /></a>";
	?>
	<ul class="actions special">
		<?php echo "<li> <a href='main_article.php?id=$row->id' class='button large'>Читать дальше</a></li>";?>
		<?php endwhile; ?>
	</ul>
	</article>