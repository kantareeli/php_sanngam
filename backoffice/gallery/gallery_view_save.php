<?
session_start();
include("../../initial/connect.php");
?>
<form action="gallery_view.php?gaID=<?print$gaID?>" method="POST" enctype="multipart/form-data" name= 'frm' id='frm' >

<?
if (isset($mode) and $mode=="edit"){

		$sql_update = "UPDATE gallerypicture  SET  gpName='$gallery_title', AdminID='$adminID'  WHERE  gpID = '$gpID' ";
		$resultedit = mysql_query($sql_update) or die ("Invalid query : " . mysql_error());

}
if ($REQUEST_METHOD == "POST") 
{
		 $uploaddir = "../../images/galleryfile/";

		//To check File type
		if(isset($imgfile) AND $imgfile<>''){
			$pext = getFileExtension($imgfile_name);
			$pext = strtolower($pext);
			if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  
				?>
				<script language = "javascript">
				alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
				window.history.back();
				</script> 
				<?
			}else{

				//Upload file 
					//To creat filename 
						$sqlLAST_ID = "select  max(gpID) LAST_ID from gallerypicture";
						$rs = mysql_query($sqlLAST_ID) or die("Query failed sqlLAST_ID    : ".mysql_error());
						while($row=mysql_fetch_array($rs)) { 
								$LAST_ID= $row[LAST_ID];
						}
						$LAST_ID++;
						$filesavename=$gaID.'tbc'.$LAST_ID.'.'.$pext;
							 
					//End creat filename 
					$newfile2 = $uploaddir.$filesavename;
					echo  $newfile2;
					
					if (copy($imgfile,"$newfile2")) {

					//Update Database
					$daynow=date("Y-m-d");
					$sql_insert="Insert Into  gallerypicture (gpName,  gpFileName, gaID, AdminID)Values('$gallery_title', '$filesavename', '$gaID','$adminID')";
					//echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){?>
									<script language = "javascript">
										window.location="gallery_view.php?gaID=<?=$gaID?>";
									</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}
					//END Update Database
	
				}else {		
					print ("failed to copy $w_pict...<br>\n");
				}
			
		}
}}
?>



<INPUT TYPE="hidden" NAME="gallerysub_id" value="<?print$gallerysub_id?>">
</form>
<?

    function getFileExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
?>


<SCRIPT LANGUAGE="JavaScript">
<!--
frm.submit();
//-->
</SCRIPT>