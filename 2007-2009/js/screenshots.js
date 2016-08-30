$(document).ready(function(){
	$("#Content a").click(function() {
		link = this;
		$("#Container").slideToggle("slow", function(){
			$("#Image img").attr("src", $(link).attr("href"));
			$("#Image").fadeIn("slow");
		});
		return false;
	});

	$("#Image a").click(function() {
		$("#Image").fadeOut("slow", function(){
			$("#Container").slideToggle("slow");
		});
		return false;
	});
});