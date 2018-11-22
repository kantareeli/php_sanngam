<? session_start(); ?>
<?
include("initial/connect.php");

?>
<html >
<head>
	<title>   แสนงาม ดอทคอม แหล่งความรู้เกี่ยวกับความงามและสุขภาพ  </title>
	<meta name="Keywords" content="   แสนงาม,   แหล่งความรู้, เกี่ยวกับ , ความงาม,สุขภาพ,เกมส์, ดูดวง, ฟังเพลง, ดาวโหลด, หางาน, เนื้อเพลง, เกม, กลอน, สารบัญเว็บไทย, Chat, เว็บบอร์ด, หาเพื่อน, ไดอารี่, ดูดวง, ฟุตบอล, รถยนต์, ดูหนัง, ละครดารา, เซ็กซ์, ผู้หญิง" />
<meta name="Description" content="เว็บไซต์อันดับ 1 ของเมืองไทยที่รวม เกมส์ ดูดวง ฟังเพลง หางาน สารบัญเว็บไทย หาเพื่อน ดูดวง ฟุตบอล รถยนต์ ดารา เซ็กซ์ ผู้หญิง มือถือ ท่องเที่ยว ฟรี อีเมล์ ดาวน์โหลด หางาน"/>
<meta name="author" content="Sanook Online Ltd., Thailand" />
	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
	<link href="sanngam_main.css" rel="stylesheet" type="text/css">

</head>
<?  include("initial/connect.php"); ?>
<?  include("backoffice/manage/c_access.php"); ?>
<body  background="images/BG_flower.gif">

<table width="993" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF">
  <? include("menu_head.php"); ?>
  <tr>
    <td align="center">
	<!-- Start Middle 1 Boby-->
	<table width="987" border="0" cellspacing="2" cellpadding="0">

	<tr><td width="222" rowspan="4" valign="top" bgcolor="#feeefb">
	<!--Start Left Bar -->
	<? include("menu_left.php"); ?>
	<!--End Left Bar --></td>
	
	 <td colspan="3" align="center" height="105" bgcolor="#CCCCCC"  valign="top"><img src="images/beautyalertfile/bar_bannerA.jpg"></td>   
	</tr>
  <tr>
    <td align="center" valign="top" colspan="2"><!--Start Alert -->
	  
	  
<iframe src="beauty_alert.php" width="500" height="648"  scrolling="auto"  frameborder="0" ></iframe>
	<!--EndAlert --></td>
    <td  valign="top"  width="259"  ><!--Start Right bar -->
		<table width="259" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td   bgcolor="#cecece">
	<table width="259" border="0" cellspacing="1" cellpadding="0" >
  <tr>
    <td   >
				<table width="259" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td  background="images/bar_blue2.jpg" height="30"><img src="images/beauty_current.jpg"></td>
			  </tr>
			  <tr>
				<td bgcolor="#a6d6f7" class="m8B" >&nbsp;ติดตามเหตุการข่าวสารความงามได้้้ที่นีู่้้้้   &nbsp;&nbsp;&nbsp;&nbsp;<a  href="in_current.php"  class="newlinkPink">More..</a>			</td>
			  </tr>
			  <tr>
				<td class="m8"  bgcolor="#edf6fa" align="right">
				
								<table width="259" border="0" cellspacing="3" cellpadding="0" class="m8">
								
								<?
    $sqlnews = "select  *  from news ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlnews) or die("Query failed sqlnews    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<5) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		$nPicture= $row[nPicture2];
	$ntittle=substr($ntittle,0,100)."...";
	if (strlen($ndesc)>=355){		$ndesc=substr($ndesc,0,355)."   <A HREF='innews.php#".$Id."' >อ่านต่อ</A>...";}
