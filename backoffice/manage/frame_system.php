<?
session_start();
include("../../initial/connect.php");
?>
<?
$stmt_system=mysql_query("select aNickname, aName, aSirname from admin  where adminID='$adminID' ") or die("Query failed login");
//ociexecute($stmt_system,OCI_DEFAULT);
while($row = mysql_fetch_array($stmt_system)){
	$login_desc=$row["aNickname"];
	$aName=$row["aName"];
	$aSirname=$row["aSirname"];
}
?>
								<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#0000cc;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #FFFFFF;}
a:hover {color: #00FFFF;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<BODY topmargin="0" leftmargin="0" bgcolor="#70C6F9">
<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

								<table cellpadding="0" cellspacing="0" border="0" width="100%"bgcolor="#D4ECFB" >
							<tr  width="100%" bgcolor="#70C6F9">
								<td ><table border="0" cellpadding="0" cellspacing="0" width="100%"  align="left">
										<tr>
											<td><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF">&nbsp;&nbsp;&nbsp;<IMG SRC="../images/icon_monitor.gif" WIDTH="13" HEIGHT="11" BORDER=0 ALT="">&nbsp;<B>[ระบบการจัดการข้อมูล SanNgam Web Portal]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="../home.php" target="_parent">Home</A></B></FONT></td>
											<td align="right"><FONT FACE="ms sans serif" SIZE="1" COLOR="#330000"><b><?print$login_desc." - ".$aName." ".$aSirname?></b>&nbsp;&nbsp;</font><!--<A HREF="signout.php" target="_top" alt="Sign Out">---><IMG SRC="../images/button_close.gif" WIDTH="16" HEIGHT="14" BORDER=0 ALT="ออกจากระบบ" onClick="return exit_system()" style="cursor:hand"><!--</A>--></td>
										</tr>
									</table>
									
			</td>
							</tr>							
						</table>
						</font>
</BODY>

<SCRIPT LANGUAGE="JavaScript">
function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {
		 window.open("../manage/signout.php","_top");
		}

}
</SCRIPT>