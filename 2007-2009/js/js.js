$(document).ready(function(){

	// Some browser hax0rz
		if ($.browser.msie) {
			$("body, html").css("background-image", "none");
			$("#Banner img").attr("src", "images/template/header.ie.png");
			$("#ContentContainer").css("background-image", "../images/template/bg.ie.png");
			$("#Footer img").attr("src", "images/template/footer.ie.png");
		}

	// Makes current link in navigation styled
		var URL = unescape(location.href)
		var xstart = URL.lastIndexOf("/") + 1
		var xend = URL.lastIndexOf("?")
		if (xend == -1)
			var xend = URL.length
		var filename = URL.substring(xstart,xend)

		if (filename == '')
			filename = 'index.php';

		currentpagelink = "li[a[@href="+filename+"]]";
		$(currentpagelink).css("background-color", "#bbb");

	// ColourChanger. url.html?color=000000 (hex code)
		function getQueryVariable(variable) {
			var query = window.location.search.substring(1);
			var vars = query.split("&");
			for (var i=0;i<vars.length;i++) {
				var pair = vars[i].split("=");
				if (pair[0] == variable)
					return pair[1];
			}
		}

		color = getQueryVariable('color');
		if (color)
		{
			colorchange = "#" + color;
			$("body, html").css("background-color", colorchange);
			if ((color == 'fff') || (color == 'ffffff') || (color == 'white'))
				$("#Credits, #Credits a").css("color", "#999");
		}

		$("a").click(function(){
			if (color)
			{
				linkhref = $(this).attr("href");
				newhref = linkhref + '?color=' + color;
				$(this).attr("href", newhref);
			}
		});
});