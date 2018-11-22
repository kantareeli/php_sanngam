<?session_start(); 
if (!isset($adminID)){?>
<script language = "javascript">
//window.location="index.php";
//alert("ss")
</script>
<?}?>

<HTML>
<HEAD>
<TITLE>Beauty Top 9 Clinic</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>
<?
	function getFileExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }


		if 	(isset($mode) && ($mode=="edit")) {	
				include("../../initial/connect.php");
				$sqledit = "select  *  from clinicTop  where Id='$Id'";
				//echo  $sqledit;
				$stmt = mysql_query($sqledit ) or die ("Invalid query sqledit : " . mysql_error());
				while($row = mysql_fetch_array($stmt)){
						$ntittle=$row['ntittle'];
						$ndesc=$row['ndesc'];
						$nPicture=$row['nPicture'];
				}


		}
		if (isset($modesave) && ($modesave=="ADDTEXT")) {	
				if ($albumname=="" || $albumdesc==""){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$sqlB = "select  max(gaOrder) AS MAXgaOrder    from clinicTop "; 
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$MAXgaOrder=$rowB['MAXgaOrder'];
					}
					$MAXgaOrder++;

					$daynow=date("Y-m-d");
					$sql_insert="Insert Into  clinicTop  (ntittle,  ndesc, AdminID, lastUpdate, gaOrder)Values('$albumname', '$albumdesc', '$adminID', '$daynow', '$MAXgaOrder')";
					//echo  $sql_insert;
					$resultinsert = mysql_db_query($database,$sql_insert);
							if ($resultinsert){
						//start ถ้ามีถาพ
									if(isset($imgfile) AND $imgfile<>''){
													$pext = getFileExtension($imgfile_name);
													$pext = strtolower($pext);
													if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
														<script language = "javascript">
															alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
															window.history.back();
														</script> 
												<?}else{
														$uploaddir = "../../images/clinicTopfile/";
														//To creat filename 
															$sqlLAST_ID = "select  max(Id) LAST_ID from clinicTop";
															$rs = mysql_query($sqlLAST_ID) or die("Query failed sqlLAST_ID    : ".mysql_error());
															while($row=mysql_fetch_array($rs)) { $LAST_ID= $row[LAST_ID];}
															$filesavename=$LAST_ID.'newspict.'.$pext;
														//End creat filename 

														$newfile2 = $uploaddir.$filesavename;
														echo  $newfile2;
					
														if (copy($imgfile,"$newfile2")) {
																//Update Database
																$sql_update="update  clinicTop set nPicture='$filesavename' where Id='$LAST_ID'";
																//echo  $sql_insert;
																$result = mysql_db_query($database,$sql_update);
																if ($result){?>
																		<script language = "javascript">
																					window.location="ann_main.php";
																		</script>		<?
																//END Update Database;
																}
														}
												 }
									}
						//End ถ้ามีภาพ
												?>
																		<script language = "javascript">
																					window.location="ann_main.php";
																		</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}

				}

		}else	if (isset($modesave) && ($modesave=="EDITTEXT")) {	
				if ($albumname=="" || $albumdesc==""){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$daynow=date("Y-m-d");
					$sql_update = "update clinicTop set ntittle='$albumname',  ndesc='$albumdesc', lastUpdate='$daynow', AdminID='$adminID' where Id='$Id'";
					//echo  $sql_update;
					$resultupdate = mysql_db_query($database,$sql_update);
							if ($resultupdate){
						//start ถ้ามีถาพ
									if(isset($imgfile) AND $imgfile<>''){
													$pext = getFileExtension($imgfile_name);
													$pext = strtolower($pext);
													if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
														<script language = "javascript">
															alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
															window.history.back();
														</script> 
												<?}else{
														$uploaddir = "../../images/clinicTopfile/";
														//To creat filename 
															$filesavename=$Id.'newspict.'.$pext;
														//End creat filename 

														$newfile2 = $uploaddir.$filesavename;
														echo  $newfile2;
					
														if (copy($imgfile,"$newfile2")) {
																//Update Database
																$sql_update="update  clinicTop set nPicture='$filesavename' where Id='$Id'";
																//echo  $sql_insert;
																$result = mysql_db_query($database,$sql_update);
																if ($result){?>
																		<script language = "javascript">
																					window.location="ann_main.php";
																		</script>		<?
																//END Update Database;
																}
														}
												 }
									}
						//End ถ้ามีภาพ
						?>
																		<script language = "javascript">
																					window.location="ann_main.php";
																		</script>		<?

							}else{
									echo "Unsuccess : ".mysql_error();
							}
				}
		} else {
?>
<BODY  topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<form action="" name="frmmain" id="frmmain" method="post" enctype="multipart/form-data">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#DCEECB" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->


<TABLE>
<TR>
	<TD>
<A HREF="ann_main.php">	กลับหน้าหลัก</A>
	
	</TD>
</TR>
<TR>
	<TD align="center">
	<?
					if (!isset($ntittle))$ntittle=""; 
					if (!isset($ndesc))$ndesc=""; 
					if (!isset($nPicture))$nPicture=""; 
	?>

	<TABLE cellpadding="0" cellspacing="0" border="0" width="90%">
	<TR>
		<TD width=200>หัวข้อ : </TD>
		<TD><INPUT TYPE="text" NAME="albumname" size=50  value="<?=$ntittle?>"></TD>
	</TR>
	<TR>
		<TD>รายละเอียด : </TD>
		<TD valign="middle">	
		<!--Start Font Edit Tool -->
<script language="JavaScript" type="text/javascript" src="../manage/fontedit.js"></script>
<script language = "javascript">
		var smf_images_url = "../images";
		var smf_iso_case_folding = false;
		var smf_charset = "UTF-8";
function bbc_highlight(something, mode){
				something.style.backgroundImage = "url(" + smf_images_url + (mode ? "/bbc/bbc_hoverbg.gif)" : "/bbc/bbc_bg.gif)");
}
	
	</script>
		<a href="javascript:void(0);" onClick="surroundText('<b>', '</b>', document.forms.frmmain.albumdesc); return false;">
<img onMouseOver="bbc_highlight(this, true);" 	onMouseOut="if (window.bbc_highlight) bbc_highlight(this, false);" 	src="../images/bbc/bold.gif" 	align="bottom" width="23" height="22" alt="ตัวหนา" title="ตัวหนา" 	style="background-image: url(../images/bbc/bbc_bg.gif); 
	margin: 1px 2px 1px 1px;"  border="0" /></a>
	<a href="javascript:void(0);" onClick="surroundText('<em>', '</em>', document.forms.frmmain.albumdesc); return false;">
	<img onMouseOver="bbc_highlight(this, true);" onMouseOut="if (window.bbc_highlight) bbc_highlight(this, false);" src="../images/bbc/italicize.gif" align="bottom" width="23" height="22" alt="ตัวเอียง" title="ตัวเอียง" style="background-image: url(../images/bbc/bbc_bg.gif); margin: 1px 2px 1px 1px;" border="0" /></a>
	
	&nbsp;
	<select onChange="surroundText('<font size='+this.options[this.selectedIndex].value+'>', '</font>', document.frmmain.albumdesc); this.selectedIndex = 0;" style="margin-bottom: 1ex;">

							<option value="" selected="selected">ขนาดตัวอักษร</option>

							<option value="x-small">เล็กมาก</option>

							<option value="small">เล็ก</option>

							<option value="medium">ปกติ</option>

							<option value="large">ใหญ่</option>

							<option value="x-large">ใหญ่มาก</option>

						</select> <select onChange="surroundText('<font color=' + this.options[this.selectedIndex].value.toLowerCase() + '>', '</font>', document.forms.frmmain.albumdesc); this.selectedIndex = 0; document.forms.frmmain.albumdesc.focus(document.forms.frmmain.albumdesc.caretPos);" style="margin-bottom: 1ex;">

							<option value="" selected="selected">เปลี่ยนสี</option>

							<option value="Black" style="color:black;">สีดำ/ขาว</option>

							<option value="Red" style="color:red;">สีแดง</option>

							<option value="Yellow" style="color:yellow;">สีเหลือง</option>

							<option value="Pink" style="color:pink;">สีชมพู</option>

							<option value="Green" style="color:green;">สีเขียว</option>

							<option value="Orange" style="color:orange;">สีส้ม</option>

							<option value="Purple" style="color:purple;">สีม่วง</option>

							<option value="Blue" style="color:blue;">สีนํ้าเงิน/ฟ้า</option>

							<option value="Gray" style="color:gray;">สีเทา</option>

							<option value="Brown" style="color:brown;">สีน้ำตาล</option>

							<option value="Teal" style="color:teal;">สีเขียวฟ้า</option>

							<option value="Navy" style="color:navy;">สีกรมท่า</option>

							<option value="Maroon" style="color:maroon;">สีเลือดนก</option>

							<option value="LimeGreen" style="color:limegreen;">สีเหลืองอมเขียว</option>

						</select>
	<!--End Font Edit Tool -->
		<br><TEXTAREA NAME="albumdesc" ROWS="20" COLS="100"><?=$ndesc?></TEXTAREA></TD>
	</TR>
	<TR>
		<TD>ภาพประกอบ :</TD>
		<TD><IMG name="upload_img" SRC="../../images/clinicTopfile/<?=$nPicture?>" WIDTH="160" HEIGHT="120"  BORDER="1" ALT="Image Sample" >Click browse to upload a local file :<br><input type="file" name="imgfile" onchange = "getimg()" style="cursor:hand" size="50"><input type="hidden" name="MAX_FILE_SIZE" value=""></TD>
	</TR>
	<TR>
		<TD colspan=2>	<INPUT TYPE="submit" value="<?=$mode?>"  <?if($mode<>'edit') {?>onclick="addsave()" <?}else{?> onClick="editsave()" <?}?>></TD>
	</TR>
	</TABLE>
	<CENTER><BR>
                       
	</CENTER>
	
	</TD>
</TR>
</TABLE>
<input type='hidden' name='modesave' >
<input type='hidden' name='Id'  value=<?=$Id?>>
<input type='hidden' name='Id'  value=<?=$Id?>>
<input type='hidden' name='mode' value=<?=$mode?> >
</form>
</BODY>
</HTML>
<SCRIPT LANGUAGE="JavaScript">
function addsave(){
			frmmain.modesave.value = 'ADDTEXT';
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function editsave(){
			frmmain.modesave.value = 'EDITTEXT';
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function getimg(){
		frmmain.upload_img.src = frmmain.imgfile.value ;
	}


</SCRIPT>
<?}?>