<?php include('includes/header.php'); ?>
				<h1>Documentation</h1>

				<h2>User documentation</h2>
				
				<p>On Mac OS X, use the built in help.</p>
								
				<h2>Identifying Transmission from a tracker or another client</h2>
				
				<p>Versions of Transmission use the format MAJOR.MINOR&lsaquo;MAINTENANCE&rsaquo;, with MAJOR between 0 and 99, MINOR and MAINTENANCE between 0 and 9</p>
				
				<h3>PeerID format</h3>
				
				<p>Starting with 0.70 instead of XXYY for major minor, it's XXYZ for major, minor, maintenance</p>
				
				<p>For instance, 0.70 IDs start with '-TR0070-'.</p>
				
				<h3>User Agent</h3>
				
				<p>Since 0.4, tracker requests include a User-Agent field: 'Transmission/MAJOR.MINOR&lsaquo;MAINTENANCE&rsaquo;'.</p>
				
				<p>For instance, Transmission 0.70 sets 'User-Agent: Transmission/0.70'.</p>
<?php include('includes/footer.php'); ?>