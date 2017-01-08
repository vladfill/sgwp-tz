$(document).ready(function(){

	$(".inner").on( "click", ".pagination a", function (e){
		e.preventDefault();

		var page = $(this).attr("data-page"); //возвращает номер страницы

		$(".inner").load("index.php", {"page":page, "newPage": "newPage"}, function(){

			$('.pagination a[data-page ^= ' + page + ']').addClass('active');

		});
	});
});