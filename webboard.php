<? session_start(); ?>
<html>
<head>
<title>Beauty Talk </title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">


<link href="sanngam_main.css" rel="stylesheet" type="text/css">
</head>

<body  background="images/BG_flower.gif">

<table width="993" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
  <tr> <td align="center" valign="top">
		
	<table width="760" border="0" cellpadding="0" cellspacing="5" bgcolor=white align="center">
		<tr>
		<td align="center" valign="top">
	<IMG SRC="images/head_talk.jpg"  BORDER="0" ALT="" ><BR>
	<div align=center   class="m12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="webboard_newtopic.php"  class="newlinkPink" ><B>ตั้งกระทู้ใหม่</B></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- ค้นหา : <INPUT TYPE="text" NAME="searchtext"> --></div>
	
	  <TABLE  cellSpacing=1 cellPadding=2 width="95%"        align=center border=0>
           
              <TR align=middle>
			   <TD  bgColor=#9bd1e7 height=35 class=m12w ><STRONG>ลำดับ</STRONG></TD>
                <TD  width=400 bgColor=#9bd1e7 height=35 class=m12w><STRONG>กระทู้</STRONG></TD>
                <TD   bgColor=#9bd1e7 class=m12w align=middle ><STRONG>ผู้ถาม /  วันที่</STRONG></TD>
                <TD  width=78 bgColor=#9bd1e7 class=m10w><STRONG>จำนวนคำตอบ</STRONG></TD>
                <TD  width=78 bgColor=#9bd1e7 class=m10w><STRONG>จำนวนผู้อ่าน</STRONG></TD></TR>
<? 
include("initial/connect.php");
 include("backoffice/manage/c_access.php");
////**************เริ่มส่วนจัดการจำนวน  ต่อ 1 หน้า***************** 
if(!isset($countpage))$countpage = 1;
if(!isset($rowperpage)) $rowperpage = 15;	
//To count row 

	$sqlcoutsub = "select count(*) CC  from wb_topic  where   Enable='1' ";
	$rscountsub = mysql_query($sqlcoutsub) or die("Query failed sqlcoutsub    : ".mysql_error());
	while($rowcountsub=mysql_fetch_array($rscountsub)) { 
			$maxrow= $rowcountsub[CC];
	}



	if (($maxrow%$rowperpage) <= 0) {
		$maxpage = (int) ($maxrow/$rowperpage);
	}
	else{
		$maxpage = (int) ($maxrow/$rowperpage) + 1;

	}

	if (($countpage=="") || ($countpage == 0)) {
		$countpage=1; 
	}

	if ($countpage > $maxpage){
		$countpage = $countpage -1;
	}

	$totalrec = ($rowperpage * $countpage);
	$fromrec = $totalrec - ($rowperpage - 1);
////**************สิ้นสุดส่วนจัดการจำนวน รายการ  ต่อ 1 หน้า***************** 
$tfromrec                  =   $fromrec - 1;
	$sqlpicture = "select * from wb_topic  where Enable='1' ORDER BY  tpID  DESC    LIMIT $tfromrec, ".$rowperpage ;
	$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
	while($row=mysql_fetch_array($rs)) { 

		$tpID= $row[tpID];
		$tpTopic= $row[tpTopic];
		$tpText= $row[tpText];
		$update_date= $row[tpDate];
		$tpName= $row[tpName];
		$tpEmail= $row[tpEmail];
		$counter= $row[counter];		
		//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$utime = substr($update_date,11,8);
		$update_date= $uday."/".$umonth."/".$uyear."    ".$utime;



			$sqlcoutsub = "select count(*) CC  from wb_reply  where  tpID='$tpID'";
			$rscountsub = mysql_query($sqlcoutsub) or die("Query failed sqlcoutsub    : ".mysql_error());
			while($rowcountsub=mysql_fetch_array($rscountsub)) { 
					$countsub= $rowcountsub[CC];
			}







?>            
			  <TR align=middle>
			   <TD class=m10  bgColor=#c3e3f1 class=m10w align="center"><?=$tpID?></TD>
                <TD class=m10 align=left bgColor=#c3e3f1 class=m10w>&nbsp;<A class=link  href="webboard_post.php?tpID=<?=$tpID?>"><?=$tpTopic?></A></TD>
                <TD class=m10  bgColor=#c3e3f1><A HREF="mailto:<?=$tpEmail?>"><?=$tpName?></A><br><?=$update_date?></TD>
                <TD class=m10 bgColor=#c3e3f1><?=$countsub?></TD>
				 <TD class=m10 bgColor=#c3e3f1><?=$counter?></TD></TR>
<?  }?>

</TABLE>

                    <CENTER><?  
	  // --------------------Start show page number -----------------------------------------------------
$pagenum = 1;

if ($countpage > 1) {
	?>
                    <a href="webboard.php?countpage=<? print $countpage-1?>"  style="cursor:hand"><img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0"> 
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<?  }else{?>
                    <img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <?  }

	if($maxpage==0){print "0&nbsp;&nbsp;&nbsp;";}
	while ($pagenum<=$maxpage) { 
?>
                    
              <?  if($countpage==$pagenum) { ?>
                    <img src="images/webboard/arrow_grayR.gif" width="4" height="9" border="0">
							 <font color= '#000000' size='2'><b><? print $pagenum;?></b></font>
					<img src="images/webboard/arrow_grayL.gif" width="4" height="9" border="0">&nbsp;&nbsp;&nbsp; 
              <?  } else { ?>
                    <a  href="webboard.php?countpage=<? print $pagenum?>"  style="cursor:hand"><font color= '#D1006D' size='2'><b><? print $pagenum;?></b></font></a>&nbsp;&nbsp;&nbsp; 
              <?  } ?>
                    <?  $pagenum++;}
if ($countpage < $maxpage) {
?>
                    &nbsp;&nbsp;<a href="webboard.php?countpage=<? print $countpage+1?>"  style="cursor:hand"> 
                    <img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"> 
                    </a> 
                    <? }else{?>
                    &nbsp;&nbsp;<img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"> 
                    <?  }
// --------------------End show page number -----------------------------------------------------
?></CENTER>
	<!-- End   webboard New-->
	
<BR>



		  </td>
        </tr>
      </table>
	  
	</td>
  </tr>
    <tr><td>
  
  <? include("menu_bottom.php"); ?>
  </td>
  </tr>
</table>

</td>
  </tr>
</table>
</body>
</html>
