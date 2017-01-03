<?php include "templates/include/header.php" ?>
<article class="box post post-excerpt">
	<header>
		<h2><?php echo htmlspecialchars( $results['article']->title);?></h2>
		<p><?php echo htmlspecialchars( $results['article']->summary);?></p>
	</header>
	<div class="info">
		<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
		<ul class="stats">
			<li><a href="#" class="icon fa-comment">16</a></li>
			<li><a href="#" class="icon fa-eye">32</a></li>
		</ul>
	</div>
	<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
	<p><?php echo $results['article']->content;?></p>
</article>
<?php include "templates/include/footer.php" ?>

