$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>10) {
			$('.menu').css('position','fixed');
		}else{
			$('.menu').css('position','initial');
		}
	});


	//$('#slider').coinslider({ width: 1200, height: 500, navigation: false, delay: 3000 });
	$('#camera_wrap').camera({
		height: '500px',
		loader: 'bar',
		pagination: false,
		thumbnails: false,
		fx: 'stampede',
		time: 3000,

	});
	
      $('.carousel').carousel();
  
});
