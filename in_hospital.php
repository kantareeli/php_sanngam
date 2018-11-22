<? session_start(); ?>
<?
include("initial/connect.php");
include("backoffice/manage/c_access.php");
			?>
<html >
<head>
	<title>SanNgam แสนงาม </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	<link href="sanngam_main.css" rel="stylesheet" type="text/css">

</head>

<body  background="images/BG_flower.gif">


<table width="993" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
  <? include("menu_head.php"); ?>
  <tr>
    <td align="center">
	<!-- Start Middle 1 Boby-->
	<table width="987" border="0" cellspacing="2" cellpadding="0">

	<tr><td width="222" rowspan="4" valign="top" >
	<!--Start Left Bar -->
	<? include("menu_left.php"); ?>
	<!--End Left Bar --></td>
			<td  valign="top" >
			<!--Start Body -->
			<form action="#" name="frmmain" id="frmmain" method="get" enctype="multipart/form-data">
			<table width="100%" border="1" cellspacing="0" cellpadding="0"  bordercolor="#CCCCCC">
  <tr>
    <td>

		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="m10" bgcolor="#FFFFFF">
  <tr>
    <td width="61">&nbsp;</td>
    <td width="698" align="left"><img src="images/BeautyVote.gif"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="m8B">&nbsp;รวมข้อมูลสถานพยาบาลทั่วประเทศ</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>จังหวัด : 

	<select name="Sprovince">	
	<?


	$sqlProvince = "SELECT distinct(Province)  FROM hospital  order by Province ";
	$rs = mysql_query($sqlProvince) or die("Query failed sqlProvince    : ".mysql_error());
	$inicount = 0;	
	while($row=mysql_fetch_array($rs)) { 
		$Province= $row[Province];
	
 ?>
	<option value="<?=$Province?>"  <? if ( $Province==$Sprovince) echo "selected"; ?> ><?=$Province?></option>
	 <? $inicount++;}?>
	</select>
	&nbsp;<input name="Search" type="submit" value="ค้นหา">
	</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="98%" align=center>
                  <TR><TD>
				
						<!-- Vote -->


<TABLE  width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
	<TD  width="600" valign=top>


	
			<TABLE  width="600" height=220 border="1" cellpadding="0" cellspacing="0" bordercolor=D9D9D9 >
					<TR>
					<TD colspan=2> 
	<? if (isset($Sprovince) && ($Sprovince <> "" )) {?>
								<TABLE  width="600" height=185  border="0" cellpadding="0" cellspacing="2"  class=m8 >
																	    <TD  class="m8B">ลำดับ</TD>
																					

										<TD  class="m8B">ใบอนุญาต</TD>
									    <TD  class="m8B">ชื่อสถานพยาบาล</TD>
									    <TD  class="m8B">จำนวนเตียง</TD>
										<TD  class="m8B">ประเภท</TD>
									    <TD  class="m8B">จังหวัด</TD>
									    <TD  class="m8B">โทรศัพท์</TD>	
										<TD  class="m8B">เวลาเปิด</TD>	
								 <?
								 
								 ////**************เริ่มส่วนจัดการจำนวน  ต่อ 1 หน้า***************** 
if(!isset($countpage))$countpage = 1;
if(!isset($rowperpage)) $rowperpage = 20;	
//To count row 

	$sqlcoutsub = "select  count(*) as CC  from hospital  WHERE  Province = '$Sprovince' ";
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

		
//`Id`, `permitID`, `hospitalName`, `amountBed`, `hospitalType`, `Province`, `Phone`, `openTime`
    $sqlnews = "select  *  from hospital  WHERE  Province = '$Sprovince'  ORDER BY  hospitalName ASC   LIMIT $tfromrec, ".$rowperpage ;
	$stmt = mysql_query($sqlnews) or die("Query failed sqlnews    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt)) {
	
	$Id= $row[Id];
		$permitID= $row[permitID];
		$hospitalName= $row[hospitalName];
		$amountBed= $row[amountBed];
		$hospitalType= $row[hospitalType];
		$Province= $row[Province];
		$Phone= $row[Phone];
		$openTime= $row[openTime];
	
 ?>
		<? if ($inicount%2==0){ $bgcolor="EFEFEF"; $picalign="right";}else{$bgcolor="FFFFFF"; $picalign="left";}?>
									<TR bgcolor="<?=$bgcolor?>">
									    <TD  class="m8"><?=(($countpage-1)* $rowperpage )+$inicount+1?></TD>
										<TD  class="m8"><?=$permitID?></TD>
									    <TD  class="m8"><?=$hospitalName?></TD>
									    <TD  class="m8"><?=$amountBed?></TD>
										<TD  class="m8"><?=$hospitalType?></TD>
									    <TD  class="m8"><?=$Province?></TD>
									    <TD  class="m8"><?=$Phone?></TD>	
										<TD  class="m8"><?=$openTime?></TD>										
									</TR>
       <? $inicount++;}?>
								</TABLE>

		<? }?>
				</TD>
			</TR>
		</TABLE>

 <CENTER><?  
	  // --------------------Start show page number -----------------------------------------------------
$pagenum = 1;

if ($countpage > 1) {
	?>
                    <a href="in_hospital.php?Sprovince=<?=$Sprovince?>&countpage=<? print $countpage-1?>"  style="cursor:hand"><img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkL.gif" width="4" height="9" border="0"> 
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
                    <a  href="in_hospital.php?Sprovince=<?=$Sprovince?>&countpage=<? print $pagenum?>"  style="cursor:hand" class="newlinkPink8"><font color= '#D1006D' size='2'><b><? print $pagenum;?></b></font></a>&nbsp;&nbsp;&nbsp; 
              <?  } ?>
                    <?  $pagenum++;}
if ($countpage < $maxpage) {
?>
                    &nbsp;&nbsp;<a href="in_hospital.php?Sprovince=<?=$Sprovince?>&countpage=<? print $countpage+1?>"  style="cursor:hand"> 
                    <img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"> 
                    </a> 
                    <? }else{?>
                    &nbsp;&nbsp;<img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"><img src="images/webboard/arrow_pinkR.gif" width="4" height="9" border="0"> 
                    <?  }
// --------------------End show page number -----------------------------------------------------
?></CENTER>


	</TD>
	<TD  width="1">&nbsp;</TD>
</TR>
</TABLE><BR>


<!-- End Vote -->		
	

                         </TD></TR></TABLE></form>
	</td>
  </tr>
  </table>
</td>
  </tr>
</table>
			<!--End Body -->
			</td>
			</tr></table>
			</td>
	</tr>
	  <tr>
  <td>
    <? include("menu_bottom.php"); ?>
</td>
</tr>
</table>

<body>
</body>
</html>
