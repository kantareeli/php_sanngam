<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Album Detail</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>
<?

		if 	(isset($mode) && ($mode=="edit")) {	
				include("../../initial/connect.php");
				$sqledit = "select  *  from galleryalbum where gaID='$gaID'";
				//echo  $sqledit;
				$stmt = mysql_query($sqledit ) or die ("Invalid query sqledit : " . mysql_error());
				while($row = mysql_fetch_array($stmt)){
						$gaName=$row['gaName'];
						$gaDesc=$row['gaDesc'];
				}


		}
		if (isset($modesave) && ($modesave=="ADDTEXT")) {	
				if ($albumname=="" || $albumdesc==""){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$sqlB = "select  max(gaOrder) AS MAXgaOrder    from galleryalbum"; 
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$MAXgaOrder=$rowB['MAXgaOrder'];
					}
					$MAXgaOrder++;

					$daynow=date("Y-m-d");
					$sql_insert="Insert Into  galleryalbum (gaName,  gaDesc, AdminID, lastUpdate, gaOrder)Values('$albumname', '$albumdesc', '$adminID', '$daynow', '$MAXgaOrder')";
					//echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){?>
									<script language = "javascript">
										window.location="gallery_subject.php";
									</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}
				}
		} else		if (isset($modesave) && ($modesave=="EDITTEXT")) {	
				if ($albumname=="" || $albumdesc==""){
					echo "<B><CENTER>กรุณากรอกข้อมูลให้ครบก่อนกดปุ่มบันทึก</CENTER></B>";
				}else{
					include("../../initial/connect.php");
					$daynow=date("Y-m-d");
					$sql_update = "update galleryalbum set gaName='$albumname',  gaDesc='$albumdesc', lastUpdate='$daynow', AdminID='$adminID' where gaID='$gaID'";
					//echo  $sql_update;
					$result = mysql_db_query($database,$sql_update);
							if ($result){?>
									<script language = "javascript">
										window.location="gallery_subject.php";
									</script>		<?
							}else{
									echo "Unsuccess : ".mysql_error();
							}
				}
		} else {
?>
<BODY  topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<form action="" name="frmmain" id="frmmain" method="post">

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
<A HREF="gallery_subject.php">	กลับหน้าหลัก</A>
	
	</TD>
</TR>
<TR>
	<TD align="center">
	<?
					if (!isset($gaName))$gaName=""; 
					if (!isset($gaDesc))$gaDesc=""; 
	?>
	<CENTER>ชื่อ Album : <INPUT TYPE="text" NAME="albumname" size=50  value="<?=$gaName?>"><BR>
	รายละเอียด : <TEXTAREA NAME="albumdesc" ROWS="10" COLS="50"><?=$gaDesc?></TEXTAREA><BR>
	<INPUT TYPE="submit" value="<?=$mode?>"  <?if($mode<>'edit') {?>onclick="addsave()" <?}else{?> onclick="editsave()" <?}?>></CENTER>
	
	</TD>
</TR>
</TABLE>
<input type='hidden' name='modesave' >
<input type='hidden' name='gaID'  value=<?=$gaID?>>
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

</SCRIPT>
<?}?>