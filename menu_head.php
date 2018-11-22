<?
include("initial/connect.php");

?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<tr>
    <td width="993" align="center"><img src="images/beautyalertfile/bar_head.jpg"><!--<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
width="987" height="175" id="text" align="">
<param name=movie value="headSanNgam.swf"><param name=quality value=high><param name=wmode value=transparent>
<embed src="headSanNgam.swf" quality=high wmode=transparent width="987" height="175" name="text" align=""
type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed></object> --></td>
  </tr>
  <tr>
    <td height="40">
	<table  border="0" cellspacing="0" cellpadding="0" width="100%" >
  <tr>
  <td width="2"></td>
  
    <td width="206" valign="middle"  bgcolor="#bfe8fc"><a href="register.php" target="_blank"><img src="images/register_member.gif" width="197" height="37" border="0" /></a>
      <!-- <img src="images/bt_register.jpg" border="0" >&nbsp;
	--><!--<img src="images/bt_login.jpg" width="94" height="29"> --></td>
    <td width="20"  bgcolor="#bfe8fc">&nbsp;</td>
    <td   class="m10"  bgcolor="#bfe8fc">&nbsp;<marquee scrolldelay="250"  direction="left">
	<?
	    $sqlnews = "select  ntittle  from tbl_marquee where   gaOrder = 1";
	$stmt = mysql_query($sqlnews) or die("Query failed sqlnews    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<5) {

		echo $row[ntittle];
		
		}
		?>
	</marquee><!--	  ชุมชนแห่งความรู้ด้านความงาม และสุขภาพ  รอบด้านและเป็นกลาง  พบกับทุกคำตอบเกี่ยวกับความงามทุกประเภท  ตลอด 24 ชั่วโมง --></td>
	<td width="6"></td>
  </tr>
</table>

  </td>
  </tr>