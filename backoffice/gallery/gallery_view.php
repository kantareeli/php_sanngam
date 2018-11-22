<?
session_start();
include("../../initial/connect.php");



$countsql = "select count(*)  from galleryalbum where gaID='$gaID' ";
//To count row 
$countstmt = mysql_query($countsql ) or die("Query failed galleryalbum    : ".mysql_error());
while($row = mysql_fetch_array($countstmt)){
	$maxrow=$row[0];
}
mysql_free_result($countstmt) ;

//Function หาชื่อผู้ Update
function updateName($ID){
	include("../../initial/connect.php");
	$sqlupdateName = "select *  from admin where adminID='$ID' ";
	//echo  $sqlupdateName;
	$stmtupdateName = mysql_query($sqlupdateName) or die("Query failed sqlupdateName   : ".mysql_error());
	while($row = mysql_fetch_array($stmtupdateName)){
		$aNickname=$row[aNickname];
	}
	mysql_free_result($stmtupdateName) ;
	return  $aNickname;
}
//End Function หาชื่อผู้ Update

// To Show  gallery_subject
$stmt_edit=mysql_query("select gaName, gaHilight  from galleryalbum  where gaID='$gaID' ");
$gallerysub_subject=mysql_result($stmt_edit, 0,"gaName");
$gaHilight=mysql_result($stmt_edit, 0,"gaHilight");
//echo $gallerysub_subject;
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
<TITLE>!!!! bas Club Admin !!!!</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #05588A;}
a:hover {color: #4F3EA4;}
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

<script language=JavaScript>
<!--

//Disable right click script III

var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>

<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<form action="" name="frmmain" id="frmmain" method="post">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="10">
				<tr>
					<td bgcolor="#DCEECB" valign="top">
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
									
								
									<table border="1" cellpadding="0" cellspacing="0" width="100%" >
										<tr  width="100%">
											<td width="100%" align="">
												<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
												<table  border="1" cellpadding="5" cellspacing="0" width="100%" bgcolor="#FFFFFF" bordercolor=4FAEFF>
												<tr bgcolor="#F6FBFE">
														<td colspan =7 align="left">
														<a href="gallery_subject.php">รายการทั้งหมด</a><a href="gallery_view_add.php?gaID=<?print$gaID?>"><img 
                  alt="เพิ่มข้อมูล" border=0 height=18 name=add1 
                  src="../images/add_but2.gif" width=72 style="cursor:hand"></a>	<BR></td>
														</tr>
												<tr bgcolor="#F6FBFE">
														<td align="center" width="5%"><B>ลำดับ</B></td>
														<td align="center"width="7%" ><B>Highlight</B></td>
														<td align="center"  ><B>แฟ้มภาพ "<?print$gallerysub_subject?>"</B></td>
														<td align="center" width="13%"><B>ผู้ปรับปรุง</B></td>
												 		<td align="center" width="5%"><B>แก้ไข</B></td> 
														<td align="center" width="5%"><B>ลบ</B></td>
											</tr>
<?
	
	$sqlpicture = "select * from gallerypicture where  gaID = '$gaID' ORDER BY  gpID DESC";
	$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
	while($row=mysql_fetch_array($rs)) { 

		$gpID= $row[gpID];
		$gpName= $row[gpName];
		$gpFileName= $row[gpFileName];
		$thisadminID= $row[adminID];
		
?>
					<tr bgcolor="#F6FBFE">
						<td align="center">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000"><B><?print$inicount+1?></B></FONT>&nbsp;</td>

						<td align="center">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
							<input type="checkbox" name="checkbox1"  <?if ($gaHilight == $gpID) print "checked";?>	onclick='checkit(<?print $gaID?>, <?print $gpID?>)'></FONT></td>
						<td  align="left">
							<A HREF="../../images/galleryfile/<?=$gpFileName?>" target="openpic"><img src="../../images/galleryfile/<?=$gpFileName?>" width="40" height="30"  border=0 ></A>&nbsp;<?=$gpName?></td>
						<td align="center" width="17%"><?=updateName($thisadminID)?></td>
						<td align="center"><A style="CURSOR: hand"     href="gallery_view_add.php?mode=edit&gaID=<?print$gaID?>&gpID=<?=$gpID?>"><IMG     alt=แก้ไขข้อมูล   src="../images/icon_edit.gif"   border=0></A></td> 
						<td align="center"> <A style="CURSOR: hand"  onclick="goto_del(<?=$gpID?>,<?=$gaID?>)" ><IMG  alt=ลบข้อมูล  src="../images/icon_delete.gif"   border=0></A> </td>
					</tr>
<?$inicount++;
}?>		
																				
														<tr bgcolor="#5170A7">
															<td align="center" colspan="7"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
														</tr>
<!------------ TOOL ----------------------------->
														<tr valign="center" >
															<td colspan="7" bgcolor="#4FAEFF" align="center">
				<a href="gallery_view_add.php?gaID=<?print$gaID?>"><img 
                  alt="เพิ่มข้อมูล" border=0 height=18 name=add1 
                  src="../images/add_but2.gif" width=72 style="cursor:hand"></a>													
															</td>
														</tr>
<!------------ END TOOL --------------------->
														<tr bgcolor="#5170A7">
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
</form>
</BODY>
	<SCRIPT language=JavaScript src="../connect/menu_array.js" type=text/javascript></SCRIPT>
	<SCRIPT language=JavaScript src="../connect/mmenu.js" type=text/javascript></SCRIPT>
</HTML>

<script language=javascript>

function checkit(code,code2){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'gallery_view_check.php?gaID='+code+"&gpID="+code2;
		frmmain.submit();
	}


function previous_page(countpage)
	{
		frmmain.countpage.value = countpage - 1;
		frmmain.action = "gallery_view.php";
		frmmain.submit();
	}

	function next_page(countpage)
	{
		frmmain.countpage.value = countpage + 1;
		frmmain.action = "gallery_view.php";
		frmmain.submit();
	}

	function goto_del(code,code2){
	if  (!confirm('คุณต้องการจะลบรายการนี้ใช่หรือไม่')) {
			return false;
	}else{
		frmmain.action = 'gallery_view_del.php?gpID='+code+'&gaID='+code2;
		frmmain.submit();
	}
	}

function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {
		 window.open("../manage/signout.php","_top");
		}




}
	</script>