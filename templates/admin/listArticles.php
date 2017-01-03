<?php include "templates/include-admin/header.php";
include "templates/include-admin/nav.php"; ?>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
<div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Статьи</div>
				<div class="panel-body">
					<div class="col-md-12">
						<?php foreach ( $results['articles'] as $article ) {?>
						<div class="post">
							<h2 onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
								<?php echo $article->title;?>
							</h2>
							<p class="above">
								<?php echo $article->summary;?>
							</p>

							<!-- <p class="post">
								<a class="btn btn-default margin"><span class="glyphicon glyphicon-trash"></span> &nbsp;Удалить</a>
								<a class="btn btn-default margin"><span class="glyphicon glyphicon-check"></span> &nbsp;Редактировать</a>
							</p> -->
						</div>
						<?php } ?>
					</div>
					<p>Всего статей: <?php echo $results['totalRows'];?></p>

					<p><a href="admin.php?action=newArticle">Добавить новую</a></p>


				</div>
			</div>

		</div><!-- /.col-->
	</div><!-- /.row -->
</div>

<?php include "templates/include-admin/footer.php" ?>