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
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>�ӴѺ</B></FONT></td>
							<td align="center" width="5%">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" ><B>User</B></FONT></td>
					<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>��</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>���� - ʡ��</B></FONT></td>	
									
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>�ѹ�Դ</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>Email</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>�������</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>�ǧ/�Ӻ�</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ࢵ/�����</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>�ѧ��Ѵ</B></FONT></td>
								<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>������ɳ���</B></FONT></td>
									<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>���Ѿ��</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>�ѹ��Ѥ�</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>����</B></FONT></td>
							<td align="center">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>����ش</B></FONT></td>		
							<td align="center" width="5%">
								<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>ź</B></FONT></td>
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
					  <option value="81">��к��</option>
                      <option value="10">��ا෾��ҹ��</option>
                      <option value="71">�ҭ������</option>
                      <option value="46">����Թ���</option>
                      <option value="62">��ᾧྪ�</option>
                      <option value="40">�͹��</option>
                      <option value="22">�ѹ�����</option>
                      <option value="24">���ԧ���</option>
                      <option value="20">�ź���</option>
                      <option value="18">��¹ҷ</option>
                      <option value="36">�������</option>
                      <option value="86">�����</option>
                      <option value="57">��§���</option>
                      <option value="50">��§����</option>
                      <option value="92">��ѧ</option>
                      <option value="23">��Ҵ</option>
                      <option value="63">�ҡ</option>
                      <option value="26">��ù�¡</option>
                      <option value="73">��û��</option>
                      <option value="48">��þ��</option>
                      <option value="30">����Ҫ����</option>
                      <option value="80">�����ո����Ҫ</option>
                      <option value="60">������ä�</option>
                      <option value="12">�������</option>
                      <option value="96">��Ҹ����</option>
                      <option value="55">��ҹ</option>
                      <option value="31">���������</option>
                      <option value="13">�����ҹ�</option>
                      <option value="77">��ШǺ���բѹ��</option>
                      <option value="25">��Ҩչ����</option>
                      <option value="94">�ѵ�ҹ�</option>
                      <option value="14">��й�������ظ��</option>
                      <option value="56">�����</option>
                      <option value="82">�ѧ��</option>
                      <option value="93">�ѷ�ا</option>
                      <option value="66">�ԨԵ�</option>
                      <option value="65">��ɳ��š</option>
                      <option value="76">ྪú���</option>
                      <option value="67">ྪú�ó�</option>
                      <option value="54">���</option>
                      <option value="83">����</option>
                      <option value="44">�����ä��</option>
                      <option value="49">�ء�����</option>
                      <option value="58">�����ͧ�͹</option>
                      <option value="35">��ʸ�</option>
                      <option value="95">����</option>
                      <option value="45">�������</option>
                      <option value="85">�йͧ</option>
                      <option value="21">���ͧ</option>
                      <option value="70">�Ҫ����</option>
                      <option value="16">ž����</option>
                      <option value="52">�ӻҧ</option>
                      <option value="51">�Ӿٹ</option>
                      <option value="42">���</option>
                      <option value="33">�������</option>
                      <option value="47">ʡŹ��</option>
                      <option value="90">ʧ���</option>
                      <option value="91">ʵ��</option>
                      <option value="11">��طû�ҡ��</option>
                      <option value="75">��ط�ʧ����</option>
                      <option value="74">��ط��Ҥ�</option>
                      <option value="27">������</option>
                      <option value="19">��к���</option>
                      <option value="17">�ԧ�����</option>
                      <option value="64">��⢷��</option>
                      <option value="72">�ؾ�ó����</option>
                      <option value="84">����ɮ��ҹ�</option>
                      <option value="32">���Թ���</option>
                      <option value="43">˹ͧ���</option>
                      <option value="39">˹ͧ�������</option>
                      <option value="15">��ҧ�ͧ</option>
                      <option value="37">�ӹҨ��ԭ</option>
                      <option value="41">�شøҹ�</option>
                      <option value="53">�صôԵ��</option>
                      <option value="61">�ط�¸ҹ�</option>
                      <option value="34">�غ��Ҫ�ҹ�</option>
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
								<B><? if( $mpSex == "02" ) { echo "˭ԧ"; } else { echo "���";}?></B></td>
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
								<?if ($mporderdisplay==$MAXgaOrder){?><A style="CURSOR: hand"  onclick="goto_del(<?=$mpID?>)"   ><IMG     alt=ź������   src="../images/icon_delete.gif"   border=0></A><?}?></td>
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
	if  (!confirm('�س��ͧ��è�ź�����Ź�����������')) {
			return false;
	}else{
		frmmain.action = 'member_del.php?gaID='+code;
		frmmain.submit();
	}
}



function exit_system(){
		if  (confirm('�س��ͧ����͡�ҡ�к����������')) {
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
