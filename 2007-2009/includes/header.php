<?php include('php/main.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Transmission</title>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/rss.xml" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
<?php get_stylesheets(); ?>
		<script type="text/JavaScript" src="js/jquery.js"></script>
		<script type="text/JavaScript" src="js/js.js"></script>
<?php get_javascript(); ?>
	</head>
	<body>
<?php
	if (basename($_SERVER['PHP_SELF']) == 'screenshots.php')
	{
		?>
		<div id="ImageContainer">
			<div id="Image">
				<a href="#">
					<img src="" alt="Screenshot" /><br />
					Click to Close
				</a>
			</div>
		</div>
		<?php
	}
?>
		<div id="Container">
			<div id="Banner">
				<img src="images/template/header.png" alt="Transmission" />
			</div>
			<div id="InnerContainer">
				<div id="Navigation">
					<ul>
						<li>
							<a href="index.php" title="Home">
								Home
							</a>
						</li>
						<li>
							<a href="about.php" title="About">
								About
							</a>
						</li>
						<li>
							<a href="download.php" title="Download">
								Download
							</a>
						</li>
						<li>
							<a href="screenshots.php" title="Screenshots">
								Screenshots
							</a>
						</li>
						<li>
							<a href="resources.php" title="Resources">
								Resources
							</a>
						</li>
						<li>
							<a href="links.php" title="Links">
								Links
							</a>
						</li>
						<li><!-- style="float:right; margin-right: 10px;">-->
							<a href="donate.php" title="Donate">
								Donate
							</a>
						</li>
					</ul>
				</div>
				<div id="Content">
