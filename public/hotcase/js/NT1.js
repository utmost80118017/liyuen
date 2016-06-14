$(document).ready(function(){
	
	// collapseMB
	var collapse = true;
	$("#golden1 .collapseMB img , #golden1 .collapseMB p").click(function(){
		if( collapse ){
			$("#golden1 .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$(".down").addClass("close");
			$("#golden1 .collapseMB h3").css("display", "none");
		}
		else{
			$("#golden1 .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$(".down").removeClass("close");
			$("#golden1 .collapseMB h3").css("display", "block");
		}
		collapse = !collapse;		
	});

	var collapse2 = true;
	$("#air .collapseMB img , #air .collapseMB p").click(function(){
		if( collapse2 ){
			$("#air .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#g3Title").addClass("close");
			$("#air .collapseMB h3").css("display", "none");
		}
		else{
			$("#air .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#g3Title").removeClass("close");
			$("#air .collapseMB h3").css("display", "block");
		}
		collapse2 = !collapse2;		
	});

	var collapse3 = true;
	$("#golden4 .collapseMB img , #golden4 .collapseMB p").click(function(){
		if( collapse3 ){
			$("#golden4 .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#g4Title").addClass("close");
			$("#golden4 .collapseMB h3").css("display", "none");
		}
		else{
			$("#golden4 .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#g4Title").removeClass("close");
			$("#golden4 .collapseMB h3").css("display", "block");
		}
		collapse3 = !collapse3;		
	});	

	// setTimeout(function(){
	// 	setHeight();	
	// },1000);
	$(window).load(function(){
		setHeight();
		
		setTimeout(function(){
			$('.cycle').cycle({ 
			    fx:    'fade', 
			    speed:  1500 
			 });
			$('.cycle2').cycle({ 
			    fx:    'fade', 
			    speed:  1500 
			});
		});
	});
	$(window).resize(function(){
		setHeight();
	});
	function setHeight(){
		$(".L25.cycle").height( $(".L25.cycle img").height() );
		$(".L25.cycle2").height( $(".L25.cycle2 img").height() );
		$(".L33.cycle").height( $(".L33.cycle img").height() );
		$(".L50.cycle").height( $(".L50.cycle img").height() );
		$(".L66.cycle").height( $(".L66.cycle img").height() );
	}

	$(".menu-icon a").click(function(){
		setTimeout(function(){
			setHeight();
		},500);		
	});
});