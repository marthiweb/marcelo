$(document).ready(function(){
	$('.parallax').parallax();

	//NAVEGAÇÃO - Os bagulho rola assim
	var homeOffset = 0,
		portOffset = $(".portfolioScroll").offset().top -70,
		sobreOffset = $(".sobreScroll").offset().top -70,
		contOffset = $(".contatoScroll").offset().top -70;

	$("#link1").click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 500);
	});
	$("#link2").click(function(){
		$('html, body').animate({
			scrollTop: portOffset
		}, 500);
	});
	$("#link3, #btnSobre").click(function(){
		$('html, body').animate({
			scrollTop: sobreOffset
		}, 500);
	});
	$("#link4").click(function(){
		$('html, body').animate({
			scrollTop: contOffset
		}, 500);
	});

});