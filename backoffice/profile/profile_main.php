<?
session_start();
if (!isset($adminID)){?>
	<script language = "javascript">
		window.location="../index.php";
	</script>
<?}


include("../../initial/connect.php");
	/*$sqlcount = "select  count(*) CC  from galleryalbum ORDER BY  gaID";
	$stmtcount= mysql_query($sqlcount ) or die ("Invalid query 1 : " . mysql_error());
	$totalrec= mysql_result($stmtcount,0,"CC");*/
?>
<?
if (isset($mode) && ($mode=="MOVEUP")) {	
	$sqlA = "select  mporderdisplay  from memberprofile  where   mpID ='$f_id'";
	//echo $sqlA."<BR>";
	$countstmtA = mysql_query($sqlA ) or die ("Invalid query sqlA : " . mysql_error());
	while($rowA = mysql_fetch_array($countstmtA)){
			$FAQ_ORDER=$rowA['mporderdisplay'];
			//echo "FAQ_ORDER".$f_id." ".$FAQ_ORDER."<BR>";
	}
	$FAQ_ORDER=$FAQ_ORDER-1;
	$sqlB = "select  mpID  from memberprofile  where   mporderdisplay ='$FAQ_ORDER'";	
	//echo  $sqlB."<BR>";
	$countstmt = mysql_query($sqlB ) or die ("Invalid query sqlB : " . mysql_error());
	while($rowB= mysql_fetch_array($countstmt)){
			$Id_upper=$rowB['mpID'];
			//echo  "Id_upper".$Id_upper." ".$FAQ_ORDER."<BR>";
	}
	
	$sql1 = "update  memberprofile set mporderdisplay=mporderdisplay-1  where   mpID ='$f_id'"; 
	//echo  $sql1."<BR>";
	$updatestmt1 = mysql_query($sql1 ) or die ("Invalid query sql1 : " . mysql_error());

	$sql2 = "update  memberprofile set mporderdisplay=mporderdisplay+1 where   mpID ='$Id_upper'"; 
	//echo  $sql2."<BR>";
	$updatestmt2 = mysql_query($sql2 ) or die ("Invalid query sql2 : " . mysql_error());

}
if (isset($mode) && ($mode=="MOVEDOWN")) {	
		$sqlA = "select  mporderdisplay  from memberprofile  where   mpID ='$f_id'";
	//	echo $sqlA."<BR>";
		$countstmtA = mysql_query($sqlA ) or die ("Invalid query sqlA : " . mysql_error());
		while($rowA = mysql_fetch_array($countstmtA)){
			$FAQ_ORDER=$rowA['mporderdisplay'];
			//echo "FAQ_ORDER".$f_id." ".$FAQ_ORDER."<BR>";
		}
		$FAQ_ORDER=$FAQ_ORDER+1;
		$sqlB = "select  mpID  from memberprofile  where   mporderdisplay ='$FAQ_ORDER'";	
		//echo  $sqlB."<BR>";
		$countstmt = mysql_query($sqlB ) or die ("Invalid query sqlB : " . mysql_error());
		while($rowB= mysql_fetch_array($countstmt)){
			$Id_upper=$rowB['mpID'];
			//echo  "Id_upper".$Id_upper." ".$FAQ_ORDER."<BR>";
		}
	
		$sql1 = "update  memberprofile set mporderdisplay=mporderdisplay+1  where   mpID ='$f_id'"; 
		//echo  $sql1."<BR>";
		$updatestmt1 = mysql_query($sql1 ) or die ("Invalid query sql1 : " . mysql_error());

		$sql2 = "update  memberprofile set mporderdisplay=mporderdisplay-1 where   mpID ='$Id_upper'"; 
		//echo  $sql2."<BR>";
		$updatestmt2 = mysql_query($sql2 ) or die ("Invalid query sql2 : " . mysql_error());
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML>
<HEAD>
<TITLE> Member Profile</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #FFFFFF;}
a:hover {color: #00FFFF;}
</style>

<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<script type="text/javascript" src="../../js_address.js"></script>
<form action="" name="frmmain" id="frmmain" method="post">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#F6FBFE" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->




<!--Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
	<tr>
		<td valign="top">

			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="505" bgcolor="#F6FBFE">
				<tr>
					<td valign="top" bgcolor="">
<!--Middle Table-------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
							<tr>
								<td align="" valign="top" colspan="1" width="85%">
									
								
									<table border="0" cellpadding="0" cellspacing="0" width="100%" >
										<tr  width="100%">
											<td width="100%" align="center">
												<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
												<table   bordercolor="#999999" border="1" cellpadding="0" cellspacing="1" bgcolor="#F6FBFE">

					<tr bgcolor="#4FAEFF">
							<td align="center" width="5%">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>ลำดับ</B></FONT></td>
							<td align="center" width="5%">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>User</B></FONT></td>
					<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>เพศ</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ชื่อ - สกุล</B></FONT></td>	
									
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>วันเกิด</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>Email</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ที่อยู่</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แขวง/ตำบล</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>เขต/อำเภอ</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>จังหวัด</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>รหัสไปรษณีย์</B></FONT></td>
									<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>โทรศัพท์</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>วันสมัคร</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ครั้ง</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ล่าสุด</B></FONT></td>		
							<td align="center" width="5%">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ลบ</B></FONT></td>
				</tr>
<?
	$sqlB = "select  max(mporderdisplay) AS MAXgaOrder    from memberprofile"; 
	$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
	while($rowB = mysql_fetch_array($stmtB)){
			$MAXgaOrder=$rowB['MAXgaOrder'];
	}

	$sql = "select  *  from memberprofile ORDER BY  mporderdisplay ASC";
	$stmt = mysql_query($sql ) or die ("Invalid query sql : " . mysql_error());
	$inicount = 0;
	while($row = mysql_fetch_array($stmt)){

					$mpID=$row['mpID'];
					$mpName=$row['mpName'];
					$mpSirname=$row['mpSirname'];
					$mpPhone=$row['mpPhone'];
					$mpEmail=$row['mpEmail'];
					$mpUserName=$row['mpUserName'];
					$mpSex=$row['mpSex'];
					$mpAddress=$row['mpAddress'];
					$mpAddrSec1=$row['mpAddrSec1'];
					$mpAddrSec2=$row['mpAddrSec2'];
					$mpProvince=$row['mpProvince'];
					$mpZipCode=$row['mpZipCode'];
					$mpBirth=$row['mpBirth'];
					$regisDate=$row['regisDate'];
					
					/*
					$tpText = ereg_replace (chr(13),"<br>",$tpText );
					  <option value="81">กระบี่</option>
                      <option value="10">กรุงเทพมหานคร</option>
                      <option value="71">กาญจนบุรี</option>
                      <option value="46">กาฬสินธุ์</option>
                      <option value="62">กำแพงเพชร</option>
                      <option value="40">ขอนแก่น</option>
                      <option value="22">จันทบุรี</option>
                      <option value="24">ฉะเชิงเทรา</option>
                      <option value="20">ชลบุรี</option>
                      <option value="18">ชัยนาท</option>
                      <option value="36">ชัยภูมิ</option>
                      <option value="86">ชุมพร</option>
                      <option value="57">เชียงราย</option>
                      <option value="50">เชียงใหม่</option>
                      <option value="92">ตรัง</option>
                      <option value="23">ตราด</option>
                      <option value="63">ตาก</option>
                      <option value="26">นครนายก</option>
                      <option value="73">นครปฐม</option>
                      <option value="48">นครพนม</option>
                      <option value="30">นครราชสีมา</option>
                      <option value="80">นครศรีธรรมราช</option>
                      <option value="60">นครสวรรค์</option>
                      <option value="12">นนทบุรี</option>
                      <option value="96">นราธิวาส</option>
                      <option value="55">น่าน</option>
                      <option value="31">บุรีรัมย์</option>
                      <option value="13">ปทุมธานี</option>
                      <option value="77">ประจวบคีรีขันธ์</option>
                      <option value="25">ปราจีนบุรี</option>
                      <option value="94">ปัตตานี</option>
                      <option value="14">พระนครศรีอยุธยา</option>
                      <option value="56">พะเยา</option>
                      <option value="82">พังงา</option>
                      <option value="93">พัทลุง</option>
                      <option value="66">พิจิตร</option>
                      <option value="65">พิษณุโลก</option>
                      <option value="76">เพชรบุรี</option>
                      <option value="67">เพชรบูรณ์</option>
                      <option value="54">แพร่</option>
                      <option value="83">ภูเก็ต</option>
                      <option value="44">มหาสารคาม</option>
                      <option value="49">มุกดาหาร</option>
                      <option value="58">แม่ฮ่องสอน</option>
                      <option value="35">ยโสธร</option>
                      <option value="95">ยะลา</option>
                      <option value="45">ร้อยเอ็ด</option>
                      <option value="85">ระนอง</option>
                      <option value="21">ระยอง</option>
                      <option value="70">ราชบุรี</option>
                      <option value="16">ลพบุรี</option>
                      <option value="52">ลำปาง</option>
                      <option value="51">ลำพูน</option>
                      <option value="42">เลย</option>
                      <option value="33">ศรีสะเกษ</option>
                      <option value="47">สกลนคร</option>
                      <option value="90">สงขลา</option>
                      <option value="91">สตูล</option>
                      <option value="11">สมุทรปราการ</option>
                      <option value="75">สมุทรสงคราม</option>
                      <option value="74">สมุทรสาคร</option>
                      <option value="27">สระแก้ว</option>
                      <option value="19">สระบุรี</option>
                      <option value="17">สิงห์บุรี</option>
                      <option value="64">สุโขทัย</option>
                      <option value="72">สุพรรณบุรี</option>
                      <option value="84">สุราษฎร์ธานี</option>
                      <option value="32">สุรินทร์</option>
                      <option value="43">หนองคาย</option>
                      <option value="39">หนองบัวลำภู</option>
                      <option value="15">อ่างทอง</option>
                      <option value="37">อำนาจเจริญ</option>
                      <option value="41">อุดรธานี</option>
                      <option value="53">อุตรดิตถ์</option>
                      <option value="61">อุทัยธานี</option>
                      <option value="34">อุบลราชธานี</option>
					*/
					
					$sqluserCount = "select  count(*) as cc from tbl_accesslog WHERE  aUser  = '$mpUserName'  ";
					$stmtuserCount = mysql_query($sqluserCount ) or die ("Invalid query sqluserCount : " . mysql_error());
					$userCount = 0;
					while($rowuserCount = mysql_fetch_array($stmtuserCount)){ $userCount =$rowuserCount[cc]; }
					
					$sqluserLast= "select  max( aDate )  as cc from tbl_accesslog WHERE  aUser  = '$mpUserName'  ";
					$stmtuserLast = mysql_query($sqluserLast ) or die ("Invalid query sqluserLast : " . mysql_error());
					$userLast = '-';
					while($rowuserLast = mysql_fetch_array($stmtuserLast)){ $userLast =$rowuserLast[cc]; }
				
?>
					<tr height=20>
							<td align="center" width="5%">
								<B><?=$inicount+1?></B></td>
							<td align="center">&nbsp;<?=$mpUserName?>
								</td>
							<td align="center">
								<B><? if( $mpSex == "02" ) { echo "หญิง"; } else { echo "ชาย";}?></B></td>
							<td align="left">&nbsp;<?=$mpName." ".$mpSirname?></td>
							<td align="center">&nbsp;<?=$mpBirth?></td>
							<td align="center">&nbsp;<?=$mpEmail?></td>
							<td align="center">&nbsp;<?=$mpAddress?></td>
							<td align="center">&nbsp;<script>document.write(arrItems2[<?=$mpAddrSec2?>]);</script></td>
							<td align="center">&nbsp;<script>document.write(arrItems1[<?=$mpAddrSec1?>]);</script></td>
							<td align="center">&nbsp;<script>document.write(arrItems0[<?=$mpProvince?>]);</script></td>
							<td align="center">&nbsp;<?=$mpZipCode?></td>
							<td align="center">&nbsp;<?=$mpPhone?></td>
							<td align="center">&nbsp;<?=$regisDate?></td>
							<td align="center">&nbsp;<?=$userCount?></td>
							<td align="center">&nbsp;<?=$userLast?></td>							
							<td align="center">
								<?if ($mporderdisplay==$MAXgaOrder){?><A style="CURSOR: hand"  onclick="goto_del(<?=$mpID?>)"   ><IMG     alt=ลบข้อมูล   src="../images/icon_delete.gif"   border=0></A><?}?></td>
				</tr>
<?$inicount++;
}?>		
																				
														
<!------------ TOOL ----------------------------->
														<tr valign="center" >
															<td colspan="9" bgcolor="#4FAEFF" align=center>
																	 
																		
																			 
																			</td>
																		</tr>
																	</table>
																</B></FONT>
															</td>
														</tr>
<!------------ END TOOL --------------------->
														<tr >
															<td align="center" colspan="7" ><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
														</tr>
													</table>
												
											</td>
										</tr>
										
									</table>

								</td>
							</tr>
						</table>
<!--End Middle Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>

<!--Bottom Table----------------------------------------------------------------------------------------------------------------------------------------------->			

<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
</font>
<input type='hidden' name='countpage' value='<?print  $countpage?>'>
<input type="hidden" name="mode">
<input type="hidden" name="f_id">
</form>
</BODY>
</HTML>

<SCRIPT language=JavaScript>


function goto_del(code){
	if  (!confirm('คุณต้องการจะลบข้อมูลนี้ใช่หรือไม่')) {
			return false;
	}else{
		frmmain.action = 'member_del.php?gaID='+code;
		frmmain.submit();
	}
}



function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {
		 window.open("../manage/signout.php","_top");
		}
}


function moveUp(f_id){
			frmmain.mode.value = 'MOVEUP';
			frmmain.f_id.value = f_id;
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function moveDown(f_id){
			frmmain.mode.value = 'MOVEDOWN';
			frmmain.f_id.value = f_id;
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

	</SCRIPT>
