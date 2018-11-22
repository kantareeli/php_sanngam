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

<title>Access Report</title>

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
<?  
	$monthName = array(1=>"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
   	$dayAmount =array(1=>"31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"); 
   	$thismonthName = $monthName[$frtxtMonth];
	$thisdayAmount = $dayAmount[$frtxtMonth]
   ?>
                            <td class="hp" align="center"><b>Access Log of <?=$monthName[$frtxtMonth]." ".$frtxtYear?></b> </td>
                          </tr>
                        </table>
                     </td>
                    </tr>
                    <tr> 
                      <td align="center"><br> 
<FORM action="main.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
                        <table width="500" border="0" cellspacing="0" cellpadding="0">
                          <tr> <td></td> </tr>
                          <tr>
                            <td>

                                <table width="100%" border="1" cellspacing="1" cellpadding="1"  bordercolor="#CCCCCC">
                                  <tr valign="middle"> 
                                    <td  align="center" bgcolor="#7AA0BA"><b> Date</b></td>
                                    <td  align="center" bgcolor="#7AA0BA"><b>View</b></td>
									<td  align="center" bgcolor="#7AA0BA"><b>Visitore</b></td>
                                    <td  align="center" bgcolor="#7AA0BA" ><b>User</b></td>
                                  </tr>    
	   <? 
 for ($i = 1; $i <=$thisdayAmount; $i++) {  
		if ($i%2==0){ $bgcolor="CCCCCC";}else{$bgcolor="FFFFFF"; }
		$startDate = $frtxtYear."-".$frtxtMonth."-".$i." 00:00:00";
		$endDate = $frtxtYear."-".$frtxtMonth."-".$i." 23:59:59";
		$sqlCount = "SELECT aUser from tbl_accesslog where aDate between '$startDate' and  '$endDate' ";
		$stmt = mysql_query($sqlCount) or die("Query failed sqlCount    : ".mysql_error());
		$inicount = 0;
		$allCount = 0;
		$visitorCount = 0;
		$userCount =0;
		while ($row = mysql_fetch_array($stmt)) 
		{  $allCount++;
		   if ($row[aUser]=='-'){ $visitorCount++;}else{$userCount++; }
		
		}
		
		?>
                                  <tr bgcolor="<? echo $col?>"> 
                                    <td align="center"><?=$monthName[$frtxtMonth]." ".$i.", ".$frtxtYear?> </td>
                                    <td  align="center" ><?=$allCount?></td>
									<td  align="center"><?=$visitorCount?></td>
                                    <td  align="center" ><?=$userCount?></td>
                                  </tr>
<? } ?>
                                </table></td>
                          </tr>

                          <tr>
                            <td align="right">

                        
							</td>
                          </tr>
                        </table>
						<br>
<br>
<br>

						<!--Start Hour -->
<table width="500" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
                          <tr> <td></td> </tr>
                          <tr>
                            <td>

                                 <table width="100%" border="1" cellspacing="1" cellpadding="1"  bordercolor="#CCCCCC">
                                  <tr valign="middle"> 
                                    <td  align="center" bgcolor="#7AA0BA"><b> Hour</b></td>
                                    <td  align="center" bgcolor="#7AA0BA"><b>View</b></td>
									<td  align="center" bgcolor="#7AA0BA"><b>Visitore</b></td>
                                    <td  align="center" bgcolor="#7AA0BA" ><b>User</b></td>
                                  </tr>    
	   <? 
 for ($i = 0; $i <=23; $i++) {  
		if ($i%2==0){ $bgcolor="CCCCCC";}else{$bgcolor="FFFFFF"; }
		$startDate = $frtxtYear."-".$frtxtMonth."-1 00:00:00";
		$endDate = $frtxtYear."-".$frtxtMonth."-31 23:59:59";
		$sqlCount = "SELECT aUser from tbl_accesslog where aDate between '$startDate' and  '$endDate'   and HOUR( aDate ) = '$i' ";
		$stmt = mysql_query($sqlCount) or die("Query failed sqlCount    : ".mysql_error());
		$inicount = 0;
		$allCount = 0;
		$visitorCount = 0;
		$userCount =0;
		while ($row = mysql_fetch_array($stmt)) 
		{  $allCount++;
		   if ($row[aUser]=='-'){ $visitorCount++;}else{$userCount++; }
		
		}
		
		?>
                                  <tr bgcolor="<? echo $col?>"> 
                                    <td align="center"><?=$i?> </td>
                                    <td  align="center" ><?=$allCount?></td>
									<td  align="center"><?=$visitorCount?></td>
                                    <td  align="center" ><?=$userCount?></td>
                                  </tr>
<? } ?>
                                </table></td>
                          </tr>

                          <tr>
                            <td align="right">

                        
							</td>
                          </tr>
                        </table>						
						<!--End Hour -->
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
