<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Profile Detail</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<?

		if 	(isset($mode) && ($mode=="edit")) {	
				include("../../initial/connect.php");
				$sqledit = "select  *  from memberprofile where mpID='$mpID'";
				//echo  $sqledit;
				$stmt = mysql_query($sqledit ) or die ("Invalid query sqledit : " . mysql_error());
				while($row = mysql_fetch_array($stmt)){
					$mpID=$row['mpID'];
					$mpName=$row['mpName'];
					$mpSirname=$row['mpSirname'];
					$mpNick=$row['mpPhone'];
					$mpNodesk=$row['mpEmail'];
					$mpNomobile=$row['mpUserName'];
					$mpEmail=$row['mpSex'];
					$mpEdu=$row['mpAddress'];
					$mpBashistory=$row['mpAddrSec1'];
					$mpHornour=$row['mpAddrSec2'];
					$mpBasposition=$row['mpProvince'];
					$mpAthlete=$row['mpBirth'];
	
				}


		}

	

		if (isset($modesave) && ($modesave=="ADDTEXT")) {	



					include("../../initial/connect.php");
					$sqlB = "select  max(mporderdisplay) AS MAXgaOrder    from memberprofile"; 
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$MAXgaOrder=$rowB['MAXgaOrder'];
					}
					$MAXgaOrder++;
					$daynow=date("Y-m-d");
					$sql_insert="Insert Into  memberprofile (mpName,  mpSirname, mpNick, mpNodesk, mpNomobile,  mpEmail, mpEdu, mpBashistory, mpHornour, mpBasposition, mpAthlete, mpShoes, mpShirtsizeNo, mpWeight, mpHeight, mpWork,mporderdisplay, mpProvince)Values('$mpName', '$mpSirname', '$mpNick', '$mpNodesk', '$mpNomobile', '$mpEmail', '$mpEdu', '$mpBashistory', '$mpHornour', '$mpBasposition', '$mpAthlete', '$mpShoes', '$mpShirtsizeNo', '$mpWeight', '$mpHeight', '$mpWork','$MAXgaOrder','$mpProvince')";
					//echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){
							}else{
									echo "Unsuccess : ".mysql_error();
							}
				
		}else	if (isset($modesave) && ($modesave=="EDITTEXT")) {	

					include("../../initial/connect.php");
					$daynow=date("Y-m-d");
					$sql_update = "update memberprofile set mpName='$mpName',  mpSirname='$mpSirname',  mpNick='$mpNick',  mpNodesk='$mpNodesk',  mpNomobile='$mpNomobile',  mpEmail='$mpEmail',  mpEdu='$mpEdu',  mpBashistory='$mpBashistory',  mpHornour='$mpHornour',  mpBasposition='$mpBasposition',  mpAthlete='$mpAthlete',  mpShoes='$mpShoes',  mpShirtsizeNo='$mpShirtsizeNo' ,  mpHeight='$mpHeight',  mpWeight='$mpWeight',  mpWork='$mpWork' ,  mpProvince='$mpProvince'  where mpID='$thisID'";

					//echo  $sql_update." : ".$imgfile_name;
					$result = mysql_db_query($database,$sql_update);
							if ($result){
							}else{
									echo "Unsuccess : ".mysql_error();
							}
				
		}
		
					//	<!-- ใส่รูป -->

