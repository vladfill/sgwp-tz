	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Админ</span>панель</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<ul class="nav menu">
			<li><a href="admin.php?action=newArticle"><span class="glyphicon glyphicon-pencil"></span> Добавить статью</a></li>
			<li><a href="admin.php"><span class="glyphicon glyphicon-list-alt"></span> Статьи</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="admin.php?action=logout"><span class="glyphicon glyphicon-log-out"></span> Выход</a></li>
		</ul>
		</div><!--/.sidebar-->