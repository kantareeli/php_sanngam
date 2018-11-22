<?
session_start();
include("../../initial/connect.php");
?>
<form action="gallery_subject.php" name="frmmain">


<?





	 $uploaddir = "../../images/galleryfile/";

	$dsql = "select gpID, gpFileName from gallerypicture  where gaID = '$gaID' ";
	$dstmt = mysql_query($dsql) or die("Query failed sqlpicture    : ".mysql_error());
	while ($row = mysql_fetch_array($dstmt)) {

		$gpID= $row[0];
		$gpFileName= $row[1];

		unlink($uploaddir.$gpFileName);
			$sql = "DELETE  from gallerypicture  where gpID = '$gpID' ";
			//echo $sql;
			$stmt =   mysql_query($sql);
			$s =mktime();
	}


?>

<?
	$sql2 = "DELETE from  galleryalbum WHERE gaID  = '$gaID' ";
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