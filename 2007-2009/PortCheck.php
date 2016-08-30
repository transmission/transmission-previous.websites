<?php
	function lookup_port($port, $ip)
	{
		$fp = @fsockopen($ip, $port, $errno, $errstr, 4);
		if (!$fp)
			$data = 0;
		else
		{
			$data = 1;
			fclose($fp);
		}
		return $data;
	}

	if (!empty($_GET['port']))
		echo lookup_port($_GET['port'], $_SERVER['REMOTE_ADDR']);
?>