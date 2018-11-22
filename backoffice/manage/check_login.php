<?
include("../connect/connect_oci.php");
$query = "select count(*) countrecord  from LOGIN where LOGIN_USERNAME='$username1' and LOGIN_PASSWORD='$password1' ";	
$result = mysql_query($query) or die("Query failed");
$row=mysql_fetch_array($result);
$numrecord=$row["countrecord"];
	

if($numrecord<=0){
?>
<HTML>
<HEAD>
<TITLE>MCU ADMINISTRATION</TITLE>
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
<BODY topmargin=0 leftmargin=0 bgcolor=#DCEECB>
<FORM METHOD=POST ACTION="" name="frmmain">
<TABLE cellSpacing=1 cellPadding=0 width=600 bgColor=#000000 border=0 align=center>
  <TBODY>
  <TR>
      <TD align=middle bgColor=#ffffff> 
		<br><br>
        <TABLE width=300>
        <TBODY>
        <TR>
          <TD class=menutype align=left bgColor=#990000 colSpan=2>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD width=11 
                height=24></TD>
                <TD class=menutype 
                 ><FONT 
                  color=#ffffff><B>
                  เข้าระบบ สำหรับ ADMIN</B> </FONT></TD>
                <TD width=11 
                height=24></TD></TR></TBODY></TABLE>
				
				</TD></TR>
       
        <TR>
          <FORM name=frmmain action="check_login.php" method=post enctype="multipart/form-data">
		  <INPUT type=hidden value=Login name=mode> 
          <TD>Username : </TD>
          <TD><INPUT class=violet name="username"></TD></TR>
        <TR>
          <TD>Password : </TD>
          <TD><INPUT class=violet type=password name="password"></TD></TR>
        <TR>
          <TD align=middle colSpan=2><INPUT type=submit value="  เข้าระบบ  " style="cursor:hand" onclick="return send_data()">
		</FORM>
            <P></P></TD></TR>
        </TBODY></TABLE>
		<BR><BR>
		 </TBODY></TABLE>
		 
		     </FORM>

  </BODY></HTML>

<?
	echo "<SCRIPT LANGUAGE=\"JavaScript\"> alert('Username หรือ Password ไม่ถูกต้อง'); window.open(\"\.\.\/index.php\",\"_top\"); </SCRIPT>";

}else {

$sql_level="select LOGIN_LEVEL,LOGIN_ID from LOGIN where LOGIN_USERNAME='$username1' and LOGIN_PASSWORD='$password1' ";
$stmt_level=mysql_query($sql_level);
$row=mysql_fetch_array($stmt_level);
$level=$row["LOGIN_LEVEL"];
$id=$row["LOGIN_ID"];

					

					if($level==1){
					session_start();
					session_register("usernameid");
					$usernameid = $id;
					header("Location: home.php ");
					}else if($level==2){
					session_start();
					session_register("usernameid");
					$usernameid = $id;
					header("Location: home2.php ");
					
					}
}?>