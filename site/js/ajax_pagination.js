$(document).ready(function(){

	// $(".pagination" ).load( "index.php");

	$(".inner").on( "click", ".pagination a", function (e){
		e.preventDefault();
		// console.log('9aub9aubfuian');
		var page = $(this).attr("data-page"); //возвращает номер страницы

		// $(this).parent().addClass('active');
		$(".inner").load("index.php", {"page":page, "newPage": "newPage"});
	});
});