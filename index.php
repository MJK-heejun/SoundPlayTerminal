<?php
	$track_num = $_GET["track_num"];
	$client_id = $_GET["client_id"];

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET');
	header('Content-Type: audio/mpeg');				
	readfile("http://api.soundcloud.com/tracks/".$track_num."/stream?client_id=".$client_id);
?>		