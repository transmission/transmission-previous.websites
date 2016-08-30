<?php
	/*
	 * Code is © Copyright Transmission 2007, All Rights Reserved
	 * Written by: Malcolm Jarvis (gimp@nilok.ca) from http://www.nilok.ca
	 */


	// Configurable items. (feel free to change anything here)

	define("max_posts",		5);	// number of posts to appear on each page
	define("site_dir",		'/www/www.transmissionbt.com/old'); // absolute location of the site.

	$mysql['server']	=	'localhost'; // server for mysql database
	$mysql['user']		=	'transmission'; // login user for mysql database
	$mysql['password']	=	'uUtmMTXEPvp2bnQx'; // password for mysql database
	$mysql['database']	=	'transmission'; // mysql database in which the posts and users are located

	// The next few settings you MIGHT need to change, but chances are you won't

	define("users_table",	'tmismain_users'); // mysql table in which the users are kept
	define("posts_table",	'tmismain_posts'); // mysql table in which the news posts are kept

	define("pagination",	'page'); // GET action for pagination (index.php?page=1)
	define("adminpages",	'action'); // GET action for admin pages (admin.php?action=login)




	// Do NOT change anything below this line unless you know what you're doing.

	session_start();
	mysql_connect($mysql['server'], $mysql['user'], $mysql['password']);
	mysql_select_db($mysql['database']);

	include(site_dir.'/php/bbcode.php');
	include(site_dir.'/php/adminfunctions.php');
	include(site_dir.'/php/mainfunctions.php');
	include(site_dir.'/php/rss.php');

	// PUPPIES!!!1111ONEONESHIFTone!!!11
	if (!empty($_GET['puppies']))
		puppies($_GET['puppies']);

	// Unversal functions (used in both client area and admin area)

	function get_poster($id)
	{
		$id = (int) $id;
		$result = mysql_query("SELECT `login` FROM `". users_table ."` WHERE `id`='{$id}'");
		$row = mysql_fetch_row($result);
		return $row[0];
	}

	function get_pagination($currpage, $admin = 'index.php?')
	{
		$numpages = (int) ceil(get_num_posts()/max_posts);
		if ($numpages > 1)
		{
			for ($i = 1; $i <= $numpages; $i++)
			{
				$realpage = $i-1;
				if ($realpage != $currpage)
					$pages .= '<a href="'. $admin . pagination .'=' . $realpage . '">' . $i . '</a> ';
				else
					$pages .= '<span style="font-weight: bold">'.$i.'</span> ';
			}
			$pagination = '<div id="Pages">Choose a Page: '.$pages.'</div>';
		}
		return $pagination;
	}

	function get_num_posts()
	{
		$result = mysql_query("SELECT COUNT(0) FROM `". posts_table ."`");
		$num = mysql_fetch_row($result);
		return $num[0];
	}

	function get_stylesheets()
	{
		$page = basename($_SERVER['PHP_SELF'], ".php");
		echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/". $page .".css\" />\n";
	}

	function get_javascript()
	{
		$page = basename($_SERVER['PHP_SELF'], ".php");
		echo "\t\t<script type=\"text/JavaScript\" src=\"js/". $page .".js\"></script>\n";
	}
?>
