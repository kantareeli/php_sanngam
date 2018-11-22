<?
session_start();
include("../connect/connect_oci.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
####################################################
########## Department : Broadband Contents  			      ##########
########## Company : Asianet Corporation Limited         ##########
########## Project : MCU     				                                          ##########
########## Date : 12 September  2003							          ##########
####################################################
-->
<HTML>
<HEAD>
<TITLE>!!!! www.Phak2.go.th !!!!</TITLE>
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #FFFFFF;}
a:hover {color: #00FFFF;}

.EditControl       {       
width:500px;               
height:300px;      }       
.tblTable          {       
width : 500px;             
height: 30px;              
border:0;                  
cellspacing:0;             
cellpadding:0;             
background-color:#D4D0C8;
                   }     
.butClass          {       
width:22;                  
height:22;                 
border: 0px solid;         
border-color: #D6D3CE ;    
background-color:#D4D0C8;
                   }       
.tdClass           {       
padding-left: 0px;         
padding-top:0px;           
background-Color: #D4D0C8; }       

</style>

<script language="JavaScript"> 
nereidFadeObjects = new Object();
nereidFadeTimers = new Object();
function nereidFade(object, destOp, rate, delta){
if (!document.all)
return
    if (object != "[object]"){  //do this so I can take a string too
        setTimeout("nereidFade("+object+","+destOp+","+rate+","+delta+")",0);
        return;
    }
    clearTimeout(nereidFadeTimers[object.sourceIndex]);
    diff = destOp-object.filters.alpha.opacity;
    direction = 1;
    if (object.filters.alpha.opacity > destOp){
        direction = -1;
    }
    delta=Math.min(direction*diff,delta);
    object.filters.alpha.opacity+=direction*delta;
    if (object.filters.alpha.opacity != destOp){
        nereidFadeObjects[object.sourceIndex]=object;
        nereidFadeTimers[object.sourceIndex]=setTimeout("nereidFade(nereidFadeObjects["+object.sourceIndex+"],"+destOp+","+rate+","+delta+")",rate);
    }
}
</script>

<script language="javascript">
var win = null;
function NewWindow(mypage,myname,w,h){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>

<script language=JavaScript>
<!--

//Disable right click script III

var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>


<?
$sql = "select GALLERYSUB_SUBJECT ,UPDATE_DATE  from GALLERY_SUBJECT  where GALLERYSUB_ID ='$gallerysub_id' ";
$stmt_edit=mysql_query($sql );

		$gallerysub_subject=mysql_result($stmt_edit, 0,"GALLERYSUB_SUBJECT");
		$update_date=mysql_result($stmt_edit, 0,"UPDATE_DATE");

$sql2 = "select GALLERY_TITLE, GALLERY_NAME from GALLERY  where  GALLERY_ID= '$gallery_id' ";
$stmt2 = mysql_query($sql2);
	
		$gallery_title = mysql_result($stmt2, 0,"GALLERY_TITLE");
		$gallery_name = mysql_result($stmt2, 0,"GALLERY_NAME");

?>
<BODY topmargin="0" leftmargin="0" bgcolor="#DCEECB">
<FORM  ACTION="" name="frmmain" method="POST" enctype="multipart/form-data">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="40">
				<tr>
					<td bgcolor="#DCEECB" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
					<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="40" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->




<!--Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
	<tr>
		<td valign="top">

			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="505" bgcolor="#DCEECB">
				<tr>
					<td valign="top" bgcolor="">
<!--Middle Table-------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
							<tr>
								<td align="" valign="top" colspan="1" width="85%">
									
								
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr  width="100%">
											<td width="100%" align="">
												<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">				<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#DCEECB">
													<tr bgcolor="#29672B">
														<td colspan =5 align="left"><!---<img 
                  alt="พัฒนาการ พ.ร.บ. มจร." border=0 height=17 name=law1
                  src="../images/menu_law31.gif" width=170 >----><a href="gallery_view.php?countpage=<?print$countpage?>&gallerysub_id=<?print$gallerysub_id?>" 
                  onMouseOut="document.total.src='../images/menu_total2.gif'; return true" 
                  onMouseOver="document.total.src='../images/menu_total1.gif'; return true"><img 
                  alt="รายการทั้งหมด" border=0 height=17 name=total
                  src="../images/menu_total2.gif" width=170 style="cursor:hand"></a></td></tr>
														<tr bgcolor="#29672B">
														<td colspan=5></td>
<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#DCEECB">

							<tr bgcolor="#29672B"> 
                              <td align="">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แฟ้มภาพ  "<?print$gallerysub_subject?>"  >>> แก้ไขข้อมูล</B></FONT></td>
                            </tr>

                            <tr bgcolor="#DCEECB"> 
                              <td align=""><BR>
                                &nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B> 
                                </B></FONT> 
                                <table width="600" border="3" cellspacing="2" cellpadding="3" align="center" bordercolor="#336633">
                                  <tr> 
                                    <td> 
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
									  <!----------------
                                        <tr> 
                                          <td height="12" colspan="2"><b><b>1. 
                                            หัวข้อแฟ้มภาพ</b></b></td>
                                        </tr>
										<tr> 
                                          <td height="12" width="110"><b>&nbsp;<b></b></b></td>
                                          <td height="12" width="412"> 
                                            <input type="text" name="gallerysub_subject" size="83" value="<?print$gallerysub_subject?>">
                                          </td>
                                        </tr>
										------------------------>
                                        <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412">&nbsp;</td>
                                        </tr>

<tr> 
                                          <td height="12" colspan="2"><b><H1>Upload Image</H1></b><HR></td>
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                           
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                                        </tr>
										 <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412"><IMG name="upload_img" SRC="../../gallery/middle/<?print$gallery_name?>" WIDTH="160" HEIGHT="120"  BORDER="1" ALT="Image Sample" ><!--<br>Click browse to upload a local file :<br><input type="file" name="imgfile" onchange = "getimg()" style="cursor:hand" size="50"><input type="hidden" name="MAX_FILE_SIZE" value="">----></td>
                                        </tr>
 <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412">รายละเอียดภาพ :<br><TEXTAREA NAME="gallery_title" ROWS="3" COLS="50"><?print$gallery_title?></TEXTAREA></td>
                                        </tr>
                                        <tr> 
                                          <td width="110"> 
                                            <div align="center"> 
                                              <input type="hidden" value="" name="count" size=10 readonly >
                                              <br>
                                             </div>
                                          </td>
                                          <td height="12" width="412"> 
                                          </td>                                      
                                        <tr> 
                                          <td height="12" colspan="2" align="center"><input type="submit" value="Upload Image" onclick="return save_data()" style="cursor:hand"></td>
        <!--                                  <td height="12" width="412"> -->
                                            
<!--                                            <input type="submit" name="Submit2" value="ยกเลิก">-->
                            <!--              </td>-->
                                        </tr>
                                        <tr> 
                                          <td height="12" colspan="2">&nbsp;</td>
                                        </tr>
										<!-------------------
                                        <tr> 
                                          <td height="12" width="110">&nbsp;* 
                                            ปรับปรุงข้อมูลเมื่อ</td>
                                          <td height="12" width="412">dd/mm/yyyy 
                                            xx:xx</td>
                                        </tr>
										------------------------>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                                <br>
                                <br>
                                <FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B> 
                                </B></FONT></td>
                            </tr>
                            <tr bgcolor="#336633"> 
                              <td align="center"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT> 
                                <div align="center"></div>
                                &nbsp; <FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
                            </tr>
                          </table>
																										
														
														</tr>
														
													</table>
												</FONT>
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
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="">
				<tr>
					<td valign="top">
<!--Down Table--------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="#D4D0C8">
							<tr>
								<td align="" width="" colspan="2" background="../images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Production</B></FONT></td>
							</tr>
							<tr>
								<td align="" width="15%"><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;<B>Powered by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">True Corporation Plc. </FONT></td>
							</tr>
							<tr valign="top">
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Developed by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><!-- Asia Multimedia Co., Ltd.<BR> -->Asianet Corporation Limited<BR>
								27th Floor, 1 Fortune Town, Ratchadaphisek Rd, Huay Khwang, Bangkok 10320, Thailand.
								</FONT></td>
							</tr>
<!-- 
							<tr>
								<td align="" width="">&nbsp;<B>Contact</B><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;</FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="">Mr.Ramsak  Kaewsorn</FONT></td>
							</tr>
 -->
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Tel. / Fax.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">+66 0 2699 5449 / +66 0 2641 1833</FONT></td>
							</tr>
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>E-mail.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><A HREF="mailto:content@ims.co.th" style="text-decoration:none"><FONT FACE="ms sans serif" SIZE="1" COLOR="#000000" style="font-family: ms sans serif; font-size:7pt;">content@ims.co.th</FONT></A></FONT></td>
							</tr>
							<tr>
								<td align="" width="" colspan="2" background="../images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;"></FONT></td>
							</tr>
						</table>
<!--End Down Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>
<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->

</font>
<INPUT TYPE="hidden" NAME="gallerysub_id" value="<?print$gallerysub_id?>">
<INPUT TYPE="hidden" NAME="countpage" value="<?print$countpage?>">
<INPUT TYPE="hidden" NAME="gallery_id" value="<?print$gallery_id?>">



</form>

</BODY>
	<SCRIPT language=JavaScript src="../connect/menu_array.js" type=text/javascript></SCRIPT>
	<SCRIPT language=JavaScript src="../connect/mmenu.js" type=text/javascript></SCRIPT>
</HTML>

<script language=javascript>
function getimg(){
		frmmain.upload_img.src = frmmain.imgfile.value ;
	}

function save_data(){
	/*
if(!frmmain.imgfile.value){
	alert("กรุณาเลือกรูปที่ต้องการ Upload");
	frmmain.imgfile.focus();
	return false
}
*/
//alert(frmmain.imgfile.value);
	frmmain.action="gallery_view_edit_save.php";
}

	function goto_del(countpage,code){
	if  (!confirm('คุณต้องการจะลบข้อมูลนี้ใช่หรือไม่')) {
			return false;
	}
		frmmain.action = 'gallery_view_del.php?code='+code+"&countpage="+countpage;
	}

	function checkit(code,countpage){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'gallery_view_check.php?gallerysub_id='+frmmain.gallerysub_id.value+"&gallery_id="+code;
		frmmain.submit();
		
	}

	function uncheckit(code,countpage){
		frmmain.checkbox1.checked=false;
		frmmain.action = 'gallery_view_uncheck.php?countpage='+countpage+'&gallerysub_id='+frmmain.gallerysub_id.value+'&gallery_id='+code;
		frmmain.submit();
	
	}

	</script>
