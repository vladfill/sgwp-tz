<?php include "templates/include/header.php" ?>
<article class="box post post-excerpt">
	<header>
		<h2><?php echo htmlspecialchars( $results['article']->title);?></h2>
		<p><?php echo htmlspecialchars( $results['article']->summary);?></p>
	</header>
	<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
	<p><?php echo $results['article']->content;?></p>
</article>
<?php include "templates/include/footer.php" ?>