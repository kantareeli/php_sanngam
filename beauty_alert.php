
<html >
<head>
<title>   แสนงาม ดอทคอม แหล่งความรู้เกี่ยวกับความงามและสุขภาพ  </title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	SCROLLBAR-FACE-COLOR: #ffffff; SCROLLBAR-HIGHLIGHT-COLOR: #ffffff; 
	SCROLLBAR-SHADOW-COLOR: #31417b; SCROLLBAR-3DLIGHT-COLOR: #31417b; 
	SCROLLBAR-ARROW-COLOR: #31417b; SCROLLBAR-TRACK-COLOR: #ffffff; 
	SCROLLBAR-DARKSHADOW-COLOR: #c6cfd6; SCROLLBAR-BASE-COLOR: #ffffff
}
-->
</style>
	<link href="sanngam_main.css" rel="stylesheet" type="text/css">
</head>
<body >
<table width="480" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;<img src="images/beauty_alert.jpg"></td>
  </tr>
    <tr>
    <td bgcolor="#878787" class="m8wB">&nbsp;ข่าวสารในแวดวงความงานและสุขภาพ</td>
  </tr>

	
  <?
include("initial/connect.php");
    $sqlgrandsale = "select  *  from beautyalert ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlgrandsale) or die("Query failed sqlgrandsale    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<2 ) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		$ndesc= $row[ndesc];
		$nPicture= $row[nPicture];
		$update_date= $row[lastUpdate];
		$ndesc = ereg_replace (chr(13),"<br>",$ndesc );
		
if (strlen($ndesc)>=700){		$ndesc=substr($ndesc,0,700)."   <A HREF='in_beautyalert_detail.php?beautyalertID=".$Id."' class=newlinkBlue  target=_blank> More...</A>...";}

//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$update_date= $uday."/".$umonth."/".$uyear; ?>
		<?if ($inicount%2==0){ $bgcolor="e4f4fb"; $picalign="right";}else{$bgcolor="FFFFFF"; $picalign="left";}?>
		    <tr>    <td  class="m8">
	<?if (isset($nPicture) and $nPicture<>''){?><IMG src="images/beautyalertfile/<?=$nPicture?>"    align="center"  border=0><?}?>
      <div  class="m8gB" align="justify" ><?=$ntittle?></div><br>
	   <div class="m8"><?=$ndesc?>

         
	</div></td>
  </tr>
  <tr>
    <td  height="20"></td>
  </tr>
  	<? $inicount++;}?>
	
	
	
					
 
</table>
</body>
</html>
