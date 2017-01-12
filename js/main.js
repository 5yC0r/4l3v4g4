$(document).ready(function(){
	$(window).scroll(function(){
		console.log('hola');
		if ($(this).scrollTop()>10) {
			$('.menu').addClass('menu-fijo');
			$('.menu').removeClass('menu');
		}else{
			$('.menu-fijo').addClass('menu');
			$('.menu-fijo').removeClass('menu-fijo');
		}
	});
});
