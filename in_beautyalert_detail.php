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
	<?  include("backoffice/manage/c_access.php"); ?>
	<!--End Left Bar --></td>
			<td  valign="top" >
			<!--Start Body -->
			<table width="100%" border="1" cellspacing="0" cellpadding="0"  bordercolor="#CCCCCC">
  <tr>
    <td>

		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="m10" bgcolor="#FFFFFF">
  <tr>
    <td width="61">&nbsp;</td>
    <td width="698" align="left"><img src="images/beauty_alert.jpg"></td>
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
				  <? if ( isset($beautyalertID) && ($beautyalertID <> "") ) {
include("initial/connect.php");
    $sqlbeautyalert = "select  *  from beautyalert where Id ='$beautyalertID'";
	$stmt = mysql_query($sqlbeautyalert) or die("Query failed sqlbeautyalert    : ".mysql_error());
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
                                <TR><TD vAlign=top class=m10>
								<STRONG><a name="<?=$Id?>"></a><?=$ntittle?></STRONG><BR><?if (isset($nPicture) and $nPicture<>''){?><A HREF="images/beautyalertfile/<?=$nPicture?>" target="imagepop"><IMG 
                                alt="คลิ๊กเพื่อดูขนาดจริง" hspace=5 
                                src="images/beautyalertfile/<?=$nPicture?>" 
                                 align=<?=$picalign?>  vspace=5 border=0> </A><?}?>
                                <?=$ndesc?><BR><div align="left" valign="buttom" class=m8> <BR><FONT COLOR="707F2A">แก้ไขวันที่ <?=$update_date?></FONT></div>
                               </TD></TR></TABLE>
                                
	<?$inicount++;} }?>
                       <br>
					   
					   
					   <hr  color="#00CCFF">
					   <div align="left"   class="m10bB">ข่าวล่าสุด</div>
					   <table width="500" border="0" cellspacing="3" cellpadding="0" class="m8">
								
								<?
    $sqlbeautyalert = "select  *  from beautyalert ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlbeautyalert) or die("Query failed sqlbeautyalert    : ".mysql_error());
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
	if (strlen($ndesc)>=355){		$ndesc=substr($ndesc,0,355)."   <A HREF='inbeautyalert.php#".$Id."' >อ่านต่อ</A>...";}
//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$update_date= $uday."/".$umonth."/".$uyear; ?>
		
  <tr><td valign="top"><?if (isset($nPicture) and $nPicture<>''){?><A HREF="images/beautyalertfile/<?=$nPicture?>" target="imagepop">
  <IMG  alt="คลิ๊กเพื่อดูขนาดจริง" hspace=5  src="images/beautyalertfile/<?=$nPicture?>"  width=200  align="left"   border="0"> </A><?}?></td><td align="left" valign="top"><a href="in_beautyalert_detail.php?beautyalertID=<?=$Id?>"><?=$ntittle?></a></td></tr>
 <? $inicount++;}?>
				</table>  <br>
             <div align="right"><a  href="in_beautyalert_detail.php"   class="newlinkBlue" >อ่านทั้งหมด..</a></div>
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
