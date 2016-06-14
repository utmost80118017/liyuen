$(document).ready(function(){
	window.scrollTo(0,0);
	window.onbeforeunload = function(){
		window.scrollTo(0,0);
	};

	$("nav .menu-icon a").click(function(){
		$("#container").toggleClass("menuSlide");
	});

	$("#toTop").click(function(){
		if( $(window).scrollTop() != 0 )
		$("html , body").animate({scrollTop: 0}, 1000);
	});
	
	// Scroll down
	$("#subMenu li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $("#golden1").offset().top -59}, 1000)
	});
	$("#subMenu li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $("#air p.title").offset().top -59}, 1000)
	});
	$("#subMenu li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $("#golden3").offset().top -59}, 1000)
	});

	$("#subMenu2 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $("#day").offset().top -59}, 1000)
	});
	$("#subMenu2 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $("#night").offset().top -59}, 1000)
	});
	$("#subMenu2 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $("#air").offset().top -59}, 1000)
	});
	$("#subMenu2 li").eq(3).click(function(){
		$("html , body").animate({ scrollTop : $("#detail").offset().top -59}, 1000)
	});

	$("#subMenu3 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $(".block").eq(0).offset().top -59}, 1000)
	});
	$("#subMenu3 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $(".block").eq(1).offset().top -59}, 1000)
	});
	$("#subMenu3 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $(".block").eq(2).offset().top -59}, 1000)
	});
	$("#subMenu3 li").eq(3).click(function(){
		$("html , body").animate({ scrollTop : $(".block").eq(3).offset().top -59}, 1000)
	});
	$("#subMenu3 li").eq(4).click(function(){
		$("html , body").animate({ scrollTop : $(".block").eq(4).offset().top -59}, 1000)
	});

	$("#subMenu4 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $(".content").eq(0).offset().top -59}, 1000)
	});
	$("#subMenu4 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $(".content").eq(1).offset().top -59}, 1000)
	});
	$("#subMenu4 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $(".content").eq(2).offset().top -59}, 1000)
	});
});