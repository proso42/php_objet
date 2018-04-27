<?php
	function	print_color($str, $color)
	{
		if ($color == "green")
			echo "\x1b[32m\x1b[01m" . $str . "\x1b[37m\x1b[0m";
		else if ($color == "red")
			echo "\x1b[31m\x1b[01m" . $str . "\x1b[37m\x1b[0m";
		else if ($color == "blue")
			echo "\x1b[34m\x1b[01m" . $str . "\x1b[37m\x1b[0m";
		else if ($color == "yellow")
			echo "\x1b[33m\x1b[01m" . $str . "\x1b[37m\x1b[0m" ;
		else if ($color == "magenta")
			echo "\x1b[35m\x1b[01m" . $str . "\x1b[37m\x1b[0m";
		else
			echo $str;
	}
?>
