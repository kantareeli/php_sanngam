<?
session_start();
include("../connect/connect_oci.php");
?>
<FORM action="gallery_subject.php" method="post"  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
$daynow=date("Y-m-d H:is");
$gallerysub_subject=addslashes($gallerysub_subject);
$gallerysub_desc=addslashes($gallerysub_desc);

$sql_update = "UPDATE GALLERY_SUBJECT  SET  GALLERYSUB_SUBJECT='$gallerysub_subject', UPDATE_USER='$usernameid', GALLERYSUB_DESC='$gallerysub_desc', UPDATE_DATE='$daynow'  WHERE  GALLERYSUB_ID = '$gallerysub_id' ";
$result = mysql_query($sql_update) or die ("Invalid query : " . mysql_error());

if($result ){?>
<input type='hidden' name='countpage' value='<?print $countpage?>'>
</form>
<script language = "javascript">
window.location="gallery_subject.php?countpage=<?print$countpage?>";
</script>
<?}else{?>
<script language = "javascript">
alert("บันทึกข้อมูลไม่สำเร็จ");
window.history.back();
</script>
<?}?>
