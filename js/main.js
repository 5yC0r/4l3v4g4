$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>10) {
			$('.menu').addClass('menu-fijo');
			$('.menu').removeClass('menu');
		}else{
			$('.menu-fijo').addClass('menu');
			$('.menu-fijo').removeClass('menu-fijo');
		}
	});

	$('#slider').coinslider({ width: 900, height: 400, navigation: false, delay: 3000 });
});
