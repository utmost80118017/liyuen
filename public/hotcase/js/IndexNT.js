$(document).ready(function(){
	

	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide"
		});
	});

	setTimeout(function(){
		new WOW().init();
	},500);
	
	// Scroll Down
	$("img.logo").click(function(){
		$("html , body").animate({
			scrollTop: $("p.title").eq(0).offset().top -60
		}, 1000);
	});
});

