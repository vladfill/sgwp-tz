</div>
</div>

<!-- Sidebar -->
<div id="sidebar">

	<!-- Logo -->
	<h1 id="logo"><a href="index.php">Тестовое задание</a></h1>

	<div class="client">
		<section class="box search">

			<h3>Здравствуйте, admin</h3>
			<a href="#" class="button admin_panel_button">Мой кабинет</a>
		</section>

		<section class="box search">
			<a href="#" class="button admin_panel_button">Выход из акаунта</a>
		</section>
	</div>

	<!-- Nav -->
	<nav id="nav">
		<ul>
			<li class="current"><a href="#">Главная</a></li>
			<li><a href="?action=about">Об авторе</a></li>
			<li><a href="?action=contacts">Контакты</a></li>
		</ul>
	</nav>

	<!-- Search -->
	<section class="box search">

		<form method="post" action="admin.php?action=login" id="enter">
			<input type="text" class="text" name="username" placeholder="Имя" />
			<input type="password" class="text" name="password" placeholder="Пароль" />
			<input type="submit" value="Войти" name="login" />
		</form>

		<p><a href="#" id="reg">Регистрация</a></p>
	</section>


</div>

</div><!-- Wrapper -->

</body>
</html>