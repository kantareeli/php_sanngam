<?
session_start();
include("../connect/connect_oci.php");
?>
<FORM action="gallery_view.php?countpage=<?print  $countpage?>&gallerysub_id=<?print $gallerysub_id?>" method="post"  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
$daynow=date("Y-m-d H:is");
$gallery_title=addslashes($gallery_title);

$sql_update = "UPDATE GALLERY  SET  GALLERY_TITLE='$gallery_title', UPDATE_DATE='$daynow'  WHERE  GALLERY_ID = '$gallery_id' ";
$result = mysql_query($sql_update) or die ("Invalid query : " . mysql_error());

if($result){?>
<input type='hidden' name='countpage' value='<?print $countpage?>'>
<input type="hidden" name="gallerysub_id" value="<?print $gallerysub_id?>">
</form>
<script language = "javascript">
window.location="gallery_view.php?countpage=<?print  $countpage?>&gallerysub_id=<?print $gallerysub_id?>";
</script>
<?}else{?>
<script language = "javascript">
alert("บันทึกข้อมูลไม่สำเร็จ");
window.history.back();
</script>
<?}?>
