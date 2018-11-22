<FORM action="gallery_subject.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?

include("connect_oci.php");
	$sql = "UPDATE gallery_subject  SET gallerysub_highlight='0' where gallerysub_id = '$gallerysub_id'";
	$stmt = ociparse($conn,$sql);
	ociexecute($stmt,OCI_DEFAULT);
	ocicommit($conn);
	ocilogoff();
	$s =mktime();
?>
	<input type = "hidden" name = "gallerysub_id" value = '<? echo $gallerysub_id ?>'>
	<input type = 'hidden' name = 'countpage' value = '<? echo $countpage ?>'>
</form>

<script language = "javascript">
	frmmain.submit();		
</script>