<?php include "templates/include/header.php"; ?>

<?php foreach ( $results['articles'] as $article ) { 
	$date = $article->publicationDate;
	?>


	<!-- Post -->
	<article class="box post post-excerpt">
		<header>
			<h2><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title);?></a></h2>
			<p><?php echo htmlspecialchars( $article->summary);?></p>
		</header>
		<div class="info">
			<span class="date">
				<span class="month"><?php echo date('M', $date);?></span> 
				<span class="day"><?php echo date('d', $date);?></span>
				<ul class="stats">
					<li><a href="#" class="icon fa-eye"><?php echo $article->quantity;?></a></li>
				</ul>
			</span>
		</div>

	</article>

	
	<?php } ?>
	<div class="pagination">
		<div class="pages">
			<?php for($i = 1; $i <= ceil(Article::getNumPages()/HOMEPAGE_NUM_ARTICLES); $i++){
				echo "<a href='#' data-page='$i'>$i</a>";
			} ?>
		</div>
	</div>

	<?php include "templates/include/footer.php" ?>