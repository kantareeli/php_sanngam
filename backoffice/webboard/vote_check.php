<?
session_start();
include("../../initial/connect.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<BR><BR><BR><BR><BR>
<CENTER>กำลัง Update ฐานข้อมูล กรุณารอสักครู่</CENTER>
<FORM action="main.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
	$sql = "UPDATE tbvote  SET vEnable='0' ";
	//echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();

	$sql = "UPDATE tbvote  SET vEnable='1' where ID = '$gaID'";
	//echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();
?>

</form>
<BODY>
<script language = "javascript">
	frmmain.submit();		
</script>
