$(document).ready(function(){
	window.scrollTo(0,0);
	window.onbeforeunload = function(){
		window.scrollTo(0,0);
	};
// to Top
	var lastScrollTop = 0;
	
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
			if( $(this).scrollTop() > 200){
				$("#toTop").css({"display": "block"});
			}
		}
		else{
			if( $(this).scrollTop() <= 200){
				$("#toTop").css("display","none");
			}
		}
		
		lastScrollTop = st;
	});
	$("#toTop").click(function(){
		$("html , body").animate({scrollTop: 0}, 1000);
	});

	// Scroll down
	$("#subMenu1 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $("#day1").offset().top }, 1000)
	});
	$("#subMenu1 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $("#traffic1").offset().top }, 1000)
	});
	$("#subMenu1 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $("#living1").offset().top }, 1000)
	});

	$("#subMenu2 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $("#DayView").offset().top }, 1000)
	});
	$("#subMenu2 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $("#NightView").offset().top }, 1000)
	});
	$("#subMenu2 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $(".mainP").eq(0).offset().top }, 1000)
	});
	$("#subMenu2 li").eq(3).click(function(){
		$("html , body").animate({ scrollTop : $(".mainP").eq(1).offset().top }, 1000)
	});

	$("#subMenu3 li").eq(0).click(function(){
		$("html , body").animate({ scrollTop : $("#virtue").offset().top }, 1000)
	});
	$("#subMenu3 li").eq(1).click(function(){
		$("html , body").animate({ scrollTop : $("#v5").offset().top }, 1000)
	});
	$("#subMenu3 li").eq(2).click(function(){
		$("html , body").animate({ scrollTop : $("#v6").offset().top }, 1000)
	});


	/* collapseMB 1 */
	var c1 = true;
	$("#day2 .collapseMB img , #day2 .collapseMB p").click(function(){
		if( c1 ){
			$("#day2 .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#day2 div#d2L").addClass("close");
			$("#day2 .collapseMB h3").css("display", "none");
		}
		else{
			$("#day2 .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#day2 div#d2L").removeClass("close");
			$("#day2 .collapseMB h3").css("display", "block");
		}
		c1 = !c1;		
	});
	// collapseMB
	$("body > .collapseMB img , body > .collapseMB p , #public .collapseMB:eq(0) img , #public .collapseMB:eq(0) p , #public .collapseMB:eq(1) img , #public .collapseMB:eq(1) p").click(function(){
		if( !($(this).parent().next().hasClass("close")) ){
			
			$(this).parent().find("img:first-child").attr("src", "images/NT1/collapse.png");
			$(this).parent().next().addClass("close"); // .VerticalCenter
			$(this).parent().find("h3").css("display", "none"); // h3
		}
		else{
			$(this).parent().find("img:first-child").attr("src", "images/NT1/collapse2.png");
			$(this).parent().next().removeClass("close");
			$(this).parent().find("h3").css("display", "block");
		}
	});

	/* collapseMB 3 */
	$("#virtue .collapseMB img , #virtue .collapseMB p").click(function(){
		if( !($(this).parent().next().hasClass("close")) ){
			
			$(this).parent().find("img:first-child").attr("src", "images/NT1/collapse.png");
			$(this).parent().next().addClass("close"); // .VerticalCenter
			$(this).parent().find("h3").css("display", "none"); // h3
		}
		else{
			$(this).parent().find("img:first-child").attr("src", "images/NT1/collapse2.png");
			$(this).parent().next().removeClass("close");
			$(this).parent().find("h3").css("display", "block");
		}
	});
});