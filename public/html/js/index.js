$(document).ready(function(){

	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide"
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

	$("#case .detail img").click(function(){
		$("#case .detail").toggleClass("close");
	})

});