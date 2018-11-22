<?session_start();
if (!isset($adminID)){?>
	<script language = "javascript">
		window.location="../index.php";
	</script>
<?}
	
include("../../initial/connect.php");
?>
<html>
<head>

<title>Manage Beauty Talk</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #05588A;}
a:hover {color: #4F3EA4;}
</style>

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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


</td>
  </tr>
  <tr> 
    <td height="18" bgcolor="#D5C598">&nbsp; </td>
  </tr>
  <tr> 
    <td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="1" bgcolor="#D5C598"><img src="/_admin/images/clear.gif" width="1" height="1"></td>
          <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50">&nbsp;</td>
                <td height="280" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="hp" align="center">Access Log</td>
                          </tr>
                        </table>
                        </td>
                    </tr>
                    <tr> 
                      <td><br>
<FORM action="report_access.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
                        <table  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>&nbsp;From : </td>
    <td>	<? 
	$daynow = date("Y-m-d H:m:s");
	
		$uday = substr($daynow,8,2);
		$umonth = substr($daynow,5,2);
		$uyear = (string)(int)(substr($daynow,0,4));
		$utime = substr($update_date,11,8);
		$monthName = array(1=>"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

   // print("Month 5 is $monthName[5]<br>\n");

?>
	<SELECT NAME="frtxtMonth">
				<? for ($i = 1; $i <=12; $i++) {  ?>
				<OPTION VALUE="<?=$i?>" <? If ($i  == $umonth ) { echo " SELECTED" ;}?>><?=$monthName[$i]?></OPTION>
				<? }?>
			</SELECT>
			<SELECT NAME="frtxtYear">			
				<? for ($i = $uyear-1; $i <=$uyear; $i++) {  ?>
				<OPTION VALUE="<?=$i?>" <? If ($i  == $uyear ) { echo " SELECTED" ;}?>><?=$i?></OPTION>
				<? }?>
			</SELECT>
	</td>
    
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;<br><INPUT TYPE="submit" VALUE="OK"></td>

  </tr>
</table>

						</form>
                      
                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td align="center" valign="middle">
 </td>
  </tr>
</table>
</body>
<!--#include file="../../initial/disconnect.php" -->
</html>

