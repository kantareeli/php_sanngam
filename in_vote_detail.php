<? session_start(); ?>
<?
include("initial/connect.php");
include("backoffice/manage/c_access.php");
$voteEnable = 1;
$revote = '0';

//echo "test".$choice;
if 	(isset($modevote) && ($modevote=="vote")) {	
			
			$choice = $choice;
			if( $choice ==""){?>
				<SCRIPT LANGUAGE="JavaScript">
				alert("กรุณาเลือกหัวข้อโหวต..")
				window.history.back()
				</SCRIPT>
			<?
			}
			$sql = "update tbvote set $choice = $choice+1 where ID = " . $_REQUEST['voteID'];
		 	mysql_query($sql);
			$_SESSION['vote'.$voteID] = '1';
			$revote = '0';
			
}elseif 	(isset($modevote) && ($modevote=="reVote")) {	
			$_SESSION['vote'.$voteID] = '';
			$revote = '0';
			
}elseif (isset($modevote) && ($modevote=="voteResult")) {	
			$_SESSION['vote'.$voteID] =  '0' ;
			$revote = '1';
}	


//echo  " modevote-".$modevote." voteID-".$voteID." _SESSION-".$_SESSION['vote'.$voteID]
			?>
<html >
<head>
	<title>SanNgam แสนงาม โหวต</title>
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
			<form action="" name="frmmain" id="frmmain" method="get" enctype="multipart/form-data">
			<INPUT TYPE="hidden" name="modevote">
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
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="98%" align=center>
                  <TR><TD>
				
						<!-- Vote -->

