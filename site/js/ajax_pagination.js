$(document).ready(function(){

	// Присваивание класса current навигации
	var adrStr = window.location.search;
	console.log(adrStr);
	switch(adrStr){
		case '?action=about': $('#nav ul li[data-nav ^= "about"]').addClass('current');
			break;

		case '?action=contacts': $('#nav ul li[data-nav ^= "contacts"]').addClass('current');
			break;

		default: $('#nav ul li[data-nav ^= "default"]').addClass('current');
	}

	// Присвоение 1 странице класса active
	$('.pagination a[data-page ^= "1"]').addClass('active');

	$(".inner").on( "click", ".pagination a", function (e){
		e.preventDefault();

		var page = $(this).attr("data-page"); //возвращает номер страницы

		$(".inner").load("index.php", {"page":page, "newPage": "newPage"}, function(){

			// При клике на номер страницы присваивается класс active
			// а с осталиных номеров убираеться 
			$('.pagination a').removeClass('active');
			$('.pagination a[data-page ^= ' + page + ']').addClass('active');

		});
	});
});