//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$update_date= $uday."/".$umonth."/".$uyear; ?>
		
  <tr><td valign="top"><?if (isset($nPicture) and $nPicture<>''){?> <IMG  src="images/newsfile/<?=$nPicture?>"   hspace=5  height=40  border="0" > <?}?>
  </td><td align="left" valign="top"><a href="in_current_detail.php?newsID=<?=$Id?>"><?=$ntittle?></a></td></tr>
 <? $inicount++;}?>
				</table></td>
			  </tr>
			</table>	</td>
  </tr>
  <tr height="3">
  <td bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td>
	<table width="259" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td  background="images/bar_blue2.jpg"><img src="images/beauty_grand.jpg"  height="30"></td>
			  </tr>
			  <tr>
				<td bgcolor="#a6d6f7" class="m8B">&nbsp;ศุนย์กลางซื้อ-ขายผลิตภัณฑ์์์ความงามและสุขภาพ</td>
			  </tr>
			  <tr>
				<td class="m8" bgcolor="#edf6fa" align="right">
				
				<table width="259" border="0" cellspacing="3" cellpadding="0" class="m8">
												<?
    $sqlclinicTop = "select  *  from grandsale ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<5) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		if (strlen($ntittle)>=100){ $ntittle=substr($ntittle,0,100)." ...";}
 ?>
  <tr><td valign="top" width="13"><img src="images/bl4.gif" hspace="3" vspace="3"></td><td ><a href="in_grandsale.php#<?=$Id?>"><?=$ntittle?></a></td></tr>
 <? $inicount++;}?>

  
				</table></td>
			  </tr>
			</table>	</td>
  </tr>
    <tr height="3">
  <td bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td>
	<table width="259" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td  background="images/bar_blue2.jpg"><img src="images/beauty_gissip.jpg"></td>
			  </tr>
			  <tr>
				<td bgcolor="#a6d6f7" class="m8B">&nbsp;ซุบซิบวงการบันเทิง เรื่องร้อนที่ใครก็อยากรู้</td>
			  </tr>
			  <tr>
				<td class="m8" bgcolor="#edf6fa">
				
							<table width="259" border="0" cellspacing="3" cellpadding="0" class="m8">
  	
								<?
    $sqlnews = "select  *  from gossip ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlnews) or die("Query failed sqlnews    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<5) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		$nPicture= $row[nPicture2];
	if (strlen($ntittle)>=355){		$ntittle=substr($ntittle,0,100)."...";}
 ?>
		
  <tr><td valign="top" width="28"><?if (isset($nPicture) and $nPicture<>''){?> <IMG  src="images/gossipfile/<?=$nPicture?>"   height="28" width="28"  border="0" > <?}?></td><td width="217" valign="top"><a href="in_gossip_detail.php?gossipID=<?=$Id?>"><?=$ntittle?></a></td></tr>
 <? $inicount++;}?>
				</table>						</td>
			  </tr>
			</table>	</td>
  </tr>
</table>	</td>
  </tr>
</table>
	
	<!--End Right bar --></td>
  </tr>
  <tr>
  
    <td  width="248" align="left" valign="top">
	
	<table border="0" cellspacing="0" cellpadding="0" width="248">
			  <tr>
				<td   bgcolor="#cecece">
				
	<table border="0" cellspacing="1" cellpadding="0" width="248">
			  <tr>
				<td  background="images/bg_blue.jpg"><img src="images/beauty_talk.jpg"></td>
			  </tr>
			  <tr>
				<td bgcolor="#a6d6f7" class="m8B">&nbsp;ห้องสนทนาด้านความงามและสุขภาพ &nbsp;&nbsp;&nbsp;<a   href="webboard.php" class="newlinkBlue" target="_blank">More..</a></td>
			  </tr>
			  <tr>
				<td class="m8" bgcolor="#dbf2fd">
				
							<table width="248" border="0" cellspacing="1" cellpadding="0" class="m8">
<?
	$sqlpicture = "select * from wb_topic  where Enable='1'  ORDER BY  tpID  DESC";
	$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
	$bcount=0;
	while($row=mysql_fetch_array($rs) and $bcount<5) { 

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
			$uyear = (string)(substr($uyear,2,2));
		$utime = substr($update_date,11,8)."...";
		//$update_date= $uday."/".$umonth."/".$uyear."    ".$utime;
		$update_date= $uday."/".$umonth."/".$uyear;
	if (strlen($tpTopic)>=60){		$tpTopic=substr($tpTopic,0,60)." ...";}
			$sqlcoutsub = "select count(*) CC  from wb_reply  where  tpID='$tpID'";
			$rscountsub = mysql_query($sqlcoutsub) or die("Query failed sqlcoutsub    : ".mysql_error());
			while($rowcountsub=mysql_fetch_array($rscountsub)) { 
					$countsub= $rowcountsub[CC];
			}
?>            

<tr><td valign="top" width="3"><img src="images/bl4.gif" vspace="3"></td><td> <A  target="_blank" class=link  href="webboard_post.php?tpID=<?=$tpID?>">&nbsp;<?=$tpTopic?></A> &nbsp;<font class="m10b" ><?=$tpName?></font> (  <?=$counter?> - <?=$update_date?> )</td></tr>
  
                          
	<? $bcount++;}?>
   <tr  height="102">
                    <td align="center" colspan="2" ><img src="images/bottom/talk1.jpg"></td>
                  </tr>
				</table>						</td>
			  </tr>
			</table></td>
			  </tr>
			</table>	</td>
	  <td  width="248" align="left" valign="top"><table border="0" cellspacing="0" cellpadding="0" width="248">
        <tr>
          <td   bgcolor="#cecece"><table border="0" cellspacing="1" cellpadding="0" width="248"  >
              <tr>
                <td  background="images/bg_blue.jpg"><img src="images/beauty_tips.jpg"></td>
              </tr>
              <tr>
                <td bgcolor="#a6d6f7" class="m8B">&nbsp;เกร็ดเล็กเกร็ดน้อยด้านความงามและสุขภาพ</td>
              </tr>
              <tr>
                <td class="m8" bgcolor="#dbf2fd">
				<table width="248" border="0" cellspacing="3" cellpadding="0" class="m8">
                    <tr>
                      <td align="center" colspan="2" ><img src="images/bottom/nail1.jpg"></td>
                    </tr>
                  												<?
    $sqlclinicTop = "select  *  from tips ORDER BY  gaOrder ASC";
	$stmt = mysql_query($sqlclinicTop) or die("Query failed sqlclinicTop    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<8) {

		$Id= $row[Id];
		$ntittle= $row[ntittle];
		if (strlen($ntittle)>=100){		$ntittle=substr($ntittle,0,100)." ...";}
 ?>
  <tr><td valign="top" width="16"><img src="images/bl4.gif" hspace="3" vspace="3"></td>
  <td width="223" ><a href="in_tips.php#<?=$Id?>"><?=$ntittle?></a></td>
  </tr>
 <? $inicount++;}?>

                </table><div align="right"><a   href="in_tips.php" class="newlinkBlue" >More..</a></div></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
	  <td  width="261"  valign="top">
	  