if (isset($imgfile_name)&&$imgfile_name<>"") {


		 $uploaddir = "../../images/profile/";

		//To check File type
		    function getFileExtension($str) {
					$i = strrpos($str,".");
					if (!$i) { return ""; }
					$l = strlen($str) - $i;
					$ext = substr($str,$i+1,$l);
					 return $ext;
			 }
			if(isset($imgfile) AND $imgfile<>''){
				$pext = getFileExtension($imgfile_name);
				$pext = strtolower($pext);
				if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
						<script language = "javascript">
							alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
							window.history.back();
						</script> 
				<?}else{

				//Upload file 
					//To creat filename 
					
						$sqlLAST_ID = "select  max(mpID) LAST_ID from memberprofile";
						$rs = mysql_query($sqlLAST_ID) or die("Query failed sqlLAST_ID    : ".mysql_error());
						while($row=mysql_fetch_array($rs)) { 
								$LAST_ID= $row[LAST_ID];
						}
					if ($modesave=="EDITTEXT"){$LAST_ID=$thisID;}else{$thisID=$LAST_ID;}
						$filesavename='member'.$LAST_ID.'.'.$pext;
							 
					//End creat filename 
					$newfile2 = $uploaddir.$filesavename;
					//echo  $newfile2;
					
					if (copy($imgfile,"$newfile2")) {

					//Update Database
					//$sql_insert="Insert Into  gallerypicture (gpName,  gpFileName, gaID, AdminID)Values('$gallery_title', '$filesavename', '$gaID','$adminID')";
	
					$sql_insert="UPDATE memberprofile SET mpPicture= '$filesavename' WHERE mpID='$thisID'";

					echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){?>
									<script language = "javascript">
										window.location="profile_main.php";
									</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}
					//END Update Database
	
					}else {		
					print ("failed to copy $w_pict...<br>\n");
					}
			
				}
	}
}else if (isset($modesave)){
?>
									<script language = "javascript">
										window.location="profile_main.php";
									</script>		<?
}

//<!--End  ใส่รูป -->		

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
<A HREF="profile_main.php">	กลับหน้าหลัก</A>
	
	</TD>
