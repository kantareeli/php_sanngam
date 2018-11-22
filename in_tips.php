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
    <td width="698" align="left"> <img src="images/BeautyTips.gif"> </td>
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
				  <?
include("initial/connect.php");
include("backoffice/manage/c_access.php");
    $sqltips = "select  *  from tips ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqltips) or die("Query failed sqltips    : ".mysql_error());
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
		<?if ($inicount%2==0){ $bgcolor="e4f4fb"; $picalign="right";}else{$bgcolor="FFFFFF"; $picalign="left";}?>
								
								<TABLE cellPadding=2 width="100%" align=center bgColor=<?=$bgcolor?> border=0 cellspacing="3">
                                <TBODY><TR><TD vAlign=top  class="m8">
								<STRONG><a name="<?=$Id?>"></a><?=$ntittle?></STRONG><BR><?if (isset($nPicture) and $nPicture<>''){?><A HREF="images/tipsfile/<?=$nPicture?>" target="imagepop"><IMG 
                                alt="คลิ๊กเพื่อดูขนาดจริง" hspace=5 
                                src="images/tipsfile/<?=$nPicture?>" 
                                 align=<?=$picalign?>  vspace=5 border=0> </A><?}?>
                                <?=$ndesc?><BR><div align="left" valign="buttom" class=m8> <BR><FONT COLOR="707F2A">Last Updated : <?=$update_date?></FONT></div>
                               </TD></TR></TBODY></TABLE>
                                
	<?$inicount++;}?>
                             
             
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
