// Menu : left
$(document).ready(function(){
	$('.nav-menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
				$(this).removeClass('activado');
				$(this).children('ul').slideUp();
		} else{
				$('.nav-menu li ul').slideUp();
				$('.nav-menu li').removeClass('activado');
				$(this).addClass('activado');
				$(this).children('ul').slideDown();
		}
	});

	$('.nav-menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});