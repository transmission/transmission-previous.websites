<?php
	/**
	 * Leaving this in for awhile in case some bug shows up in parse_text
	 */
	function parse_text_old($str)
	{
		$str = htmlspecialchars($str);
		$str = nl2br($str);
		$str = preg_replace('#\[color=(.+?)\](.+?)\[/color\]#msi', '<span style="color: \\1">\\2</span>', $str);
		$str = preg_replace('#\[img\](.+?)\[/img\]#msi', '<img src="\\1" alt="" />', $str);
		$str = preg_replace('#\[b\](.+?)\[/b\]#msi', '<span style="font-weight: bold;">\\1</span>', $str);
		$str = preg_replace('#\[i\](.+?)\[/i\]#msi', '<span style="font-style: italic;">\\1</span>', $str);
		$str = preg_replace('#\[u\](.+?)\[/u\]#msi', '<span style="text-decoration: underline;">\\1</span>', $str);
		$str = preg_replace('#\[url\](.+?)\[/url\]#msi', '<a href="\\1" target="_blank">\\1</a>', $str);
		$str = preg_replace('#\[code\](.+?)\[/code\]#msi', '<pre class="code">\\1</pre>', $str);
		$str = preg_replace('#\[url=(.+?)\](.+?)\[/url\]#msi', '<a href="\\1" target="_blank">\\2</a>', $str);
		$str = preg_replace('#\[edit\](.+?)\[/edit\]#msi', '<span class="Edited">[\\1]</span>', $str);
		$str = wordwrap($str, 80, "\n", 1);
		return $str;
	}

	/**
	 * http://smarty.incutio.com/?page=BBCodePlugin
	 * Name:       bbcode2html
	 * Author:     Andre Rabold
	 * Version:    1.4
	 */
	function parse_text($message)
	{
	  $preg = array(
		'/(?<!\\\\)\[color(?::\w+)?=(.*?)\](.*?)\[\/color(?::\w+)?\]/si'   => "<span style=\"color:\\1\">\\2</span>",
		'/(?<!\\\\)\[size(?::\w+)?=(.*?)\](.*?)\[\/size(?::\w+)?\]/si'     => "<span style=\"font-size:\\1\">\\2</span>",
		'/(?<!\\\\)\[font(?::\w+)?=(.*?)\](.*?)\[\/font(?::\w+)?\]/si'     => "<span style=\"font-family:\\1\">\\2</span>",
		'/(?<!\\\\)\[align(?::\w+)?=(.*?)\](.*?)\[\/align(?::\w+)?\]/si'   => "<div style=\"text-align:\\1\">\\2</div>",
		'/(?<!\\\\)\[b(?::\w+)?\](.*?)\[\/b(?::\w+)?\]/si'                 => "<span style=\"font-weight:bold\">\\1</span>",
		'/(?<!\\\\)\[i(?::\w+)?\](.*?)\[\/i(?::\w+)?\]/si'                 => "<span style=\"font-style:italic\">\\1</span>",
		'/(?<!\\\\)\[u(?::\w+)?\](.*?)\[\/u(?::\w+)?\]/si'                 => "<span style=\"text-decoration:underline\">\\1</span>",
		'/(?<!\\\\)\[center(?::\w+)?\](.*?)\[\/center(?::\w+)?\]/si'       => "<div style=\"text-align:center\">\\1</div>",
		// [code] & [php]
		'/(?<!\\\\)\[code(?::\w+)?\](.*?)\[\/code(?::\w+)?\]/si'           => "<div class=\"bb-code\">\\1</div>",
		'/(?<!\\\\)\[php(?::\w+)?\](.*?)\[\/php(?::\w+)?\]/si'             => "<div class=\"bb-php\">\\1</div>",
		// [email]
		'/(?<!\\\\)\[email(?::\w+)?\](.*?)\[\/email(?::\w+)?\]/si'         => "<a href=\"mailto:\\1\" class=\"bb-email\">\\1</a>",
		'/(?<!\\\\)\[email(?::\w+)?=(.*?)\](.*?)\[\/email(?::\w+)?\]/si'   => "<a href=\"mailto:\\1\" class=\"bb-email\">\\2</a>",
		// [url]
		'/(?<!\\\\)\[url(?::\w+)?\]www\.(.*?)\[\/url(?::\w+)?\]/si'        => "<a href=\"http://www.\\1\" target=\"_blank\" class=\"bb-url\">\\1</a>",
		'/(?<!\\\\)\[url(?::\w+)?\](.*?)\[\/url(?::\w+)?\]/si'             => "<a href=\"\\1\" target=\"_blank\" class=\"bb-url\">\\1</a>",
		'/(?<!\\\\)\[url(?::\w+)?=(.*?)?\](.*?)\[\/url(?::\w+)?\]/si'      => "<a href=\"\\1\" target=\"_blank\" class=\"bb-url\">\\2</a>",
		// [img]
		'/(?<!\\\\)\[img(?::\w+)?\](.*?)\[\/img(?::\w+)?\]/si'             => "<img src=\"\\1\" alt=\"\\1\" class=\"bb-image\" />",
		'/(?<!\\\\)\[img(?::\w+)?=(.*?)x(.*?)\](.*?)\[\/img(?::\w+)?\]/si' => "<img width=\"\\1\" height=\"\\2\" src=\"\\3\" alt=\"\\3\" class=\"bb-image\" />",
		// [quote]
		'/(?<!\\\\)\[quote(?::\w+)?\](.*?)\[\/quote(?::\w+)?\]/si'         => "<div>Quote:<div class=\"bb-quote\">\\1</div></div>",
		'/(?<!\\\\)\[quote(?::\w+)?=(?:&quot;|"|\')?(.*?)["\']?(?:&quot;|"|\')?\](.*?)\[\/quote\]/si'   => "<div>Quote \\1:<div class=\"bb-quote\">\\2</div></div>",
		// [list]
		'/\n/' => "<br/>", // added for transmissionbt.com... if we upgrade bbcode2html we'll probably need to re-add this line
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[\*(?::\w+)?\](.*?)(?=(?:\s*<br\s*\/?>\s*)?\[\*|(?:\s*<br\s*\/?>\s*)?\[\/?list)/si' => "\n<li class=\"bb-listitem\">\\1</li>",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[\/list(:(?!u|o)\w+)?\]\s*(?:<br\s*\/?>)?/si'    => "\n</ul>",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[\/list:u(:\w+)?\](?:<br\s*\/?>)?/si'         => "\n</ul>",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[\/list:o(:\w+)?\](?:<br\s*\/?>)?/si'         => "\n</ol>",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(:(?!u|o)\w+)?\]\s*(?:<br\s*\/?>)?/si'   => "\n<ul class=\"bb-list-unordered\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list:u(:\w+)?\]\s*(?:<br\s*\/?>)?/si'        => "\n<ul class=\"bb-list-unordered\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list:o(:\w+)?\]\s*(?:<br\s*\/?>)?/si'        => "\n<ol class=\"bb-list-ordered\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(?::o)?(:\w+)?=1\]\s*(?:<br\s*\/?>)?/si' => "\n<ol class=\"bb-list-ordered,bb-list-ordered-d\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(?::o)?(:\w+)?=i\]\s*(?:<br\s*\/?>)?/s'  => "\n<ol class=\"bb-list-ordered,bb-list-ordered-lr\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(?::o)?(:\w+)?=I\]\s*(?:<br\s*\/?>)?/s'  => "\n<ol class=\"bb-list-ordered,bb-list-ordered-ur\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(?::o)?(:\w+)?=a\]\s*(?:<br\s*\/?>)?/s'  => "\n<ol class=\"bb-list-ordered,bb-list-ordered-la\">",
		'/(?<!\\\\)(?:\s*<br\s*\/?>\s*)?\[list(?::o)?(:\w+)?=A\]\s*(?:<br\s*\/?>)?/s'  => "\n<ol class=\"bb-list-ordered,bb-list-ordered-ua\">",
		// escaped tags like \[b], \[color], \[url], ...
		'/\\\\(\[\/?\w+(?::\w+)*\])/'                                      => "\\1"
		);
		return preg_replace(array_keys($preg), array_values($preg), $message);
	}
?>
