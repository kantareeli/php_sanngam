<?session_start(); 
if (!isset($adminID)){?>
<script language = "javascript">
//window.location="index.php";
//alert("ss")
</script>
<?}?>

<HTML>
<HEAD>
<TITLE>Marquee</TITLE>
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
				$sqledit = "select  *  from tbl_marquee  where Id='$Id'";
				//echo  $sqledit;
				$stmt = mysql_query($sqledit ) or die ("Invalid query sqledit : " . mysql_error());
				while($row = mysql_fetch_array($stmt)){
						$ntittle=$row['ntittle'];
						$ndesc=$row['ndesc'];
						$nPicture=$row['nPicture'];
				}


		}
		if (isset($modesave) && ($modesave=="ADDTEXT")) {	
				if ($albumname=="" ){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$sqlB = "select  max(gaOrder) AS MAXgaOrder    from tbl_marquee "; 
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$MAXgaOrder=$rowB['MAXgaOrder'];
					}
					$MAXgaOrder++;

					$daynow=date("Y-m-d");
					$sql_insert="Insert Into  tbl_marquee  (ntittle,   AdminID, lastUpdate, gaOrder)Values('$albumname',  '$adminID', '$daynow', '$MAXgaOrder')";
					//echo  $sql_insert;
					$resultinsert = mysql_db_query($database,$sql_insert);
							if ($resultinsert){
					
												?>
																		<script language = "javascript">
																					window.location="ann_main.php";
																		</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}

				}

		}else	if (isset($modesave) && ($modesave=="EDITTEXT")) {	
				if ($albumname=="" ){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$daynow=date("Y-m-d");
					$sql_update = "update tbl_marquee set ntittle='$albumname',  lastUpdate='$daynow', AdminID='$adminID' where Id='$Id'";
					//echo  $sql_update;
					$resultupdate = mysql_db_query($database,$sql_update);
							if ($resultupdate){
						
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