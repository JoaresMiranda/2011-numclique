$(document).ready(function(){

	$("#Coluna ul.box").addClass(" invisivel");

	$("#Coluna h3").click(function(){

		$(this).next("ul.box").slideToggle("slow")

		.siblings("ul.box:visible").slideUp("slow");

		$(this).toggleClass("corrente");

		$(this).siblings("#Coluna h3").removeClass("corrente");

		return false;

	});



$("h1, h2, img,").hover(function () {

      $(this).fadeTo("slow", 0.4)

		},

						function () {

      $(this).fadeTo("slow", 1);

	});

});