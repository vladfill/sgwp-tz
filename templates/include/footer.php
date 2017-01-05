</div>
</div>

<!-- Sidebar -->
<div id="sidebar">

	<!-- Logo -->
	<h1 id="logo"><a href="index.php">Тестовое задание</a></h1>

	<!-- Nav -->
	<nav id="nav">
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="?action=about">Об авторе</a></li>
			<li><a href="?action=contacts">Контакты</a></li>
		</ul>
	</nav>

	
	<!-- Search -->
	<section class="box search">
		<?php if ($_SESSION['username'] == ADMIN_USERNAME) {
			echo "<a href='admin.php'>Войти в админку</a>";
		} else{?>
		<form method="post" action="admin.php?action=login" id="enter">
			<input type="text" class="text" name="username" placeholder="Имя" />
			<input type="password" class="text" name="password" placeholder="Пароль" />
			<input type="submit" value="Войти" name="login" />
		</form>
		<?php } ?>
	</section>


</div>

</div><!-- Wrapper -->

</body>
</html>