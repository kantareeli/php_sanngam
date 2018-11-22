<?session_start(); 
if (!isset($adminID)){?>
<script language = "javascript">
window.location="index.php";
//alert("ss")
</script>
<?}?>
<html>
<head>
	<title>BackOffice SanNgam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
</head>
<STYLE type=text/css>
.m10w  { color: #FFFFFF; font-size: 10pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.m10  { color: #505050; font-size: 10pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.m8 { color: #505050; font-size: 8pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.m8w { color: #FFFFFF; font-size: 8pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.v8 { color: #464646; font-size: 8pt; font-family: "Verdana, Arial,Thonburi"; text-decoration: none }
.v8w  { color: #FFFFFF;  font-weight: bold ; font-size: 8pt; font-family: "Verdana, MS Sans Serif, AngsanaUPC, Arial,Tahoma, Thonburi "; text-decoration: none }
.head10 { color: #783E0C; font-weight: bold ; font-size: 10pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.fp10 { color: #783E0C; font-size: 10pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.hi18  { color: #E60000 ; font-size: 18pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.hi12  { color: #525252; font-weight: bold ; font-size: 12pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Tahoma, Thonburi"; text-decoration: none }
.v9w  { color: #FFFFFF; font-size: 10pt; font-family: "Verdana, MS Sans Serif, AngsanaUPC, Arial,Tahoma, Thonburi "; text-decoration: none }
.v8b  { color: #000000; font-size: 8pt; font-family: "Verdana, MS Sans Serif, AngsanaUPC, Arial,Tahoma, Thonburi "; text-decoration: none }
.mred12 { color: #E40000; font-size: 12pt; font-family: "MS Sans Serif, AngsanaUPC, Arial, Verdana,Thonburi"; text-decoration: none }
A:link {  COLOR: #4B7126; text-decoration: none }
A:visited {  COLOR: #4D4D4D; text-decoration: none}
A:hover {	TEXT-DECORATION: underline}
</STYLE>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" bgcolor="#F6FBFE">
<form action="manage/c_login.php" name="frmmain" id="frmmain" method="post">
<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#F6FBFE" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->
<div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td bgcolor="#B6DFF7"> <table width="80%" border="0" cellspacing="8" cellpadding="0">
                        <tr> 
                          <td width="140">&nbsp;</td>
                        </tr> 
												<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="marquee/ann_main.php"><img src="images/bullet2.gif" border="0">   Running Text  / ข้อความเลื่อน </A> </td>
                        </tr>								
												<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="alert/ann_main.php"><img src="images/bullet2.gif" border="0">   Beauty Alert / ข่าวหลัก</A> </td>
                        </tr>							
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="announce/ann_main.php"><img src="images/bullet2.gif" border="0">  Beauty Current / ข่าว</A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="grandsale/ann_main.php"><img src="images/bullet2.gif" border="0">  Beauty Grand Sale </A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="gossip/ann_main.php"><img src="images/bullet2.gif" border="0">  Beauty Gossip </A> </td>
                        </tr>		
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="tips/ann_main.php"><img src="images/bullet2.gif" border="0">  Beauty Tips </A> </td>
                        </tr>											
                       <!-- <tr> 
                          <td valign="middle"><A HREF="gallery/gallery_subject.php">gallery / รวมภาพการแข่งขัน</A></td>
                        </tr> -->

						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="vote/main.php"><img src="images/bullet2.gif" border="0">  Vote / ตั้งหัวข้อ Vote</A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="clinicTop/ann_main.php"><img src="images/bullet2.gif" border="0">  Top 9 Skin Clinic</A> </td>
	<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="advice/ann_main.php"><img src="images/bullet2.gif" border="0"> Beauty Advice</A> </td>
                        </tr>			
			
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="webboard/main.php"><img src="images/bullet2.gif" border="0">   Webboard  /  กระดานสนทนา</A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="profile/profile_main.php"><img src="images/bullet2.gif" border="0">  Profile / สมาชิก</A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="access/main.php"><img src="images/bullet2.gif" border="0">  Daily Access </A> </td>
                        </tr>
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A HREF="banner/detail.php"><img src="images/bullet2.gif" border="0">  จัดการ Banner และ Head </A> </td>
                        </tr>						
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A  target="_blank" HREF="http://www.sanngam.com/vhcs2/tools/pma/phpMyAdmin-tis620/index.php"><img src="images/bullet2.gif" border="0">  จัดการฐานข้อมูลอย่างละเอียด   user : sanngam/1234</A>  </td>
                        </tr>	
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A  target="_blank" HREF="http://www.sanngam.com/vhcs2/tools/webmail/src/login.php	"><img src="images/bullet2.gif" border="0">  จัดการ mail Webmaster@sanngam.com   user: webmaster@sanngam.com/webmaster</A> </td>
                        </tr>				
						<tr> 
                          <td valign="middle">&nbsp;&nbsp;&nbsp;<A  target="_blank" HREF="http://www.sanngam.com/vhcs2"><img src="images/bullet2.gif" border="0">  จัดการ Web Hosting Account   user: sanngam.com/3107907</A> </td>
                        </tr>										
										
                        <tr> 
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>

<SCRIPT LANGUAGE="JavaScript">
function goto_main(code)
	{


		if(!frmmain.a_username.value){
			alert("กรุณระบุ User Name");
			frmmain.a_username.focus();
			return false;
		}
				if(!frmmain.a_password.value){
			alert("กรุณระบุรหัสผ่าน");
			frmmain.a_password.focus();
			return false;
		}
				
		//alert("dd"+frmmain.ADMINISTRATOR_ID.value);
		frmmain.submit();
	
	}
</SCRIPT>
<?ob_end_flush(); ?>