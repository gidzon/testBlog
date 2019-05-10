	<?php
		include('sql_article.php');
	?>

		
	<section class="posts">
		<?php
			for($i=1; $i<5; $i++):
		?>
			<?php
				 while($row = $query->fetch(PDO::FETCH_OBJ)):
			?>
		<article>
			
		
		<p><?php echo "<h2><a href='article.php?id=$row->id'>$row->title<br /></a></h2>";?></p>
			<header>
				 
				<span class="date">April 24, 2017</span>
				
			</header>
			<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
			
			 <p><?php echo "<p>$row->intro</p>"; ?></p>
			
			<ul class="actions special">
				<?php echo "<li><a href='article.php?id=$row->id' class='button'>Читать дальше</a></li>"?>
				
			</ul>
			
			</article>
			
				<?php
					endwhile;
				?>
			<?php
				endfor;
			?>
		</section>
		
		
			
		