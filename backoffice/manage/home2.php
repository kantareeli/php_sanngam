<?
session_start();
include("../connect/connect_oci.php");

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
<TITLE>!!! Phak2.go.th.......ADMINISTRATION ------- <?print"username_id=".$usernameid;?></TITLE>
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#0000cc;}
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

<BODY topmargin="0" leftmargin="0" bgcolor="#DCEECB">
<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="40" >
				<tr>
					<td bgcolor="#DCEECB" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->	
								
<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="40" frameborder="0" scrolling="NO" ></iframe>
							
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->




<!--Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="150" >
	<tr>
		<td valign="top">

			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="500" bgcolor="#DCEECB"">
				<tr >
					<td valign="top" bgcolor="">
<!--Middle Table-------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" >
							<tr>
								<td align="" valign="top" colspan="1" width="85%">
									<TABLE align="center" width="45%">
															<TR>
																<TD align=center><FONT FACE="ms sans serif" SIZE="4" COLOR=""><B></B></FONT></TD>
															<TR>
																<TD  align=center><FONT FACE="ms sans serif" SIZE="4" COLOR=""><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><B>ขอต้อนรับเข้าสู่ระบบการจัดการข้อมูล www.phak2.go.th<br> </B><br><br><br><br><br><br><br><br></FONT></TD>
															</TR>
															<!-------------------
															<TR>
																<TD  align=center><FONT FACE="ms sans serif" SIZE="4" COLOR=""><B>คุณสามารถเลือกทำรายการต่างๆโดยคลิกที่เมนูด้านบน </B></FONT></TD>
															</TR>
															<TR>
																<TD  align=center><FONT FACE="ms sans serif" SIZE="4" COLOR=""><B>หรือ เลือกเมนู Help เพื่อดูรายละเอียดการใช้งานของเมนูต่างๆ  </B></FONT></TD>
															</TR>
															------------------>
															</TABLE>
								</td>
							</tr>
						</table>
<!--End Middle Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>

<!--Bottom Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="">
				<tr>
					<td valign="top">
<!--Down Table--------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="#D4D0C8">
							<tr>
								<td align="" width="" colspan="2" background="images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Production</B></FONT></td>
							</tr>
							<tr>
								<td align="" width="15%"><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;<B>Powered by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">True Corporation Plc. </FONT></td>
							</tr>
							<tr valign="top">
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Developed by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><!-- Asia Multimedia Co., Ltd.<BR> -->Asianet Corporation Limited<BR>
								27th Floor, 1 Fortune Town, Ratchadaphisek Rd, Huay Khwang, Bangkok 10320, Thailand.
								</FONT></td>
							</tr>
<!-- 
							<tr>
								<td align="" width="">&nbsp;<B>Contact</B><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;</FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="">Mr.Ramsak  Kaewsorn</FONT></td>
							</tr>
 -->
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Tel. / Fax.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">+66 0 2699 5449 / +66 0 2641 1833</FONT></td>
							</tr>
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>E-mail.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><A HREF="mailto:content@ims.co.th" style="text-decoration:none"><FONT FACE="ms sans serif" SIZE="1" COLOR="#000000" style="font-family: ms sans serif; font-size:7pt;">content@ims.co.th</FONT></A></FONT></td>
							</tr>
							<tr>
								<td align="" width="" colspan="2" background="images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;"></FONT></td>
							</tr>
						</table>
<!--End Down Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>
<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
</font>
</BODY>
	<SCRIPT language=JavaScript src="../connect/menu_array2.js" type=text/javascript></SCRIPT>
	<SCRIPT language=JavaScript src="../connect/mmenu.js" type=text/javascript></SCRIPT>
</HTML>

<SCRIPT LANGUAGE="JavaScript">
function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {

		 window.open("\.\.\/manage/signout.php","_top");

		}

}
</SCRIPT>