<table border="0" cellspacing="0" cellpadding="0" width="259">
			  <tr>
				<td   bgcolor="#cecece" >
				
	<table border="0" cellspacing="1" cellpadding="0" width="259">
			  <tr>
				<td width="257"  background="images/bg_blue.jpg"><img src="images/beauty_box.jpg"></td>
			  </tr>
			  <tr>
				<td bgcolor="#a6d6f7" class="m8B">&nbsp;ไดอารี่ส่วนตัวสำหรับผู้ชื่นชอบการบันทึก</td>
			  </tr>
			  <tr>
				<td class="m8" bgcolor="#dbf2fd">
				<br>
							<table width="255" border="0" cellspacing="3" cellpadding="0" class="m8">
  <tr><td valign="top" width="118">
  <table width="110" border="0" cellspacing="0" cellpadding="0"   class=m8>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    
    <td background="images/book_rim.jpg" width="16"></td>
	<td   bgcolor="#000000" align="center"><img src="images/book_ex2.jpg"></td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr height=5>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000" width="16"></td>
  </tr>
</table>

  </td>
  <td valign="top" width="122">
  <table width="110" border="0" cellspacing="0" cellpadding="0"    class=m8 >
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    
    <td background="images/book_rim.jpg" width="16"></td>
	<td   bgcolor="#000000" align="center"><img src="images/book_ex3.jpg"></td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000" width="16"></td>
  </tr>
</table>  </td>
  </tr>
  <tr height="111">
  <td valign="top" width="118">
  <table width="110" border="0" cellspacing="0" cellpadding="0"     class=m8>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    
    <td background="images/book_rim.jpg" width="16"></td>
	<td   bgcolor="#000000" align="center"><img src="images/book_ex.jpg"></td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000" width="16"></td>
  </tr>
</table>  </td>
 <td valign="top" width="122">
  <table width="110" border="0" cellspacing="0" cellpadding="0"     class=m8>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    
    <td background="images/book_rim.jpg" width="16"></td>
	<td   bgcolor="#000000" align="center"><img src="images/book_ex4.jpg"></td>
    <td   bgcolor="#000000"  width="16"></td>
  </tr>
  <tr>
    <td background="images/book_rim1.jpg" width="16"></td>
    <td   bgcolor="#000000">&nbsp;</td>
    <td   bgcolor="#000000" width="16"></td>
  </tr>
</table>  </td>
  </tr> 
  
  <tr   height="15" >   
   <td colspan=2 align="right"  class="m8bB">
    Comming Soon... </td>
  </tr>  
				</table>						</td>
			  </tr>
			</table></td>
			  </tr>
			</table>	</td>
	  </tr>
	  <tr>
	  <td colspan="3" align="center" height="105" bgcolor="#CCCCCC"><img src="images/beautyalertfile/bar_bannerB.jpg" width="765"><br>	 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Vote </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%"   valign="top">
<table  border="0" cellspacing="0" cellpadding="0" class="m8"  width="100%">
  <tr>
    <td align="left" valign="top"> 
	<ul>
	
	<?
    $sqlnews = "select  *  from tbvote   where vReEnable = '1'  ";
	$stmt = mysql_query($sqlnews) or die("Query failed sqltbvote   : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt) and  	$inicount<5) {

		$Id= $row[Id];
		$vSubject= $row[vSubject];
	if (strlen($vSubject)>=150){ $vSubject=substr($vSubject,0,150)."...";}
 ?>
		
    <li><img src="images/ico_b<?=$inicount+1?>.gif" hspace="2" vspace="2"> <?=$vSubject?></li>
 <? $inicount++;}?>
	</ul>
	<div align="right"><a  href="in_vote_detail.php" class="newlinkBlue">More..</a></div>
	</td> 
	 <td  align="right"> <img src="images/vote2.gif"  hspace="2" vspace="2"></td>
  </tr>
