<?
session_start();
include("../../initial/connect.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<BR><BR><BR><BR><BR>
<CENTER>กำลัง Update ฐานข้อมูล กรุณารอสักครู่</CENTER>
<FORM action="gallery_view.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
	$sql = "UPDATE galleryalbum  SET gaHilight='$gpID' where gaID = '$gaID'";
	//echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();
?>

	<input type = "hidden" name = "gaID" value = '<? echo $gaID ?>'>
</form>
<BODY>
<script language = "javascript">
	frmmain.submit();		
</script>
