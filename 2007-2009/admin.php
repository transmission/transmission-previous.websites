<?php include('php/main.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Transmission</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="stylesheet" type="text/css" href="styles/admin.css" />
		<script type="text/JavaScript" src="js/jquery.js"></script>
		<script type="text/JavaScript" src="js/js.js"></script>
	</head>
	<body>
		<div id="Container">
			<div id="Banner">
				<img src="images/template/header.png" alt="Transmission" />
			</div>
			<div id="InnerContainer" style="">
				<div id="Content">
					<h1>Transmission Administration Area</h1>
<?php echo generate_admin_page($_GET['action']); ?>

				</div>
			</div>
			<div id="Footer">
				<img src="images/template/footer.png" alt="" />
			</div>
			<div id="Credits">
				&copy; Copyright Transmission 2005 - 2008, All Rights Reserved | 
				<a href="http://www.creadevstudios.com/" title="Creadev Studios">
					Design by Creadev Studios</a>, 
				<a href="http://www.nilok.ca/" title="Nilok Productions">
					Coding by Nilok Productions
				</a>
			</div>
		</div>
	</body>
</html>