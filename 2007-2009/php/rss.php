<?php
	function generate_rss()
	{
		$start = '<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
	<channel>
		<title>Transmission News</title>
		<link>http://www.transmissionbt.com</link>
		<description>Transmission News</description>';

		$middleFormat = '
		<item>
			<title>[TITLE]</title>
			<link>http://www.transmissionbt.com</link>
			<description>[TEXT]</description>
			<pubDate>[DATE]</pubDate>
			<guid isPermaLink="false">http://www.transmissionbt.com/index.php?post=[POSTID]</guid>
		</item>';

		$end = '
	</channel>
</rss>';

		$start = str_replace('[BUILDDATE]', date('D, d M Y H:i:s O'), $start);


		foreach (get_unformatted_posts() as $id => $post)
		{
			$formatPost = str_replace('[TITLE]', htmlspecialchars($post['title']), $middleFormat);
			$formatPost = str_replace('[TEXT]', htmlspecialchars(parse_text($post['body'])), $formatPost);
			$formatPost = str_replace('[DATE]', date('D, d M Y H:i:s O', substr($post['realdate'], 6)), $formatPost);
			$formatPost = str_replace('[POSTID]', $id, $formatPost);

			$middle .= $formatPost;
			unset($formatPost);
		}

		return $start.$middle.$end;
	}

	function write_rss($rssfile, $rss)
	{
		return file_put_contents($rssfile, $rss);
	}
?>
