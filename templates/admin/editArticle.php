<?php include "templates/include-admin/header.php";
include "templates/include-admin/nav.php"; ?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo $results['pageTitle']?></div>
				<div class="panel-body">
					<div class="col-md-12">	
						<?php if ( isset( $results['errorMessage'] ) ) { ?>
						<div class="alert bg-danger" role="alert">
							<span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $results['errorMessage'] ?>
						</div>
						<?php } ?>


						<form action="admin.php?action=<?php echo $results['formAction']?>" method="post" role="form">
							<input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
							<div class="form-group">
								<label>Заголовок</label>
								<input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars( $results['article']->title )?>">
							</div>


							<!-- <div class="form-group">
								<label>Загрузить изображение</label>
								<input type="file">
								<p class="help-block">Загружать файлы формата JPEG</p>
							</div> -->

							<div class="form-group">
								<label>Описание</label>
								<textarea  name="summary" class="form-control" rows="3">
									<?php echo htmlspecialchars( $results['article']->summary )?>
								</textarea>
							</div>

							<div class="form-group">
								<label>Тело статьи</label>
								<textarea  name="content" class="form-control" rows="6">
									<?php echo htmlspecialchars( $results['article']->content )?>
								</textarea>
							</div>
							<p>
								<!-- <input type="submit" name="saveChanges" value="Save Changes" />
								<input type="submit" formnovalidate name="cancel" value="Cancel" /> -->
								<button type="submit" name="saveChanges" class="btn btn-default margin"><span class="glyphicon glyphicon-check"></span> &nbsp;Редактировать</button>
								<button  type="submit" formnovalidate name="cancel" class="btn btn-default margin"><span class="glyphicon glyphicon-remove"></span> &nbsp;Отмена</button>
							</p>

						</form>
						<?php if ( $results['article']->id ) { ?>
						<a  href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')" class="btn btn-default margin"><span class="glyphicon glyphicon-trash"></span> &nbsp;Удалить</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</div>

<?php include "templates/include-admin/footer.php" ?>