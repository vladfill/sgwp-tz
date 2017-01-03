<?php include "templates/include/header.php";?>


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

		<!-- Pagination -->
		<div class="pagination">
			<a href="#" class="button previous">Previous Page</a>
			<div class="pages">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<span>&hellip;</span>
				<a href="#">20</a>
			</div>
			<a href="#" class="button next">Следующая</a>
		</div>

		<?php include "templates/include/footer.php" ?>