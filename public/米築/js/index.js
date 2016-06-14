$(document).ready(function(){

	$(window).load(function() {
		$('.fs1').flexslider({
			animation: "slide",
			slideshowSpeed: 3500,
		});		

		$('.slick').slick({
			draggable: false,
			prevArrow: $("#prev"),
			nextArrow: $("#next")
		});

		$(".slick4").slick({
	        prevArrow: $("#case .select .left"),
	        nextArrow: $("#case .select .right"),
	        infinite: false,
	        slidesToShow: 5,
	        slidesToScroll: 4,
	        responsive: [
	            {
	                breakpoint: 768,
	                settings: {
	                    slidesToShow: 3,
	                    slidesToScroll: 3
	                }
	            },
	            {
	                breakpoint: 480,
	                settings: {
	                    slidesToShow: 2,
	                    slidesToScroll: 2
	                }
	            },
	        ]
	    });
	});

	$(".viewmore img").click(function(){
		$("html , body").animate({ "scrollTop": $("#news").offset().top });
	});

	$("#case .detail img").click(function(){
		$("#case .detail").toggleClass("close");
	});

});