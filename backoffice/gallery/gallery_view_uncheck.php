<?
session_start();
include("../connect/connect_oci.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#DCEECB">
<BR><BR><BR><BR><BR>
<CENTER>กำลัง Update ฐานข้อมูล กรุณารอสักครู่</CENTER>
<FORM action="gallery_view.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
	$sql = "UPDATE GALLERY  SET GALLERY_HIGHLIGHT='0' where GALLERY_ID = '$gallery_id'";
	$stmt = mysql_query($sql);
	$s =mktime();
?>
	<input type = "hidden" name = "gallerysub_id" value = '<? echo $gallerysub_id ?>'>
	<input type = 'hidden' name = 'countpage' value = '<? echo $countpage ?>'>
</form>
<BODY>
<script language = "javascript">
	frmmain.submit();		
</script>