<?php
	require 'updatefile.html';
	
	$updateString = $_GET["Text1"];
	$myfile = fopen('./Resources/thefile.txt', 'a') or die('Cant open file');
	fwrite($myfile, $updateString);
	fwrite($myfile, "\r\n \r\n");
	fclose($myfile);
?>