<?
session_start();
include("../../initial/connect.php");
?>
<form action="ann_main.php" name="frmmain">


<?
	$uploaddir = "../../images/tipsfile/";
	$dsql = "select nPicture from tips  where Id = '$Id' ";
	$dstmt = mysql_query($dsql) or die("Query failed sqlpicture    : ".mysql_error());
	while ($row = mysql_fetch_array($dstmt)) {
		$nFileName= $row['nPicture'];
		unlink($uploaddir.$nFileName);
	}
?>

<?
	$sql2 = "DELETE from  tips WHERE Id  = '$Id' ";
	//echo $sql2;
	$stmt2 = mysql_query($sql2 ) or die  ("Invalid query 1 : " . mysql_error());

	/*$sql = "DELETE from  GALLERY_SUBJECT     where GALLERYSUB_ID = '$code' ";
	$stmt = mysql_query($sql );
	$s =mktime();*/
?>


</form>
<script language = "javascript">
	frmmain.submit();
</script>