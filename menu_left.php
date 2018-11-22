<?
include("initial/connect.php");

?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<!--Start Left Bar -->
	<table width="222" border="0" cellspacing="0" cellpadding="0"   bgcolor="#feeefb">
   
	  <tr>
        <td>
		<table width="220" border="0" cellspacing="0" cellpadding="0" align="center" class="fp1_10" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2"><img src="images/welcome.jpg" width="209" height="24"><br></td>
    </tr>
	 <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="index2.php" class="newlinkPink">Home</a><br>
      <img src="images/bar1_blue.jpg"></td>
  </tr>
  <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="in_beautyalert_detail.php" class="newlinkPink">Beauty Alert</a><br><img src="images/bar1_blue.jpg"></td>
  </tr>
   <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="in_current.php" class="newlinkPink">Beauty Current</a><br><img src="images/bar1_blue.jpg"></td>
  </tr>
    <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="in_grandsale.php" class="newlinkPink">Beauty Grand Sale</a><br><img src="images/bar1_blue.jpg"></td>
  </tr>
    <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="in_gossip_detail.php" class="newlinkPink">Beauty Gossip</a><br><img src="images/bar1_blue.jpg"></td>
  </tr>
    <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="in_tips.php" class="newlinkPink">Beauty Tips</a><br><img src="images/bar1_blue.jpg"></td>
  </tr>
    <tr>
    <td width="55" align="right" ><img src="images/bl1B.jpg" width="14" height="16" vspace="3" hspace="3"><br><img src="images/spacer.gif" height="5"></td>
    <td width="165">&nbsp;<a href="webboard.php" class="newlinkPink"  target="_blank">Beauty Talk</a><br><img src="images/spacer.gif" height="5"></td>
  </tr>
</table>		</td>
      </tr>
	  
	     <tr>
        <td  bgcolor="#FFFFFF">
<table width="222"  border="0" cellpadding="0" cellspacing="0">
<? if ( isset($_SESSION['memberUser'])  && ($_SESSION['memberUser']<> "") ){?>
<tr>
		<td> <img src="images/BeautySignin_04.gif" width="222" ></td>
	</tr>
	<tr>
		<td background="images/BeautySignin_02.gif">
			 
                  <DIV class="m10bB" align=center>ยินดีต้อนรับ คุณ  <?=$_SESSION['memberUser']?>
                  		</DIV></td>
	</tr>
	<tr>
		<td>
			<img src="images/BeautySignin_03.gif" width="222" height="14" alt=""></td>
	</tr>
	
<? }else{?>
	<tr>
		<td><img src="images/BeautySignin_01.gif" width="222" height="38" alt=""></td>
	</tr>
	<tr>
		<td background="images/BeautySignin_02.gif">
			 <FORM name="fmSign" action="signin.php" method="post">
                  <DIV class=style20 align=center>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="m8bB" align="right"> user name :   </td>
    <td><INPUT id=login size=12 name=login></td>
  </tr>
  <tr>
    <td  class="m8bB" align="right">password : </td>
    <td><INPUT id=pass type=password size=12 name=pass></td>
  </tr>
  <tr><td colspan="2" align="center"><input name="" type="image" src="images/bt_signin.gif" /></td></tr>
</table>

                  		</DIV></FORM></td>
	</tr>
	<tr>
		<td>
			<img src="images/BeautySignin_03.gif" width="222" height="14" alt=""></td>
	</tr>
	<? }?>
</table>
		
		</td>
		</tr>
      <tr>
        <td><a href="register.php" target="_blank"><img src="images/register.jpg" border="0"></a></td>
      </tr>
      <tr>
        <td><a href="http://www.sanngam.com/in_hospital.php?Sprovince=%B5%C3%D1%A7&Search=%A4%E9%B9%CB%D2"><img src="images/beauty_data.jpg" width="222" height="221" border="0"></a></td>
      </tr>
<?
    $sqlclinicTop = "select  nPicture  from cbanner where  gaOrder= 1 ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<8) {

		$nPicture= $row[nPicture];
		$ntittle= $row[ntittle];
		if (strlen($ntittle)>=100){		$ntittle=substr($ntittle,0,100)." ...";}
 ?>
  
	        <tr>
        <td><a href="<?=$ntittle?>"  target="_parent"><img src="images/beautyalertfile/<?=$nPicture?>"  width="222" border="0"> </a></td>
      </tr>
 <? $inicount++;}?>
      <tr>
        <td  bgcolor="#fc81e0" align="center"><img src="images/top_clinic.jpg" width="216" height="95"></td>
      </tr>
      <tr>
        <td background="images/clinic.jpg"><div align="center" class="m10wB">9 คลินิคผิวหนังยอดนิยม</div>
            <div class="m10w">	<?
    $sqlclinicTop = "select  *  from clinicTop ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<8) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		if (strlen($ntittle)>=100){		$ntittle=substr($ntittle,0,100)." ...";}
 ?>
  <img src="images/bl1.gif"   hspace="4" vspace="0"> <a href="in_clinicTop_detail.php?clinicTopID=<?=$Id?>"  class="newlinkWhite"> <?=$ntittle?></a>
  <br>
 <? $inicount++;}?>
 
          </div></td>
      </tr>
		<?
    $sqlclinicTop = "select  nPicture  from cbanner where  gaOrder<> 1 ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<8) {

		$nPicture= $row[nPicture];
		$ntittle= $row[ntittle];
		if (strlen($ntittle)>=100){		$ntittle=substr($ntittle,0,100)." ...";}
 ?>
  
	        <tr>
        <td><a href="<?=$ntittle?>"  target="_parent"><img src="images/beautyalertfile/<?=$nPicture?>"  width="222" border="0"> </a></td>
      </tr>
 <? $inicount++;}?>
 
		</td>
      </tr>
    </table>
	<!--End Left Bar -->