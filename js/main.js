$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>10) {
			$('.menu').css('position','fixed');
		}else{
			$('.menu').css('position','initial');
		}
	});


	$('#slider').coinslider({ width: 900, height: 400, navigation: false, delay: 3000 });
});
