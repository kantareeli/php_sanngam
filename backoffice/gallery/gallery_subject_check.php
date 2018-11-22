<FORM action="gallery_subject.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
include("connect_oci.php");

$sql1 = "select count(*) as countit from GALLERY_SUBJECT  where GALLERY_HIGHLIGHT= '1'  ";
$stmt1 = mysql_query($sql1);
$detailhead = stripslashes($detailhead);	

while (mysql_fetch_array($stmt1)) {
		$countrow = mysql_result($stmt1, 0,"COUNTIT");	
	}

if ($countrow >=3){

			print "<CENTER><BR><BR><BR><BR><BR>จำกัด หัวข้อภาพ Gallery  เพียง 3 ภาพ<br>";
			print "<p>คุณได้เลือกหัวข้อที่เป็น Highlight ครบแล้ว<br>";
			print "<a href=gallery_subject.php> Return to Gallery  </a>  </p>\n</CENTER>" ;
			exit();	

			$s =mktime();
	
}else{

	$sql = "UPDATE GALLERY_SUBJECT  SET GALLERY_HIGHLIGHT= '1' where GALLERYSUB_ID = '$gallerysub_id'";
	$stmt = mysql_query($sql);
	$s =mktime();
}
	
?>

	<input type = "hidden" name = "gallerysub_id" value = '<? echo $gallerysub_id ?>'>
	<input type = 'hidden' name = 'countpage' value = '<? echo $countpage ?>'>
</form>

<script language = "javascript">
	frmmain.submit();		
</script>
