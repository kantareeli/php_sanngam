<?
session_start();
if (!isset($adminID)){?>
<script language = "javascript">
window.location="../index.php";
</script>
<?}
include("../../initial/connect.php");
	$sqlcount = "select  count(*) CC  from galleryalbum ORDER BY  gaID";
	$stmtcount= mysql_query($sqlcount ) or die ("Invalid query 1 : " . mysql_error());
	$totalrec= mysql_result($stmtcount,0,"CC");
?>
<?
if (isset($mode) && ($mode=="MOVEUP")) {	
	$sqlA = "select  gaOrder  from galleryalbum  where   gaID ='$f_id'";
	//echo $sqlA."<BR>";
	$countstmtA = mysql_query($sqlA ) or die ("Invalid query sqlA : " . mysql_error());
	while($rowA = mysql_fetch_array($countstmtA)){
			$FAQ_ORDER=$rowA['gaOrder'];
			//echo "FAQ_ORDER".$f_id." ".$FAQ_ORDER."<BR>";
	}
	$FAQ_ORDER=$FAQ_ORDER-1;
	$sqlB = "select  gaID  from galleryalbum  where   gaOrder ='$FAQ_ORDER'";	
	//echo  $sqlB."<BR>";
	$countstmt = mysql_query($sqlB ) or die ("Invalid query sqlB : " . mysql_error());
	while($rowB= mysql_fetch_array($countstmt)){
			$Id_upper=$rowB['gaID'];
			//echo  "Id_upper".$Id_upper." ".$FAQ_ORDER."<BR>";
	}
	
	$sql1 = "update  galleryalbum set gaOrder=gaOrder-1  where   gaID ='$f_id'"; 
	//echo  $sql1."<BR>";
	$updatestmt1 = mysql_query($sql1 ) or die ("Invalid query sql1 : " . mysql_error());

	$sql2 = "update  galleryalbum set gaOrder=gaOrder+1 where   gaID ='$Id_upper'"; 
	//echo  $sql2."<BR>";
	$updatestmt2 = mysql_query($sql2 ) or die ("Invalid query sql2 : " . mysql_error());

}
if (isset($mode) && ($mode=="MOVEDOWN")) {	
		$sqlA = "select  gaOrder  from galleryalbum  where   gaID ='$f_id'";
	//	echo $sqlA."<BR>";
		$countstmtA = mysql_query($sqlA ) or die ("Invalid query sqlA : " . mysql_error());
		while($rowA = mysql_fetch_array($countstmtA)){
			$FAQ_ORDER=$rowA['gaOrder'];
			//echo "FAQ_ORDER".$f_id." ".$FAQ_ORDER."<BR>";
		}
		$FAQ_ORDER=$FAQ_ORDER+1;
		$sqlB = "select  gaID  from galleryalbum  where   gaOrder ='$FAQ_ORDER'";	
		//echo  $sqlB."<BR>";
		$countstmt = mysql_query($sqlB ) or die ("Invalid query sqlB : " . mysql_error());
		while($rowB= mysql_fetch_array($countstmt)){
			$Id_upper=$rowB['gaID'];
			//echo  "Id_upper".$Id_upper." ".$FAQ_ORDER."<BR>";
		}
	
		$sql1 = "update  galleryalbum set gaOrder=gaOrder+1  where   gaID ='$f_id'"; 
		//echo  $sql1."<BR>";
		$updatestmt1 = mysql_query($sql1 ) or die ("Invalid query sql1 : " . mysql_error());

		$sql2 = "update  galleryalbum set gaOrder=gaOrder-1 where   gaID ='$Id_upper'"; 
		//echo  $sql2."<BR>";
		$updatestmt2 = mysql_query($sql2 ) or die ("Invalid query sql2 : " . mysql_error());
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
####################################################
########## Department : Broadband Contents  			      ##########
########## Company : Asianet Corporation Limited         ##########
########## Project : MCU     				                                          ##########
########## Date : 12 September  2003							          ##########
####################################################
-->
<HTML>
<HEAD>
<TITLE>Gallery Baketball </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #FFFFFF;}
a:hover {color: #00FFFF;}
</style>

<script language="JavaScript"> 
nereidFadeObjects = new Object();
nereidFadeTimers = new Object();
function nereidFade(object, destOp, rate, delta){
if (!document.all)
return
    if (object != "[object]"){  //do this so I can take a string too
        setTimeout("nereidFade("+object+","+destOp+","+rate+","+delta+")",0);
        return;
    }
    clearTimeout(nereidFadeTimers[object.sourceIndex]);
    diff = destOp-object.filters.alpha.opacity;
    direction = 1;
    if (object.filters.alpha.opacity > destOp){
        direction = -1;
    }
    delta=Math.min(direction*diff,delta);
    object.filters.alpha.opacity+=direction*delta;
    if (object.filters.alpha.opacity != destOp){
        nereidFadeObjects[object.sourceIndex]=object;
        nereidFadeTimers[object.sourceIndex]=setTimeout("nereidFade(nereidFadeObjects["+object.sourceIndex+"],"+destOp+","+rate+","+delta+")",rate);
    }
}
</script>

<script language="javascript">
var win = null;
function NewWindow(mypage,myname,w,h){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>


<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<form action="" name="frmmain" id="frmmain" method="post">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#F6FBFE" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->




<!--Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
	<tr>
		<td valign="top">

			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="505" bgcolor="#F6FBFE">
				<tr>
					<td valign="top" bgcolor="">
<!--Middle Table-------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
							<tr>
								<td align="" valign="top" colspan="1" width="85%">
									
								
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr  width="100%">
											<td width="100%" align="">
												<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
												<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#FFFFFF">
												<!----
													<tr bgcolor="#29672B">
														<td colspan =6 align="left">
														<a href="newsCate_main.php?countpage=<?print$countpage?>" 
                  onMouseOut="document.total.src='../images/menu_total2.gif'; return true" 
                  onMouseOver="document.total.src='../images/menu_total1.gif'; return true"><img 
                  alt="รายการทั้งหมด" border=0 height=17 name=total
                  src="../images/menu_total2.gif" width=170 style="cursor:hand"></a></td>
														</tr>
														------------------>
														<tr bgcolor="#4FAEFF">
														<td align="center" width="5%"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>ลำดับ</B></FONT></td>
														<td align="center" width="5%"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>ลำดับ</B></FONT></td>
													<td align="center"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ภาพเด่น</B></FONT></td>
															<td align="center"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>หัวข้อแฟ้มภาพ [Album]</B></FONT></td>
															<td align="center" width="17%"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>วันที่ปรับปรุง</B></FONT></td>
<td align="center"width="10%" ><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แฟ้มภาพ</B></FONT></td>
															<td align="center" width="5%"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แก้ไข</B></FONT></td>
															<td align="center" width="5%"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ลบ</B></FONT></td>
														</tr>
<?
	$sqlB = "select  max(gaOrder) AS MAXgaOrder    from galleryalbum"; 
	$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
	while($rowB = mysql_fetch_array($stmtB)){
			$MAXgaOrder=$rowB['MAXgaOrder'];
	}

	$sql = "select  *  from galleryalbum ORDER BY  gaOrder";
	$stmt = mysql_query($sql ) or die ("Invalid query 1 : " . mysql_error());

$inicount = 0;
while ( $inicount<$totalrec ){



$gaID= mysql_result($stmt,$inicount,"gaID");
$gaName= mysql_result($stmt,$inicount,"gaName");
$gaHilight= mysql_result($stmt,$inicount,"gaHilight");
$update_date =  mysql_result($stmt,$inicount,"lastUpdate");
$gaOrder =  mysql_result($stmt,$inicount,"gaOrder");

		$temp_subject = substr($gallerysub_subject,0,60);
//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$utime = substr($update_date,11,8);
		$update_date= $uday."/".$umonth."/".$uyear."    ".$utime;

if  ($gaHilight<>0){
	$sqlHilight = "select  gpFileName from gallerypicture  where gpID='$gaHilight' ";
	$stmt_Hilight = mysql_query(	$sqlHilight);
	$picHilight = mysql_result($stmt_Hilight, 0, "gpFileName" );
}
?>
			<tr bgcolor="#F6FBFE">
			<td align="center">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000"><B><?print$inicount+1?></B></FONT>&nbsp;</td>
			<td align="center">
								<?if ($gaOrder<>1){?>&nbsp;   
											<IMG SRC="../images/upicon.gif"  BORDER="0" ALT="เลื่อนขึ้น"  onclick="moveUp(<?print $gaID?>)" style="cursor:hand">&nbsp;    
								<?}?>
								<?if ($gaOrder<>$MAXgaOrder){?>&nbsp;   
											<IMG SRC="../images/downicon.gif"  BORDER="0" ALT="เลื่อนลง"onclick="moveDown(<?print $gaID?>)" style="cursor:hand">&nbsp;   
								<?}?></td>
			<td align="center"><FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
			<?if ($gaHilight<>0){?><img src="../../images/galleryfile/<?=$picHilight?>" width="80" height="60" align="center" >
			<?}else{?>NO IMAGE HIGHLIGHT<?}?></FONT></td>

			<td align="left">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000"><B><?print $gaName?>...</B></FONT>&nbsp;</td>
															
			<td align="center" width="17%">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000"><?print$update_date?></FONT>&nbsp;</td>
			
			<td align="center"width="" ><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B><a href="gallery_view.php?gaID=<?=$gaID?>"><IMG SRC="../images/iconPic.gif"  BORDER=0 ALT="แฟ้มภาพ" onclick=""></a></B></FONT></td>
			
			<td align="center">
					<A style="CURSOR: hand"     href="albumdetail.php?mode=edit&gaID=<?=$gaID?>"><IMG     alt=แก้ไขข้อมูล   src="../images/icon_edit.gif"   border=0></A>
			</td>
				
			<td align="center"><?if ($gaOrder==$MAXgaOrder){?><A style="CURSOR: hand"  onclick="goto_del(<?=$gaID?>)"   ><IMG     alt=ลบข้อมูล   src="../images/icon_delete.gif"   border=0></A><?}?></td>
														
														</tr>
<?$inicount++;
}?>		
																				
														<tr >
															<td align="center" colspan="7"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
														</tr>
<!------------ TOOL ----------------------------->
														<tr valign="center" >
															<td colspan="8" bgcolor="#4FAEFF" align=center>
																	 
																		
																			<a href="albumdetail.php?mode=add&gaID=<?=$gaID?>"
                  onMouseOut="document.add1.src='../images/add_but2.gif'; return true" 
                  onMouseOver="document.add1.src='../images/add_but1.gif'; return true"><img 
                  alt="เพิ่มข้อมูล" border=0 height=18 name=add1 
                  src="../images/add_but2.gif" width=72 style="cursor:hand"></a>
																			 
																			</td>
																		</tr>
																	</table>
																</B></FONT>
															</td>
														</tr>
<!------------ END TOOL --------------------->
														<tr >
															<td align="center" colspan="7" ><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
														</tr>
													</table>
												</FONT>
											</td>
										</tr>
										
									</table>

								</td>
							</tr>
						</table>
<!--End Middle Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>

<!--Bottom Table----------------------------------------------------------------------------------------------------------------------------------------------->			

<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
</font>
<input type='hidden' name='countpage' value='<?print  $countpage?>'>
<input type="hidden" name="mode">
<input type="hidden" name="f_id">
</form>
</BODY>
</HTML>

<SCRIPT language=JavaScript>


function goto_del(code){
	if  (!confirm('คุณต้องการจะลบข้อมูลนี้ใช่หรือไม่')) {
			return false;
	}else{
		frmmain.action = 'album_del.php?gaID='+code;
		frmmain.submit();
	}
}



function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {
		 window.open("../manage/signout.php","_top");
		}
}

function moveUp(f_id){
			frmmain.mode.value = 'MOVEUP';
			frmmain.f_id.value = f_id;
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function moveDown(f_id){
			frmmain.mode.value = 'MOVEDOWN';
			frmmain.f_id.value = f_id;
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

	</SCRIPT>
