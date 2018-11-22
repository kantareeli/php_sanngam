<?
session_start();
include("../../initial/connect.php");
?>
<form action="gallery_view.php?gaID=<?print  $gaID?>" method=post  name= 'frm' id='frm' enctype="multipart/form-data">

<?
	 $uploaddir = "../../images/galleryfile/";

	$dsql = "select gpFileName from gallerypicture  where gpID = '$gpID' ";
	$dstmt = mysql_query($dsql);
	while (mysql_fetch_array($dstmt)) {
		$filename= mysql_result($dstmt, 0,"gpFileName");
		unlink($uploaddir.$filename);
	}

	$sql = "DELETE  from gallerypicture  where gpID = '$gpID' ";
	$stmt =   mysql_query($sql);
	$s =mktime();
?>

<input type='hidden' name='gaID' value='<?print $gaID?>'>

</form>

<script language = "javascript">
	frm.submit();
</script>