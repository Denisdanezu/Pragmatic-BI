<?php
// 
// put this code on every php page in your site
// include "visitTrack/visitTrack.php";
//


$ip_address = $_SERVER["REMOTE_ADDR"];
$page_name = $_SERVER["SCRIPT_NAME"];
$query_string = $_SERVER["QUERY_STRING"];
$time = date(DATE_ATOM);

//echo $pagename." ## ".$time;

$handle = fopen("visitTrack/stats.txt","a");
fwrite($handle, $ip_address.
	"|".$page_name.
	"|".$query_string.
	"|".$time."\r\n");
fclose($handle);


?>