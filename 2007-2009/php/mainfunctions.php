<?php
	/*
	 * Code is © Copyright Transmission 2007, All Rights Reserved
	 * Written by: Malcolm Jarvis (gimp@nilok.ca) from http://www.nilok.ca
	 */


	// Do NOT change anything in this file unless you know what you're doing.

	function generate_page($page, $numposts)
	{
		$page = (int) $page;
		foreach(get_posts($page, $numposts) as $post)
			$content .= $post;
		$content .= get_pagination($page);
		return $content;
	}

	function get_posts($page = 0, $numposts = 5)
	{
		$start = (int) ($page*$numposts);
		$end = (int) $numposts;
		$result = mysql_query("SELECT `date`,`title`,`body`,`poster` FROM `". posts_table ."` ORDER BY `realdate` DESC LIMIT {$start},{$end}");
		if (mysql_num_rows($result) > 0)
		{
			while (list($date, $title, $body, $poster) = mysql_fetch_row($result))
				$posts[] = format_post($date, $title, $body, get_poster($poster));
		}
		else
			$posts = array();
		return $posts;
	}

	function format_post($date, $title, $body, $poster)
	{
		return '<div class="PostContainer">
	<div class="PostTitle"><h2>'.htmlspecialchars($title).'</h2></div>
	<div class="PostDate">Posted by <span class="PostPoster">'.htmlspecialchars($poster).'</span> on '.htmlspecialchars($date).'</div>
	<div class="PostBody">'.parse_text($body).'</div>
</div>
';
	}

	function puppies($numpuppies)
	{
	$numpuppes = (int) (($numpuppies <= 600) ? $numpuppies : 600);
		for ($i = 0; $i < $numpuppies; $i++)
			echo "PUPPY!!!!!1111!1!!11one!one!!shiftONE!!<br />\n";
	}
?>