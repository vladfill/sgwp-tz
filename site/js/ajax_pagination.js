$(document).ready(function(){

	$(".pagination" ).load( "index.php");

	$(".pagination").on( "click", ".pagination ul li a", function (e){
		e.preventDefault();
		var page = $(this).attr("data-page"); //возвращает номер страницы

		$(this).parent().addClass('active');
		$(".pagination").load("index.php", {"page":page, "newPage": "newPage"}, function(){
			// Присваиваем класс active при клике
			var sPage = $('.pagination ul li a[data-page="' + page + '"]');
			sPage.parent().addClass('active');
		});
	});

});