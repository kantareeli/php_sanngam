<?
//$hostname = "203.150.225.135";
	$hostname = "localhost";
	$database = "sanngam";
	$username = "sanngam";
	$password = "1234";
	$conn = mysql_connect($hostname, $username, $password) or die(mysql_error());
	mysql_select_db($database) or die("DB Selection error : " . mysql_error());
?>
