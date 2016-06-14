$(document).ready(function(){

	// NT2
	setTimeout(function(){
		NT2set();
	});
	$(window).resize(function(){
		NT2set();
	});

	function NT2set(){
		$("#day .L15").height( $("#day .L85").height() );
		$("#night .L15").height( $("#night .L85").height() );

		var h = $("#detail2 .L50").eq(0).height() > $("#detail2 .L50").eq(1).height() ? $("#detail2 .L50").eq(0).height() : $("#detail2 .L50").eq(1).height();
		//$("#detail2 .L50").height( h );
	}
	$(".menu-icon a").click(function(){
		setTimeout(function(){
			NT2set();
		},500);		
	});

	// collapseMB
	var collapse2 = true;
	$("#day .collapseMB img , #day .collapseMB p").click(function(){
		if( collapse2 ){
			$("#day .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#day .content").addClass("close");
			$("#day .collapseMB h3").css("display", "none");
		}
		else{
			$("#day .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#day .content").removeClass("close");
			$("#day .collapseMB h3").css("display", "block");
		}
		collapse2 = !collapse2;
	});

	var collapse3 = true;
	$("#air .collapseMB img , #air .collapseMB p").click(function(){
		if( collapse3 ){
			$("#air .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#air .text").addClass("close");
			$("#air .collapseMB h3").css("display", "none");
		}
		else{
			$("#air .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#air .text").removeClass("close");
			$("#air .collapseMB h3").css("display", "block");
		}
		collapse3 = !collapse3;
	});

	var collapse4 = true;
	$("#night .collapseMB img , #night .collapseMB p").click(function(){
		if( collapse4 ){
			$("#night .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#night .content").addClass("close");
			$("#night .collapseMB h3").css("display", "none");
		}
		else{
			$("#night .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#night .content").removeClass("close");
			$("#night .collapseMB h3").css("display", "block");
		}
		collapse4 = !collapse4;
	});

	var collapse5 = true;
	$("#detail .collapseMB img , #detail .collapseMB p").click(function(){
		if( collapse5 ){
			$("#detail .collapseMB img:first-child").attr("src", "images/NT1/collapse.png");
			$("#detail .intro2").addClass("close");
			$("#detail2 .L50").addClass("close");
		}
		else{
			$("#detail .collapseMB img:first-child").attr("src", "images/NT1/collapse2.png");
			$("#detail .intro2").removeClass("close");
			$("#detail2 .L50").removeClass("close");
		}
		collapse5 = !collapse5;
	});
});