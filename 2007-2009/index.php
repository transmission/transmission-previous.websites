<?php include('includes/header.php'); ?>

<p>Transmission is a fast, easy, and free multi-platform BitTorrent client. &raquo; <a href="about.php">Learn More</a></p>

				<h1>News</h1>
				<div style="padding-left: 20px">
<?php echo generate_page($_GET['page'], max_posts); ?>
				</div>
<?php include('includes/footer.php'); ?>