</table>


                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
	</td>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Horoscope </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%"  ><table  border="0" cellspacing="0" cellpadding="0" class="m8" >
  <tr>

    <td><img src="images/bullet02.gif"></td>
    <td> ปีชวด เจ้าหนูผู้ไม่อยู่นิ่ง</td> 
	 <td rowspan="7"><img src="images/horoscopewheel.gif"></td>
  </tr>

  <td><img src="images/bullet02.gif"></td>
    <td> ปีฉลู วัวจอมขยัน
</td>
    </tr>
	  <tr>
  <td><img src="images/bullet02.gif"></td>
    <td> ปีขาล เสือจอมพลัง

</td>
    </tr>
	  <tr>
  <td><img src="images/bullet02.gif"></td>
    <td>ปีฉลู วัวจอมขยัน
</td>
    </tr>
	  <tr>
  <td><img src="images/bullet02.gif"></td>
    <td> ปีเถาะ


กระต่ายน้อยแสนอ่อนหวาน
</td>
    </tr>
		  <tr>
  <td><img src="images/bullet02.gif"></td>
    <td> ปีมะโรง


มังกรผู้สูงส่ง

</td>
    </tr>
		  <tr>
  <td ><img src="images/bullet02.gif"></td>
    <td> ปีมะเส็ง


งูน้อยฝีปากเอก

</td>
    </tr>
</table>


                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
	</td>
    <td>
	<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Advice </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%"   valign="top">
<table  border="0" cellspacing="0" cellpadding="0" class="m8"  width="100%">
  <tr>
    <td align="left" valign="top"> 
	<ul>
	
    <li><img src="images/ico_b1.gif" hspace="2" vspace="2">มนุษย์ใช้สมองแค่ 10% เท่านั้น</li>
 <li><img src="images/ico_b2.gif" hspace="2" vspace="2">ควรดื่มน้ำอย่างน้อยวันละ 8 แก้ว</li>
 <li><img src="images/ico_b3.gif" hspace="2" vspace="2">อ่านหนังสือในที่แสงน้อยทำให้สายตาเสีย</li>
 <li><img src="images/ico_b4.gif" hspace="2" vspace="2">ใช้โทรศัพท์เคลื่อนที่ในโรงพยาบาล เป็นอันตรายต่อผู้ป่วย</li>
 
	</ul>
	<!-- <div align="right"><a  href="in_vote_detail.php" class="newlinkBlue">More..</a></div>-->
	</td> 
	 <td  align="right"> <img src="images/doctorS.jpg" hspace="2" vspace="2"></td>
  </tr>
</table>


                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
	
	</td>
  </tr>
</table>
 
	   </td>     
	  </tr>
</table>

	<!--End Middle 1 Boby -->
	</td>
  </tr>
  <!--
  <tr>
    <td>
	
	<table border="0" cellspacing="2" cellpadding="0" class="m8" width="100%">      
	  <tr>        <td>
		
		<TABLE cellSpacing=0 cellPadding=0 width="245"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Vote</TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
							
							
							
		
		</td>
        <td>
		<TABLE cellSpacing=0 cellPadding=0 width="245"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Advice </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
		</td>
        <td>		<TABLE cellSpacing=0 cellPadding=0 width="245"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Relex </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
		</td>
        <td>
					<TABLE cellSpacing=0 cellPadding=0 width="247"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty@Work</TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
					  </TABLE>
			</TD></TR></TABLE>
		</td>
      </tr>
      <tr>
        <td  valign="top" >		<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Profile </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
		</td>
        <td valign="top" >		<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Letter </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
				  </TABLE>
			</TD></TR></TABLE>
		</td>
        <td>		
		</td>
        <td  valign="top" >
					<TABLE cellSpacing=0 cellPadding=0 width="100%"> <TR><TD vAlign=top align=middle bgColor=#04aefe>
                      <TABLE cellSpacing=1 cellPadding=0 width="100%">
                          <TR >
                            <TD bgColor=#83d5fd    height=20 class="m8wB">&nbsp;Beauty Holistic </TD>
                          </TR>
                          <TR >
                            <TD   bgcolor="#ffffff"align=middle width="33%">&nbsp;
                            </TD>
                        </TR>
					  </TABLE>
			</TD></TR></TABLE>
		</td>
      </tr>
     
    </table>
	</td>
  </tr>
  --> 
  <tr>
  <td>
    <? include("menu_bottom.php"); ?>
</td>
</tr>
</table>

</body>
</html>