<?if( $voteEnable == 1){?>

<TABLE  width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
	<TD  width="270" valign=top>
	<?  
	if (isset($voteID) && $voteID != "" ) {
	$sql = "select * from tbvote where ID = '$voteID'  ";
	}else{
	$sql = "select * from tbvote where vEnable = 1  ";
	}
			$rs = mysql_query($sql) or die("DB Selection error : " . mysql_error());
			while($row=mysql_fetch_array($rs)) 	{ 
			
			?>

				<INPUT TYPE="hidden" name="voteID" value="<?=$row[ID]?>">
			<TABLE  width="270" height=220 border="1" cellpadding="0" cellspacing="0" bordercolor=D9D9D9 >
					<TR>
					<TD colspan=2> 
		<? if ($_SESSION['vote'.$row[ID]] == ''   ){	?>
								<TABLE  width="270" height=185  border="0" cellpadding="0" cellspacing="2"  class=m8 >
									<TR>
										<TD colspan=2    class="m8B"><? echo $row[vSubject] ?></TD>
									</TR>
									<TR  bgcolor=EFEFEF>
											  <td align="right">	<input type="radio" name="choice" value="vAns1_p"></td>
											   <td><? echo $row[vAns1] ?></td>
									</TR>
									<TR>
											  <td align="right"><input type="radio" name="choice" value="vAns2_p"></td>
											   <td><? echo $row[vAns2] ?></td>
									</TR>
									<TR  bgcolor=EFEFEF>
											  <td align="right"><input type="radio" name="choice" value="vAns3_p"></td>
											   <td><? echo $row[vAns3] ?></td>
									</TR>
									<TR>
											  <td align="right"><input type="radio" name="choice" value="vAns4_p"></td>
											  <td><? echo $row[vAns4] ?></td>
									</TR>
									<TR>
										<TD align=center colspan=2> 
										<INPUT TYPE="button" value="Vote." onClick="vote()">&nbsp;&nbsp;&nbsp;
										<INPUT TYPE="button" value="ดูผล Vote."  onclick="voteResult()"></TD>
									</TR>
								</TABLE>
	<? } else {
				$Gp1 = 0;
				$Gp2 = 0;
				$Gp3 = 0;
				$Gp4 = 0;
				 $allvote = $row[vAns1_p] + $row[vAns2_p] + $row[vAns3_p] + $row[vAns4_p];?>
								<TABLE   border="0" cellpadding="2" cellspacing="3"  align="center" width="500">
									<TR>
										<TD colspan=3 class="m8B"><? echo $row[vSubject] ?></TD>
									</TR>
									<TR  class=m10 align=left bgcolor="e4f4fb">
                                                            <td align="right" valign="top"  width="200"><? echo $row[vAns1] ?>&nbsp;</td>
                                                            <td align="left" valign="top"  width="250"><?  if (  isset($allvote) && $allvote> 0 ) $Gp1 = number_format(($row[vAns1_p]/$allvote)*100); ?>
																	<table  border="0" cellspacing="0" cellpadding="0">
																					  <tr> 
																						<td bgcolor="#99CC00"><img src="images/spacer.gif" vspace="3"  height="10"  width="<?=$Gp1*2.5?>"></td>
																					  </tr>
																	</table>
															</td>
															<td align="right" valign="top" width="50" ><?=$Gp1?>%</td>
									</TR>
									<TR class=m10 align=left>
                                                            <td align="right" valign="top"   ><? echo $row[vAns2] ?>&nbsp;</td>
                                                            <td align="left" valign="top" ><?  if (  isset($allvote) && $allvote> 0 )  $Gp2 = number_format(($row[vAns2_p]/$allvote)*100); ?>
																	<table border="0" cellspacing="0" cellpadding="0">
																					  <tr> 
																						<td bgcolor="#CC8400" ><img src="images/spacer.gif" vspace="3" height="10" width="<?=$Gp2*2.5?>"></td>
																					  </tr>
																	</table>
															</td>
															<td align="right" valign="top" ><?=$Gp2?>%</td>
									</TR>
									<TR  class=m10 align=left   bgcolor="e4f4fb">
                                                            <td align="right" valign="top" ><? echo $row[vAns3] ?>&nbsp;</td>
                                                            <td align="left" valign="top" ><?   if (  isset($allvote) && $allvote> 0 )  $Gp3 = number_format(($row[vAns3_p]/$allvote)*100); ?>
																	<table border="0" cellspacing="0" cellpadding="0">
																					  <tr> 
																						<td bgcolor="#EF99D5"><img src="images/spacer.gif"  vspace="3" height="10"  width="<?=$Gp3*2.5?>"></td>
																					  </tr>
																	</table>															
															</td>
															<td align="right" valign="top" ><?=$Gp3?>%</td>
									</TR >
									<TR class=m10 align=left>
                                                            <td align="right" valign="top" ><? echo $row[vAns4] ?>&nbsp;</td>
                                                            <td align="left" valign="top" ><?  if (  isset($allvote) && $allvote> 0 )  $Gp4 = number_format(($row[vAns4_p]/$allvote)*100); ?>
																	<table border="0" cellspacing="0" cellpadding="0">
																					  <tr> 
																						<td bgcolor="#84CBEC"><img src="images/spacer.gif"  vspace="3" height="10"  width="<?=$Gp4*2.5?>"></td>
																					  </tr>
																	</table>																	
															</td>
															<td align="right" valign="top" ><?=$Gp4?>%</td>
									</TR>
									<TR>
										<TD align=center colspan=3 class=m10>จากผู้ Vote จำนวน <?=$allvote?> ท่าน</TD>
									</TR>
									<?if ($revote =='1'){?> 
									<TR>
										<TD align=center colspan=3><INPUT TYPE="button" value="ร่วม Vote."  onclick="reVote()"></TD>
									</TR><?}?>
								</TABLE>
	<?}}?>
				</TD>
			</TR>
		</TABLE>
	</TD>
	<TD  width="1">&nbsp;</TD>
</TR>
</TABLE><BR>

<?}?>
<!-- End Vote -->		
	
                       <br>
					   <hr  color="#00CCFF"><div align="left"   class="m10bB">หัวข้อ Vote</div>
					   <table width="259" border="0" cellspacing="3" cellpadding="0" class="m8">
								
								<?
								// ID  vSubject  vAns1  vAns2  vAns3  vAns4  vEnable  vAns1_p  vAns2_p  vAns3_p  vAns4_p  vReEnable  
    $sqlnews = "select  *  from tbvote  where vReEnable = '1'  " ;
	$stmt = mysql_query($sqlnews) or die("Query failed sqlnews    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<10) {

		$Id= $row[ID];
		$vSubject= $row[vSubject];
		$vAns1= $row[vAns1];
		$vAns2= $row[vAns2];
		$vAns3= $row[vAns3];
		$vAns4= $row[vAns4];
	
 ?>
		
  <tr><td valign="top" width="5"><img src="images/bl4.gif" vspace="3"></td><td align="left" valign="top"><a href="in_vote_detail.php?voteID=<?=$Id?>"><?=$vSubject?></a></td></tr>
 <? $inicount++;}?>
				</table>  <br>
             <div align="right"><a  href="in_vote_detail.php"   class="newlinkBlue" >อ่านทั้งหมด..</a></div>
                         </TD></TR></TABLE>
	</td>
  </tr>
  </table>
</td>
  </tr>
</table></form>
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
<script language="JavaScript" type="text/JavaScript">
function vote(){
			frmmain.modevote.value = 'vote';
			frmmain.action = '<?echo $PHP_SELF?>';
		    frmmain.submit();		
}
function voteResult(){
			frmmain.modevote.value = 'voteResult';
			frmmain.action = '<?echo $PHP_SELF?>';
		    frmmain.submit();		
}
function reVote(){
			frmmain.modevote.value = 'reVote';
			frmmain.action = '<?echo $PHP_SELF?>';
		    frmmain.submit();		
}


function MM_openBrWindow(theURL) { //v2.0
  window.open(theURL,'','toolbar=0,location=0,status=0,menubar=0,scrollbars=0,resizable=0,width=500, height=500');
}

</script>
