<?php
	function parse_text($str)
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
?>