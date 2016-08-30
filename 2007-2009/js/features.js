$(document).ready(function(){
	$(".hidden").css("display","none");
	$(".hidden2").css("display","none");

	$("#Content a.macosx").click(function(){
		$(".hidden:visible").slideUp("fast");
		$(".hidden2:visible").slideUp("fast");
		thisone = "#"+$(this).attr("class")+":hidden";
		$(thisone).slideDown("fast");
		return false;
	});

	$("#Content a.beos").click(function(){
		$(".hidden:visible").slideUp("fast");
		thisone = "#"+$(this).attr("class")+":hidden";
		$(thisone).slideDown("fast");
		return false;
	});

	$("#Content ul li ul li a").click(function(){
		$("ul li ul li.hidden2:visible").slideUp("fast");
		thisone = "#"+$(this).attr("class")+":hidden";
		$(thisone).slideDown("fast");
		return false;
	});

});