</TR>
<TR>
	<TD align="center">
	<?

					if (!isset($mpName))$mpName=""; 
					if (!isset($mpSirname))$mpSirname=""; 
					if (!isset($mpNick))$mpNick=""; 
					if (!isset($mpNodesk))$mpNodesk=""; 
					if (!isset($mpNomobile))$mpNomobile=""; 
					if (!isset($mpEmail))$mpEmail=""; 
					if (!isset($mpEdu))$mpEdu=""; 
					if (!isset($mpBashistory))$mpBashistory=""; 
					if (!isset($mpHornour))$mpHornour=""; 
					if (!isset($mpBasposition))$mpBasposition=""; 
					if (!isset($mpAthlete))$mpAthlete=""; 
					if (!isset($mpShoes))$mpShoes=""; 
					if (!isset($mpShirtsizeNo))$mpShirtsizeNo=""; 
					if (!isset($mpPicture))$mpPicture=""; 
					if (!isset($mpHeight))$mpHeight=""; 
					if (!isset($mpWeight))$mpWeight=""; 
					if (!isset($mpWork))$mpWork=""; 
					if (!isset($mpProvince))$mpProvince=""; 
	?>

	
	<TABLE border="3" cellpadding="10" cellspacing="0" class=m10>
		<TR>
		<TD valign=top colspan=3>
			ชื่อ : <INPUT TYPE="text" NAME="mpName" value="<?=$mpName?>">&nbsp;&nbsp;&nbsp;&nbsp;
			สกุล : <INPUT TYPE="text" NAME="mpSirname" value="<?=$mpSirname?>">&nbsp;&nbsp;&nbsp;&nbsp;
			ชื่อเล่น : <INPUT TYPE="text" NAME="mpNick" value="<?=$mpNick?>"></TD>
	</TR>
	<TR>
		<TD valign=top colspan=3>
			เบอร์ติดต่อ โต๊ะ :  <INPUT TYPE="text" NAME="mpNodesk" value="<?=$mpNodesk?>">&nbsp;&nbsp;&nbsp;&nbsp;
			มือถือ : <INPUT TYPE="text" NAME="mpNomobile" value="<?=$mpNomobile?>"></TD>
	</TR>
	<TR>
		<TD valign=top>
			E-mail :  </TD>
		<TD>&nbsp;<INPUT TYPE="text" NAME="mpEmail" value="<?=$mpEmail?>"></TD>
	</TR>
		<TR>
		<TD valign=top>รูปภาพ : </TD>
		<TD><IMG name="upload_img" SRC="../../images/profile/<?=$mpPicture?>" WIDTH="248" HEIGHT="147"  BORDER="1" ALT="Image Sample" ><br>Click browse to upload a local file :<br><input type="file" name="imgfile" onchange = "getimg()" style="cursor:hand" size="50" onClick="alert('เพื่อความสวยงาม ภาพควรมีขนาด 248 px * 147 px')"></TD>
	</TR>
		<TR>
		<TD valign=top colspan=2>ส่วนสูง : <INPUT TYPE="text" NAME="mpHeight" value="<?=$mpHeight?>"> เซ็นติเมตร &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำหนัก : <INPUT TYPE="text" NAME="mpWeight" value="<?=$mpWeight?>"> กิโลกรม</TD>
	</TR>
		<TR>
		<TD valign=top>บริษัท/หน่วยงานที่สังกัด : </TD>
		<TD><INPUT TYPE="text" NAME="mpWork" value="<?=$mpWork?>"></TD>
	</TR>
	</TR>  
		<TR>
		<TD valign=top>ภูมิลำเนา : </TD>
		<TD><INPUT TYPE="text" NAME="mpProvince" value="<?=$mpProvince?>"></TD>
	</TR>
	<TR>
		<TD valign=top>ประวัติการศึกษา : </TD>
		<TD><TEXTAREA NAME="mpEdu" ROWS="10" COLS="50"><?=$mpEdu?></TEXTAREA></TD>
	</TR>
	<TR>
		<TD>ประวัติการเล่นบาส :</TD>
		<TD><TEXTAREA NAME="mpBashistory" ROWS="10" COLS="50"><?=$mpBashistory?></TEXTAREA></TD>
	</TR>
	<TR>
		<TD>เกียรติประวัติ :</TD>
		<TD><TEXTAREA NAME="mpHornour" ROWS="10" COLS="50"><?=$mpHornour?></TEXTAREA></TD>
	</TR>
	<TR>
		<TD>ตำแหน่งในเกมส์  :</TD>
		<TD><INPUT TYPE="text" NAME="mpBasposition" value="<?=$mpBasposition?>"></TD>
	</TR>
		<TR>
		<TD>นักกีฬาคนโปรด :</TD>
		<TD><INPUT TYPE="text" NAME="mpAthlete" value="<?=$mpAthlete?>"></TD>
	</TR>
		<TR>
		<TD>ยี่ห้อรองเท้า/เบอร์ :</TD>
		<TD><INPUT TYPE="text" NAME="mpShoes" value="<?=$mpShoes?>"></TD>
	</TR>
<TR>
		<TD>ขนาดเสื้อ/ เบอร์เสื้อ :</TD>
		<TD><INPUT TYPE="text" NAME="mpShirtsizeNo" value="<?=$mpShirtsizeNo?>"></TD>
	</TR>
	<TR>
		<TD colspan=2><CENTER><INPUT TYPE="submit" value="<?=$mode?>"  <?if($mode<>'edit') {?>onclick="addsave()" <?}else{?> onClick="editsave()" <?}?>></CENTER></TD>
	</TR>
	
	</TABLE>
 

	</TD>
</TR>
</TABLE>
<input type='hidden' name='modesave' >
 <input type='hidden' name='mpID' >
<input type='hidden' name='mode' value=<?=$mode?> >
</form>
</BODY>
</HTML>
<SCRIPT LANGUAGE="JavaScript">
function getimg(){
		frmmain.upload_img.src = frmmain.imgfile.value ;
	}
function addsave(){
			frmmain.modesave.value = 'ADDTEXT';
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function editsave(){
			frmmain.modesave.value = 'EDITTEXT';
			frmmain.action = '<?echo $PHP_SELF."?thisID=".$mpID;?>';
		    frmmain.submit();
}

</SCRIPT>