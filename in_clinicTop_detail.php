<? session_start(); ?>
<html >
<head>
	<title>SanNgam แสนงาม</title>
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
			<table width="100%" border="1" cellspacing="0" cellpadding="0"  bordercolor="#CCCCCC">
  <tr>
    <td>

		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="m10" bgcolor="#FFFFFF">
  <tr>
    <td width="61">&nbsp;</td>
    <td width="698" align="left"><img src="images/inBeautyCurrent.gif"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="98%" align=center>
                  <TBODY><TR><TD>
<?  include("initial/connect.php"); ?>
<?  include("backoffice/manage/c_access.php"); ?>	
<?
    $sqlclinicTop = "select  *  from clinicTop where Id ='$clinicTopID'";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt)) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		$ndesc= $row[ndesc];
		$nPicture= $row[nPicture];
		$update_date= $row[lastUpdate];
$ndesc = ereg_replace (chr(13),"<br>",$ndesc );

//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$update_date= $uday."/".$umonth."/".$uyear; ?>
		<?if ($inicount%2==0){ $bgcolor="FFFFFF"; $picalign="right";}else{$bgcolor="FFFFFF"; $picalign="left";}?>
								
								<TABLE cellPadding=2 width="100%" align=center bgColor=<?=$bgcolor?> border=0>
                                <TBODY><TR><TD vAlign=top class=m10>
								<STRONG><a name="<?=$Id?>"></a><?=$ntittle?></STRONG><BR><?if (isset($nPicture) and $nPicture<>''){?><A HREF="images/clinicTopfile/<?=$nPicture?>" target="imagepop"><IMG 
                                alt="คลิ๊กเพื่อดูขนาดจริง" hspace=5 
                                src="images/clinicTopfile/<?=$nPicture?>" 
                                 align=<?=$picalign?>  vspace=5 border=0> </A><?}?>
                                <?=$ndesc?><BR><div align="left" valign="buttom" class=m8> <BR><FONT COLOR="707F2A">แก้ไขวันที่ <?=$update_date?></FONT></div>
                               </TD></TR></TBODY></TABLE>
                                
	<?$inicount++;}?>
                       <br>
					   <hr  color="#00CCFF">
					   <div align="left"   class="m10bB">Top 9 Skin  Clinic</div>
					   <table width="259" border="0" cellspacing="3" cellpadding="0" class="m8">
							
								<?
    $sqlclinicTop = "select  *  from clinicTop ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<10) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
	//	$ndesc= $row[ndesc];
		$nPicture= $row[nPicture];
	//	$update_date= $row[lastUpdate];
	$ntittle=substr($ntittle,0,100)."...";
	//	$gaDesc=substr($gaDesc,0,355)."...";
	//	$gaDesc = ereg_replace (chr(13),"<br>",$gaDesc );
	if (strlen($ndesc)>=355){		$ndesc=substr($ndesc,0,355)."   <A HREF='inclinicTop.php#".$Id."' >อ่านต่อ</A>...";}
//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$update_date= $uday."/".$umonth."/".$uyear; ?>
		
  <tr><td valign="top"><?if (isset($nPicture) and $nPicture<>''){?><A HREF="images/clinicTopfile/<?=$nPicture?>" target="imagepop"><IMG 
                                alt="คลิ๊กเพื่อดูขนาดจริง" hspace=5 
                                src="images/clinicTopfile/<?=$nPicture?>" 
                                height=40 align=<?=$picalign?>  border=0> </A><?}?></td><td align="left" valign="top"><a href="in_clinicTop_detail.php?clinicTopID=<?=$Id?>"><?=$ntittle?></a></td></tr>
 <? $inicount++;}?>
				</table>  <br>
             <div align="right"><a  href="in_current.php"   class="newlinkBlue" >อ่านทั้งหมด..</a></div>
                         </TD></TR></TBODY></TABLE>
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
