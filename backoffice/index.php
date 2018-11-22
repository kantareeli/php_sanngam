<?
session_unregister("ADMINISTRATOR_ID");
?>
<html>
<head>
	<title>Login SanNgam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
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

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<form action="manage/c_login.php" name="frmmain" id="frmmain" method="post">

<div align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr> 
                    <td bgcolor="#B6DFF7" align="center">
					 <table width="80%" border="0" cellspacing="8" cellpadding="0">
                        <tr> 

                          <td>&nbsp;  SanNgam Web Portal Back Office </td>
                        </tr>
                      </table>
					  
				    </td>
                  </tr>
                </table>
				<br>
				
				<TABLE cellSpacing=0 cellPadding=0 align=center border=0 bgcolor="#FFFFFF">
        <TBODY>
        <TR>
          <TD vAlign=top width=13><IMG height=16 
            src="images/border_left_01.jpg" width=13></TD>
          <TD width=265 background=images/border_center_02.jpg 
          height=9></TD>
          <TD vAlign=top width=11><IMG height=16 
            src="images/border_right_03.jpg" width=16></TD></TR>
        <TR>
          <TD><IMG height=140 src="images/border_left_04.jpg" 
width=13></TD>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 align=center border=0>
              <TBODY>
              <TR>
                <TD align=middle width=269 background=""><IMG height=25 alt="" 
                  src="images/text_login.gif" width=224 vspace=5 border=0> 
                  <TABLE class=m10 cellSpacing=1 cellPadding=3>
                    <TBODY>
                    <TR>
                      <TD align=right>Login :</TD>
                      <TD width=144> <input type="text" name="a_username" ></TD></TR>
                    <TR>
                      <TD align=right>Password :</TD>
                      <TD><input type="password" name="a_password"></TD></TR>
                    <TR>
                      <TD align=center colSpan=2  ><INPUT TYPE="submit"  onclick="goto_main(a_username.value)" value="OK"> 
                    </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
          <TD><IMG height=140 src="images/border_right_06.jpg" 
          width=16></TD></TR>
        <TR>
          <TD vAlign=top><IMG height=15 src="images/border_left_07.jpg" 
            width=13></TD>
          <TD background=images/border_left_08.jpg></TD>
          <TD vAlign=top><IMG height=15 src="images/border_right_09.jpg" 
            width=16></TD></TR></TBODY></TABLE>
				</td>
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