$(document).ready(function(){
	$("#modal .ul1 > li").click(function(){
		var t = $(this);
		t.toggleClass("thisPage");

		$("#modal .ul1 > li").not(":eq("+ t.index() +")").removeClass("thisPage");
	});	
	
	$(window).load(function(){
		// env.html
		$(".slick").slick({
			slidesToShow: 4,
			prevArrow: $("#prev"),
			nextArrow: $("#next"),
			responsive: [{
				breakpoint: 1366,
				settings:{
					slidesToShow: 3
				}
			},{
				breakpoint: 980,
				settings:{
					slidesToShow: 2
				}
			},{
				breakpoint: 600,
				settings:{
					slidesToShow: 1
				}
			}]
		});

		// hotnews.html
		$(".slick2").slick({
			slidesToShow: 2,
			prevArrow: $("#prev"),
			nextArrow: $("#next"),
			responsive: [{
				breakpoint: 980,
				settings:{
					slidesToShow: 1
				}
			}]
		});

		// rec.html
		$(".slick3").slick({
			prevArrow: $("#prev"),
			nextArrow: $("#next"),
		});

		// hotnews2.html
		$(".s-for").slick({
			arrows: false,
			asNavFor: ".s-nav",
			adaptiveHeight: true
		});
		$(".s-nav").slick({
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: ".s-for",
			centerMode: true,
			focusOnSelect: true
		});
	});
});