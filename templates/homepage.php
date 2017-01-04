<?php include "templates/include/header.php";?>


<?php foreach ( $results['articles'] as $article ) { 
	$date = $article->publicationDate;
	?>


	<!-- Post -->
	<article class="box post post-excerpt">
		<header>
			<h2><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title); echo Article::getNumPages();?></a></h2>
			<p><?php echo htmlspecialchars( $article->summary);?></p>
		</header>
		<div class="info">
			<span class="date">
				<span class="month"><? echo date('M', $date)?></span> 
				<span class="day"><? echo date('d', $date)?></span>
				<span class="year"><? echo date('Y', $date)?></span></span>
				<ul class="stats">
					<li><a href="#" class="icon fa-comment">16</a></li>
					<li><a href="#" class="icon fa-eye">32</a></li>
				</ul>
			</div>
			<!-- <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a> -->

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