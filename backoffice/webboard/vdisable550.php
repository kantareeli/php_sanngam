<?
include("../../initial/connect.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<BR><BR><BR><BR><BR>
<CENTER>กำลัง Update ฐานข้อมูล กรุณารอสักครู่</CENTER>

<?
echo $gaID." : ".$value;
	$sql = "UPDATE wb_topic  SET Enable='$value' where tpID < 550 ";
	echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();
?>




<BODY>

