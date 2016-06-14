$(document).ready(function(){

	setTimeout(function(){
		NT3set();
	});
	$(window).resize(function(){
		NT3set();
	});

	function NT3set(){
		if( window.innerWidth > 768 ){
			$(".block > div").height( $(".block > img").height() );
		}
		else{
			$(".block > div").css( "height", "inherit" );	
		}
	}

	$(".menu-icon a").click(function(){
		setTimeout(function(){
			NT3set();
		},500);		
	});


	// collapseMB
	$(".block .collapseMB img , .block .collapseMB p").click(function(){
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