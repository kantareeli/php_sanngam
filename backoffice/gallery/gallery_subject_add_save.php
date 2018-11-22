<?
session_start();
include("../connect/connect_oci.php");
?>
<FORM action="gallery_subject.php" method="post"  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
$daynow=date("Y-m-d H:is");
$gallerysub_subject=addslashes($gallerysub_subject);

$sql_insert="insert into GALLERY_SUBJECT(GALLERYSUB_SUBJECT, GALLERYSUB_DESC, UPDATE_USER, UPDATE_DATE)values ('$gallerysub_subject','$gallerysub_desc','$usernameid','$daynow')";
$result = mysql_query($sql_insert) or die ("Invalid query : " . mysql_error());
if($result){?>
	<input type='hidden' name='countpage' value='<?print  $countpage?>'>
	</form>
<script language = "javascript">
window.location="gallery_subject.php?countpage=<?print$countpage?>";
</script>
<?}else{?>
</form>

<script language = "javascript">
alert("บันทึกข้อมูลไม่สำเร็จ");
window.history.back();
</script>

<?}?>
